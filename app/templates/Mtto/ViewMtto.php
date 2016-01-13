<?php ob_start() ?>
<?php $auto= $params['automovil']?>

<style>
body{color:#9C3100;}

.bajos{color:#000;}
.altos{color:#9C3100;
font-size:14px;
font:bold;}
td{text-transform:capitalize;}
table{
	background-color:rgba(158, 158, 158, 0.25);}
</style>

    <form action="" method="post">
        <fieldset>
            <legend>Alta de Automovil</legend>
            <table>
              <tr>
                <td class="altos">Marca</td>
                <td class="altos">Año</td>
                <td class="altos">Modelo</td>
                <td class="altos">Color</td>    
              </tr>
              <tr>
                <td class="bajos"><input type="text" id="marca" name="marca" value="<?php echo $auto['marca']?>" readonly/></td>
                <td class="bajos" ><input type="text" id="ano" name="ano" value="<?php echo $auto['ano']?>" readonly/></td>
                <td class="bajos" ><input type="text" id="modelo" name="modelo" value="<?php echo $auto['modelo']?>" readonly/></td>
                <td class="bajos" ><input type="text" id="color" name="color" value="<?php echo $auto['color']?>" readonly/></td>  
              </tr>
              <tr>
                <td class="altos" >Placas</td>
                <td class="altos"  colspan="1">ID Oxxo gas</td>
                <td class="altos"  colspan="2">Asignado a:</td>
              </tr>
              <tr>
                <td class="bajos"><input type="text" id="placa" name="placa" value="<?php echo $auto['placa']?>" readonly/></td>
                <td class="bajos" colspan="1"><input type="text" id="oxxo" name="oxxo" value="<?php echo $auto['oxxo']?>" readonly/></td>
                 <td class="bajos" colspan="2">
                    <select id="empleado" name="empleado" disabled="true">
                        <option value="">Seleccione Uno</option>
                      <?php foreach ($params['empleados'] as $empleado) :?>
                        <option value="<?php echo $empleado['empleado_id']?> <?php if($empleado['empleado_id']==$auto['empleado_id']){ echo "selected";}?>"><?php echo $empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m']?></option>
                      <?php endforeach; ?>
                        

                    </select>
                 </td>
              </tr>
            </table>
        </fieldset>
    </form>


 <?php $contenido = ob_get_clean() ?>

 <?php include '/app/templates/layout.php' ?>