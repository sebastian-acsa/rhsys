<?php ob_start() ?>

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

    <form action="index.php?ctl=addPrestamo" method="post">
        <fieldset>
            <legend>Alta de Prestamo</legend>
            <table>
              <tr>
                <td class="altos">Empleado</td>
                <td class="altos">Prestamo</td>
                <td class="altos">Periodos</td>
                <td class="altos">Periodos Maximos</td>    
              </tr>
              <tr>
                <td class="bajos">
                  <select id="empleado_id" name="empleado_id">
                        <option value="">Seleccione Uno</option>
                      <?php foreach ($params['empleados'] as $empleado) :?>
                        <option value="<?php echo $empleado['empleado_id'];?>" <?php if($empleado['empleado_id']==$params['empleado_id']){ echo "selected";}?> ><?php echo $empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'];?></option>
                      <?php endforeach; ?>
                  </select>
                </td>
                <td class="bajos" ><input type="text" id="saldo" name="saldo" value="<?php echo $params['saldo'];?>"/></td>
                <td class="bajos" ><input type="text" id="plazos" name="plazos" value="<?php echo $params['plazos'];?>"/></td>
                <td class="bajos" ><input type="text" id="plazos_max" name="plazos_max" value="<?php echo $params['plazos_max'];?>"/></td>  
              </tr>
              
              <tr>
                <td colspan="7" align="right"><input type="submit" value="insertar" name="insertar" /></td>
              </tr>
            </table>
        </fieldset>
    </form>


 <?php $contenido = ob_get_clean() ?>

 <?php include './app/templates/layout.php' ?>