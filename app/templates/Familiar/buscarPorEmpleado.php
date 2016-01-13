<?php ob_start() ?>

<style>
body{color:#9C3100;}

.bajos{color:#000;}
.altos{color:#9C3100;
font-size:14px;
font:bold;}
td{text-transform:capitalize;}
table{
  background-color:rgba(158, 158, 158, 0.25);
  margin-left: 10px;}
</style>



<body>
    <form action="index.php?ctl=buscarFamiliar" method="post">
        <table width="200" border="0">
          <tr>
            <td>Empleado</td>
            <td>
                <select id="empelado" name="empleado">
                    <?php foreach ($params['empleados'] as $empleado) :?>
                    <?#php if($empleado['empleado']==$params['empleado_id']){ echo "selected";}?>
                      <option value="<?php echo $empleado['empleado_id']?>" ><?php echo $empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m']?></option>
                    <?php endforeach; ?>
                </select>
                
            </td>
            <td><input type="submit" value="Buscar"></td>
          </tr>

        </table>
    </form>
  <!-- clonar por cada familiar--> 
  <?php if(isset($params['familiares'])){
      if(count($params['familiares'])>0) {  ?>
      <fieldset>
                
            
    <?php foreach ($params['familiares'] as $familiar) :?>
        <fieldset>
          <legend>Datos de <?php switch ($familiar['tipo']){case 1: echo "Padre"; break; case 2: echo "Madre"; break; case 3: echo "Hermano"; break; case 4: echo "Conyugue/Pareja"; break; case 5: echo "Hijo"; break; }
                ?></legend>
            <table>
              <tr>
                <td class="altos">Nombre:</td>
                <td class="altos">Edad:</td> 
                <td class="altos">Direccion:</td> 
              </tr>
              <tr>
                <td class="bajos">
                    <select id="tipo" name="tipo" disabled="true">
                        <option value="" >Seleccione Uno</option>
                                                   
                    </select>
                </td>
                <td class="bajos"><input type="text" id="nombre" name="nombre" value="<?php echo $familiar['nombre']?>" readonly/></td>
                <td class="bajos"><input type="text" id="edad" name="edad" value="<?php echo $familiar['edad']?>" readonly/></td>
                <td class="bajos"><input type="text" id="direccion" name="direccion" value="<?php echo $familiar['direccion']?>" readonly/></td>  
              </tr>
            </table>
        </fieldset>
  <!--termina clon-->
      <?php endforeach; ?>
      
  <?php } 
  } ?>
</body>
 <?php $contenido = ob_get_clean() ?>

 <?php include '/app/templates/layout.php' ?>