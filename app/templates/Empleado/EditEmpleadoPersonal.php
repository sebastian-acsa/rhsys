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
.Subcat{color:black;}
.formulas{background-color: #E9E9E9;}
</style>
<script type="text/javascript">
   function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        $('#foto').attr('src', e.target.result);
       }
        reader.readAsDataURL(input.files[0]);
       }
    }
</script>

 <?php if(isset($params['mensaje'])) :?>
 <b><span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
 <?php endif; ?>
 <br/>
<form name="formInsertar" action="index.php?ctl=editarP" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $params['empleado_id']?>">
  <fieldset style="margin-left: 10px; margin-right: 10px;">
      <legend>Datos Personales</legend>
      <table width="100%" border="0">
        <tr>
          <td class="altos" rowspan="11" style="padding-right: 15px; padding-left: 5px; background-color: white;"><img id="foto" src="<?php echo $empleado['foto']?>" width="120" height="190" /></td>
          <td width="123">nombre</td>
          <td>apellido Paterno</td>
          <td>apellido materno</td>
          <td>sexo</td>
          <td>estado_civil</td>
          <td>nacionalidad</td>
        </tr>
        <tr>
          <td width="281" class="formulas"><input type="text" name="nombre" id= "nombre" value="<?php echo $params['nombre']?>" /></td>
          <td class="formulas" ><input type="text" name="apellido_p" id= "apellido_p" value="<?php echo $params['apellido_p']?>" /></td>
          <td class="formulas" ><input type="text" name="apellido_m" id= "apellido_m" value="<?php echo $params['apellido_m']?>" /></td>
          
          <td><select name="sexo" id= "sexo" style="width:100%;">
                <option value="Maculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
              </select>
            </td>
            <td><select name="estado_civil" id= "estado_civil" style="width:100%;" >
                  <option value="Soltero">Soltero</option>
                    <option value="Casado">Casado</option>
                    <!--<option value="Divorciado">Divorciado</option>
                    <option value="Viudo">Viudo</option>-->
                    <option value="Union Libre">Union Libre</option>
                </select>
            
            </td>
          <td><input type="text" name="nacionalidad" id= "nacionalidad" value="<?php echo $params['nacionalidad']?>" /></td>
          
        </tr>
        <tr>
        <td height="19" colspan="7" > </td>
        </tr> 
        <tr>
          <td style="altos">Curp</td>
          <td style="altos">RFC</td>
          <td style="altos">Fecha de Nacimiento</td>
          <td>Lugar nacimiento</td>
          <td>Correo_personal</td>
          <td>Celular personal</td>
          
          <!--<td>Experiecia (Tipo de Proyecto)</td>-->
        </tr> 
        <tr>
          <td><input type="text" name="curp" id="curp"  value="<?php echo $params['curp']?>" /></td>
          <td><input type="text" name="rfc" id="rfc"  value="<?php echo $params['rfc']?>" /></td>
          <td><input type="date" name="f_nacimiento" id="f_nacimiento" style="width:99%;" value="<?php echo $params['f_nacimiento']?>" /></td>
          <td><input type="text" name="l_nacimiento" id="l_nacimiento" value="<?php echo $params['l_nacimiento']?>" /></td>
          <td><input type="email" name="correo_personal" id="correo_personal" value="<?php echo $params['correo_personal']?>" /> </td>
          <td><input type="tel" name="cel_personal" id="cel_personal" value="<?php echo $params['cel_personal']?>" /> </td>
          
        </tr>
        <tr><td colspan="5" aling="center" class="Subcat">Direccion<td></tr>
      <tr>
            <td class="altos">calle</td>
            <td class="altos">colonia</td>
            <td class="altos">cp</td>
            <td class="altos">municipio</td>
            <td class="altos">entidad</td>
            <td class="altos">pais</td>
        </tr>
        <tr>
            <td><input type="text" name="dir_calle" id="dir_calle" value="<?php echo $empleado['dir_calle']?>" class="formulas" /></td>
            <td><input type="text" name="dir_colonia" id="dir_colonia" value="<?php echo $empleado['dir_colonia']?>" class="formulas" /> </td>
            <td><input type="text" name="dir_cp" id="dir_cp" value="<?php echo $empleado['dir_cp']?>" class="formulas" /> </td>
            <td><input type="text" name="dir_municipio" id="dir_municipio" value="<?php echo $empleado['dir_municipio']?>" class="formulas" /> </td>
            <td><input type="text" name="dir_entidad" id="dir_entidad" value="<?php echo $empleado['dir_entidad']?>" class="formulas" /> </td>
            <td><input type="text" name="pais" id="pais" value="<?php echo $empleado['pais']?>" class="formulas" /> </td>
        </tr>
        <tr>
          <td class="altos">Telelefono Fijo</td>
        </tr>
        <tr>
          <td><input type="tel" name="tel_personal" id="tel_personal" value="<?php echo $empleado['tel_personal']?>" class="formulas" /></td>
           <td colspan="3"><input type="file" name="fileToUpload" id="fileToUpload" onchange="readURL(this);"></td>
        </tr>
                <tr>
                  <td colspan="7" align="right"><input type="submit" value="insertar" name="insertar" /></td>
                
                </tr>

      </table>
  </fieldset>
</form>
 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>