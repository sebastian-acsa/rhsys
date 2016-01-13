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

    <form action="index.php?ctl=addFamiliar" method="post">
        <fieldset>
            <legend>Alta de Familiar</legend>
            <table>
              <tr>
                <td class="altos">Tipo:</td>
                <td class="altos">Nombre:</td>
                <td class="altos">Edad:</td>
              </tr>
              <tr>
                <td class="bajos">
                    <select id="tipo" name="tipo">
                        <option value="">Seleccione Uno</option>
                        <option value="1">Padre</option>
                        <option value="2">Madre</option>
                        <option value="3">Hermano</option>
                        <option value="4">Conyugue/Pareja</option>
                        <option value="5">Hijo</option>                           
                    </select>
                 </td>
                <td class="bajos"><input type="text" id="nombre" name="nombre" value="<?=$params['nombre']?>"/></td>
                <td class="bajos"><input type="text" id="edad" name="edad" value="<?=$params['edad']?>"/></td>
                  
              </tr>
              <tr>
                <td class="altos" >Empleado a:</td>
                <td class="altos">direccion:</td>
              </tr>
              <tr>
                 <td class="bajos" colspan="2">
                    <select id="empleado_id" name="empleado_id">
                          <option value="">Seleccione Uno</option>
                        <?php foreach ($params['empleados'] as $empleado) :?>
                          <option value="<?=$empleado['empleado_id']?>" <?php if($empleado['empleado_id']==$params['empleado_id']){ echo "selected";}?> ><?=$empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m']?></option>
                        <?php endforeach; ?>
                    </select>
                 </td>
                 <td class="bajos"><input type="text" id="direccion" name="direccion" value="<?=$params['direccion']?>"/></td>
              </tr>
              <tr>
                <td colspan="7" align="right"><input type="submit" value="insertar" name="insertar" /></td>
              </tr>
            </table>
        </fieldset>
    </form>


 <?php $contenido = ob_get_clean() ?>

 <?php include '/app/templates/layout.php' ?>