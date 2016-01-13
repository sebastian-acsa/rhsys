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


 <h3><?php echo $params['empleado_nombre'];?></h3>
    <form action="index.php?ctl=addFamiliar" method="post">
      <input type="hidden" id="empleado_id" name="empleado_id" value="<?php echo $params['empleado_id'];?>">
        <fieldset>
            <legend>Alta de Familiar</legend>
            <table width="100%">
              <tr>
                <td class="altos">Parentesco:</td>
                <td class="altos">Nombre:</td>
                <td class="altos">Edad:</td>
                <td class="altos">direccion:</td>
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
                <td class="bajos"><input type="text" id="nombre" name="nombre" value="<?php echo $params['nombre']?>"/></td>
                <td class="bajos"><input type="text" id="edad" name="edad" value="<?php echo $params['edad']?>"/></td>
                 <td class="bajos"><input type="text" id="direccion" name="direccion" value="<?php echo $params['direccion']?>"/></td>  
              </tr>
              
              <tr>
                <td colspan="7" align="right"><input type="submit" value="insertar" name="insertar" /></td>
              </tr>
            </table>
        </fieldset>
    </form>

     


 <?php $contenido = ob_get_clean() ?>

 <?php include './app/templates/layout.php' ?>