 <?php ob_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php 
    $cantidad_proy=0;
    $cantidad_proy_sup=0;
    $cantidad_supevisores=1;
    $cantidades=array();

    //desarrollo
         //   $mvc_bd_hostname_pg = "localhost";
         //   $mvc_bd_nombre_pg   = "proyectos";
         //   $mvc_bd_usuario_pg  = "postgres";
         //   $mvc_bd_clave_pg    = "qwerty";
        //
        //production
            $mvc_bd_hostname_pg = "192.168.1.244";
            $mvc_bd_nombre_pg   = "proyectos";
            $mvc_bd_usuario_pg  = "postgres";
            $mvc_bd_clave_pg    = "Acsa.2014";
        //
        $dbconn = pg_connect("host=".$mvc_bd_hostname_pg." port=5432 dbname=".$mvc_bd_nombre_pg." user=".$mvc_bd_usuario_pg." password=".$mvc_bd_clave_pg);


?>
<style type="text/css">
.noaplica{background-color: #E9E9E9;}
</style>

    <body>
        <table width="200" border="1">
          <tr>
            <th scope="col">Supervisor</th>
            <?php foreach ($params['proyectos'] as $proyecto) :?>
                <th scope="col"><?php echo $proyecto['projecto'] ?></th>
                <?php $cantidad_proy+=1;?>
            <?php endforeach; ?>
          </tr>

          <?php foreach ($params['supervisores'] as $supervisor) :?>
          <?php $cantidad_proy_sup=0;?>
          <tr>
            <th scope="row"><?php echo $supervisor['residente'] ?></th>
            <?php $query="select num_proy from proyectos.residente_admin where residente='".$supervisor['residente']."'"; 
                $proyectos_res=array();
                $result2 = pg_query($query); 
                    if (!$result2) { 
                        echo "Problem with query " . $query . "<br/>"; 
                        echo pg_last_error(); 
                        exit(); 
                    }
                    
                    while($row = pg_fetch_assoc($result2)) { 
                        $proyectos_res[] = $row;    
                    }
            ?>
            <?php foreach ($params['proyectos'] as $proyecto) :?>
                <?php $encontrado= false;
                    foreach ($proyectos_res as $proy_res) {
                     if($proy_res['num_proy']==$proyecto['num_proy']){$encontrado= true;}
                    }
                ?>

                <?php if($encontrado){ $cantidad_proy_sup+= 1;?>
                    <td><input name="<?php echo $cantidad_supevisores."_".$proyecto['num_proy'];?>" type="text" /></td>
                <?php }else{
                    echo "<td class=\"noaplica\"><input class=\"noaplica\"  name=\"".$cantidad_supevisores."_".$proyecto['num_proy']."\" type=\"text\" readonly /></td>";
                }?>
            <?php 
            $cantidades[$cantidad_supevisores]=$cantidad_proy_sup ;

            endforeach; ?>
             <td class="noaplica"><input class=-"noaplica"  name="<?php echo $cantidad_supevisores;?>_total" type="text" readonly /></td>
            <?php $cantidad_supevisores+=1;?>
          </tr>
          <?php endforeach; ?>

        <!--residentes operativo-->
        <?php foreach ($params['adminstradores'] as $adminstrador) :?>
            <?php $cantidad_proy_sup=0;?>
            <tr>
                <th scope="row"><?php echo $adminstrador['admin'] ?></th>
                <?php $query="select num_proy from proyectos.residente_operativo where admin='".$adminstrador['admin']."'"; 
                    $proyectos_res=array();
                    $result2 = pg_query($query); 
                    if (!$result2) { 
                    echo "Problem with query " . $query . "<br/>"; 
                    echo pg_last_error(); 
                    exit(); 
                    }

                    while($row = pg_fetch_assoc($result2)) { 
                        $proyectos_res[] = $row;    
                    }
                ?>
                <?php foreach ($params['proyectos'] as $proyecto) :?>
                    <?php $encontrado= false;
                        foreach ($proyectos_res as $proy_res) {
                            if($proy_res['num_proy']==$proyecto['num_proy']){$encontrado= true;}
                        }
                    ?>

                    <?php if($encontrado){ $cantidad_proy_sup+= 1;?>
                        <td><input name="<?php echo $cantidad_supevisores."_".$proyecto['num_proy'];?>" type="text" /></td>
                    <?php }else{
                        echo "<td class=\"noaplica\"><input class=\"noaplica\"  name=\"".$cantidad_supevisores."_".$proyecto['num_proy']."\" type=\"text\" readonly /></td>";
                    }?>
                    <?php 
                        $cantidades[$cantidad_supevisores]=$cantidad_proy_sup ;

                endforeach; ?>
                <td class="noaplica"><input class=-"noaplica"  name="<?php echo $cantidad_supevisores;?>_total" type="text" readonly /></td>
                <?php $cantidad_supevisores+=1;?>
            </tr>
        <?php endforeach; ?>

        </table>


    </body>
    <?php print_r($cantidades);?>
</html>
 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>
