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

        <fieldset>
            <legend>Datos de Familiar</legend>
            <table>
              <tr>
                <td class="altos">Tipo:</td>
                <td class="altos">Nombre:</td>
                <td class="altos">Edad:</td>   
              </tr>
              <tr>
                <td class="bajos">
                    <select id="tipo" name="tipo" disabled="true">
                        <option value="" >Seleccione Uno</option>
                        <option value="1" <?php if($parmas['tipo']==1){ echo "selected";}?>>Padre</option>
                        <option value="2" <?php if($parmas['tipo']==2){ echo "selected";}?>>Madre</option>
                        <option value="3" <?php if($parmas['tipo']==3){ echo "selected";}?>>Hermano</option>
                        <option value="4" <?php if($parmas['tipo']==4){ echo "selected";}?>>Conyugue/Pareja</option>
                        <option value="5" <?php if($parmas['tipo']==5){ echo "selected";}?>>Hijo</option>                           
                    </select>
                 </td>
                <td class="bajos"><input type="text" id="nombre" name="nombre" value="<?php echo $params['nombre']?>" readonly/></td>
                <td class="bajos"><input type="text" id="edad" name="edad" value="<?php echo $params['edad']?>" readonly/></td>
                  
              </tr>
              <tr>
                <td class="altos" >Empleado a:</td>
                <td class="altos">direccion:</td>
              </tr>
              <tr>
                 <td class="bajos" colspan="2">
                    <select id="empleado_id" name="empleado_id" disabled="true">
                          <option value="">Seleccione Uno</option>
                        <?php foreach ($params['empleados'] as $empleado) :?>
                          <option value="<?php echo $empleado['empleado_id']?>" <?php if($empleado['empleado_id']==$params['empleado_id']){ echo "selected";}?> ><?php echo $empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m']?></option>
                        <?php endforeach; ?>
                    </select>
                 </td>
                 <td class="bajos"><input type="text" id="direccion" name="direccion" value="<?php echo $params['direccion']?>" readonly/></td>
              </tr>
            </table>
        </fieldset>


 <?php $contenido = ob_get_clean() ?>

 <?php include '/app/templates/layout.php' ?>