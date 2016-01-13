<?php ob_start() ?>
<style>
  body{color:#9C3100;}

  .bajos{color:#000; text-align:center; }
  .altos{color:#9C3100; text-align:center;
  font-size:14px;
  font:bold;
  padding-top: 10px;}
  td{text-transform:capitalize;}
  table{background-color:rgba(158, 158, 158, 0.25);}
  .formulas{background-color: #E9E9E9;}
  .Subcat{color:black;}
  .opt_proy{font-size: 8px;
  text-transform:capitalize;}
  fieldset{margin-left: 40px; margin-right: 10px;}
  .personal{width: 200px;}
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
 <form name="formInsertar" action="index.php?ctl=insertar1" id="formInsertar" method="POST" enctype="multipart/form-data">
  <fieldset  >
    <legend>Datos Personales</legend>
 	<table width="97%" border="0">
<tr>
  <td class="altos" rowspan="11" style="padding-right: 15px;
    padding-left: 5px;
    background-color: white;"><img id="foto" src="./web/img/silueta.png" width="120" height="190" /></td>
  <td class="altos" width="123">nombre</td>
  <td class="altos">apellido Paterno</td>
  <td class="altos">apellido materno</td>
  <td class="altos">sexo</td>
  <td class="altos">estado_civil</td>
  <td class="altos">nacionalidad</td>
</tr>
<tr>
  <td><input class="personal" type="text" name="nombre" id= "nombre" value="<?php echo $params['nombre']?>"/></td>
  <td><input class="personal" type="text" name="apellido_p" id= "apellido_p" value="<?php echo $params['apellido_p']?>"/></td>
  <td><input class="personal" type="text" name="apellido_m" id= "apellido_m" value="<?php echo $params['apellido_m']?>"/></td>
  
  <td><select  class="personal" name="sexo" id= "sexo" >
        <option value="Maculino">Masculino</option>
            <option value="Femenino">Femenino</option>
      </select>
    </td>
    <td><select class="personal" name="estado_civil" id= "estado_civil"  >
          <option value="Soltero" <?php if($params['estado_civil']=="Soltero"){echo "selected";}?>>Soltero</option>
            <option value="Casado" <?php if($params['estado_civil']=="Casado"){echo "selected";}?>>Casado</option>
            <!--<option value="Divorciado">Divorciado</option>
            <option value="Viudo">Viudo</option>-->
            <option value="Union Libre" <?php if($params['estado_civil']=="Union Libre"){echo "selected";}?>>Union Libre</option>
        </select>
    
    </td>
  <td><input class="personal" type="text" name="nacionalidad" id= "nacionalidad" value="<?php echo $params['pais']?>"/></td>
  
        </tr>
        <tr>
        <td height="19" colspan="7" > </td>
        </tr> 
        <tr>
          <td class="altos" >Curp</td>
          <td class="altos" >RFC</td>
          <td class="altos" >Fecha de Nacimiento</td>
          <td class="altos" >Lugar nacimiento </br> (Municipio/Estado)</td>
          <td class="altos" >Correo_personal</td>
          <td class="altos" >Celular personal</td>
          
          <!--<td>Experiecia (Tipo de Proyecto)</td>-->
        </tr> 
        <tr>
          <td><input class="personal" type="text" name="curp" id="curp" value="<?php echo $params['curp']?>"/></td>
          <td><input class="personal" type="text" name="rfc" id="rfc" value="<?php echo $params['rfc']?>"/></td>
          <td><input class="personal" type="date" name="f_nacimiento" id="f_nacimiento" style=" height: 24px;" value="<?php echo $params['f_nacimiento']?>"/></td>
          <td><input class="personal" type="text" name="l_nacimiento" id="l_nacimiento" value="<?php echo $params['l_nacimiento']?>"/></td>
          <td><input class="personal" type="email" name="correo_personal" id="correo_personal" value="<?php echo $params['correo_personal']?>"/> </td>
          <td><input class="personal" type="tel" name="cel_personal" id="cel_personal" value="<?php echo $params['cel_personal']?>"/> </td>
        </tr>
        <tr>
        <td colspan="3"><input type="file" name="fileToUpload" id="fileToUpload" onchange="readURL(this);"></td>    
            
        </tr>
                <tr><td colspan="5" aling="center" class="Subcat">Direccion<td></tr>
        <tr>
          <td class="altos">calle</td>
          <td class="altos">colonia</td>
          <td class="altos">codigo postal</td>
          <td class="altos">municipio</td>
          <td class="altos">entidad</td>
          <td class="altos">pais</td>
        </tr>
        <tr>
          
            <td><input class="personal" type="text" name="dir_calle" id="dir_calle" value="<?php echo $params['dir_calle']?>"/></td>
            <td><input class="personal" type="text" name="dir_colonia" id="dir_colonia" value="<?php echo $params['dir_colonia']?>"/> </td>
            <td><input class="personal" type="text" name="dir_cp" id="dir_cp" value="<?php echo $params['dir_cp']?>"/> </td>
            <td><input class="personal" type="text" name="dir_municipio" id="dir_municipio" value="<?php echo $params['dir_municipio']?>"/> </td>
            <td><input class="personal" type="text" name="dir_entidad" id="dir_entidad" value="<?php echo $params['dir_entidad']?>"/> </td>
            <td><input class="personal" type="text" name="pais" id="pais" value="<?php echo $params['pais']?>"/> </td>
            
        </tr>
        <tr>
          <td class="altos">Telelefono Fijo</td>
        </tr>
        <tr>
          <td><input class="personal" type="tel" name="tel_personal" id="tel_personal" value="<?php echo $params['tel_personal']?>"/> </td>
        </tr>

</table>
</fieldset>

  
  <fieldset  >
    <legend>Datos Del Puesto</legend>
    <table width="97%" border="0">
        <tr><!-- localidad-->
            <td class="altos">Razon Social</td> 
            <td class="altos">Area</td>
            <td class="altos">Departamento</td>
            <td class="altos">Puesto</td>
            <td class="altos">Proyecto</td>
        </tr>
        
        <tr> </tr>
        <tr>
            <td  class="bajos">
              <select name="razon_social_id" id="razon_social_id">
                <option value="0" <?php if($params['razon_social_id']==0){echo "selected";}?> >Seleccione uno</option>
                <option value="1" <?php if($params['razon_social_id']==1){echo "selected";}?>>ACSA</option>
                <option value="2" <?php if($params['razon_social_id']==2){echo "selected";}?>>MADA</option>
                <option value="3" <?php if($params['razon_social_id']==3){echo "selected";}?>>IDP</option>
                <option value="4" <?php if($params['razon_social_id']==4){echo "selected";}?>>JIMEC</option>
              </select>
            </td>
            <td  class="bajos"><select name="area_id" id="area_id">
                  <option value="0" <?php if($params['area_id']==0){echo "selected";}?> >Seleccione uno</option>
                  <option value="1" <?php if($params['area_id']==1){echo "selected";}?> >Operativo</option>
                  <option value="2" <?php if($params['area_id']==2){echo "selected";}?> >Adminstrativo</option>  
                </select>
            </td>
            <td  class="bajos"><select name="departamento_id" id="departamento_id">
              <!--ordenar por alfa-->
                  <option value="0">Seleccione uno</option><!--adm--> <!--oper-->
                  
                </select></td>
            
            <td  class="bajos"><select name="puesto" id="puesto">
                  <option value="0">Seleccione uno</option>
                  
                  
                </select>
              </td>
            <!--<td><input type="text" name="proyecto_tipo" id="proyecto_tipo"/></td>-->
            
            <td  class="bajos">
              <select name="proyecto_tipo" id="proyecto_tipo" class="personal">
                <option value="0">Seleccione uno</option>
              </select>
            </td>
            <!--
            <td>
                <select name="area_id" id="area_id">
                  <option value="0">Seleccione uno</option>
                </select>
            </td>
            <td>
              <select name="departamento_id" id="departamento_id">
                <option value="0">Seleccione uno</option>
              </select>
            </td>
            -->
        </tr><!-- termina localidad-->
      </table>
      </fieldset>

    <fieldset>
    <legend>Datos Profesionales</legend>
    <table width="97%" border="0">
      <tr id="estudios_cont"><!-- localidad-->
            <td class="altos" id="estudios_td_t">Ultimo Grado de Estudios</td>
            
            <td class="altos">Experiencia en: (tipo de obra)</td>
        </tr>
        <tr>
            <td  class="bajos" id="estudios_td_v">
              <select name="estudios" id= "estudios">
                <option value="0" <?php if($params['estudios']== 0){echo "selected";}?> >Seleccione</option>
                <option value="1" <?php if($params['estudios']== 1){echo "selected";}?> >Primaria</option>
                <option value="2" <?php if($params['estudios']== 2){echo "selected";}?> >Secuandaria</option>
                <option value="3" <?php if($params['estudios']== 3){echo "selected";}?> >Preparatoria</option>
                <option value="4" <?php if($params['estudios']== 4){echo "selected";}?> >Sub-Profesional o Tecnica</option>
                <option value="7" <?php if($params['estudios']== 7){echo "selected";}?> >Profesional</option>
                <option value="8" <?php if($params['estudios']== 8){echo "selected";}?> >Postgrado</option>
                <option value="9" <?php if($params['estudios']== 9){echo "selected";}?> >Otros</option>
              </select>
            </td>
            
            <td  class="bajos" id="exp_prof_cont">
                <select name="exp_prof" id="exp_prof">
                  <option value="0" <?php if($params['estudios']== 0){echo "selected";}?>>Seleccione</option>
                  <option value="Civil" <?php if($params['estudios']== "Civil"){echo "selected";}?>>Civil</option>
                  <option value="Acabados" <?php if($params['estudios']== "Acabados"){echo "selected";}?>>Acabados</option> 
                  <option value="Escuelas" <?php if($params['estudios']== "Escuelas"){echo "selected";}?>>Escuelas</option>
                  <option value="Hospitales" <?php if($params['estudios']== "Hospitales"){echo "selected";}?>>Hospitales</option>
                  <option value="Desarrollo Vertical" <?php if($params['estudios']== "Desarrollo Vertical"){echo "selected";}?>>Desarrollo Vertical</option>
                  <option value="Estructuras Metalicas" <?php if($params['estudios']== "Estructuras Metalicas"){echo "selected";}?>>Estructuras Metalicas</option>  
                </select>
            </td>
        </tr>
    </table>
</fieldset>

    <fieldset>
      <legend>Datos Economicos</legend> 
        <table width="97%" border="0">    
            <tr><!--economicos-->
            	<td class="altos">sueldo Tope(Mensual)</td>
                <td class="altos">sueldo Deseado (Mensual)</td>
                <td class="altos">sueldo contratado (Mensual)</td>
            </tr>    
            <tr><!--economicos-->
            	<td  class="bajos"><input type="text" name="su_aut" id= "su_aut" value="<?php echo $params['su_aut']?>"/></td>
              <td  class="bajos"><input type="text" name="sd" id= "sd" value="<?php echo $params['sd']?>"/></td>
              <td  class="bajos"><input type="text" name="su_neg" id= "su_neg" value="<?php echo $params['su_neg']?>"/></td>
            </tr>
            <tr><!--economicos mensuales-->
                <td class="altos">sueldo Semanal Bruto</td>
                <td class="altos">sueldo Semanal Fiscal</td>
                <td class="altos">sueldo Semanal efectivo Neto</td>
            </tr>
            <tr>
                <td  class="bajos"><input type="text" name="su_sem" id= "su_sem" class="formulas" value="<?php echo $params['su_sem']?>" readonly/></td>
                <td  class="bajos"><input type="text" name="su_sem_fiscal" id= "su_sem_fiscal" value="<?php echo $params['su_sem_fiscal']?>"  /></td><!--add DB-->
                <td  class="bajos"><input type="text" name="su_sem_efectivo" id= "su_sem_efectivo" class="formulas" value="<?php echo $params['su_sem_efectivo']?>" readonly/></td>
            </tr>
            
            <!--fin economicos 2-->
        </table>
    </fieldset>
    <fieldset>
      <legend>Datos Economicos Deducciones</legend> 
      <table width="97%" border="0"> 
          <tr><!-- imss e impuestos-->
              <td width="20%" class="altos">Numero del IMSS</td>
              <td width="20%" class="altos">Descuento IMSS</td>
              <td width="20%" class="altos">Retencion Infonavit</td>
              <td width="20%" class="altos">Bonos</td>
              <td width="20%" class="altos">Fecha De Ingreso</td>
          </tr>
          <tr>
              <td class="bajos"><input class="personales" type="text" name="imss_num" id="imss_num" value="<?php echo $params['imss_num']?>" /></td>
              <td class="bajos"><input type="text" name="imss_desc" id= "imss_desc" value="<?php echo $params['imss_desc']?>" /></td>
              <td class="bajos"><input class="personales" type="text" name="infonavit" id= "infonavit" value="<?php echo $params['infonavit']?>"/></td>
              <td class="bajos"><input class="personales" type="text" name="bono" id= "bono" value="<?php echo $params['bono']?>"/></td>
              <td class="bajos"><input class="personales" type="date" name="fecha_ingreso" id="fecha_ingreso" style="height: 24px;" value="<?php echo $params['fecha_ingreso']?>"/></td>
          </tr><!--fin imss e impuestos-->
      </table>
    </fieldset>
    <fieldset>
      <legend>Datos Nomina</legend> 
      <table width="97%" border="0"> 
          <tr>
              <td width="25%" class="altos">Numero Cuenta Bacaria</td>
              <td width="25%" class="altos">Clave InterBancaria</td>
              <td width="25%" class="altos">Banco</td>
              <td width="25%" class="altos">No. Plastico</td>
          </tr>
          <tr>
              <td class="bajos"><input class="personales" type="text" name="num_cta_ban" id="num_cta_ban" value="<?php echo $params['num_cta_ban']?>" /></td>
              <td class="bajos"><input class="personales" type="text" name="cta_ban_clabe" id="cta_ban_clabe" value="<?php echo $params['cta_ban_clabe']?>" /></td>
              <td class="bajos"><input class="personales" type="text" name="cta_ban_id" id="cta_ban_id" value="<?php echo $params['cta_ban_id']?>" /></td>
              <td class="bajos"><input class="personales" type="text" name="no_banco" id="no_banco" value="<?php echo $params['no_banco']?>" /></td>
          </tr>
      </table>
    </fieldset>
    <fieldset>
      <legend>Otros</legend> 
      <table width="97%" border="0"> 
          <tr id="cont_inanc">
              
              <td class="altos">status</td>
              <td class="altos">Jefe</td>
          </tr>
          <tr id="cont_inanc_val">
              <td  class="bajos">
                  <select name="status" id="status">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                  </select>
              </td>
              <td class="bajos">
                <select name="jefe_id" id="jefe_id">
                  <option value="0">Seleccione uno</option>
                  <!--rellenar-->
                </select>
              </td>
          </tr>
          <tr>
            <td colspan="7" align="right"><input type="submit" value="insertar" name="insertar" /></td>
          </tr>
      </table>
    </fieldset>
    
 </form>
 <script src="./js/jquery-1.11.3.min.js" type="text/javascript"></script>
 <!--<script src="./js/jquery.alerts.js"></script>-->
	<!--<script src="datepicker/js/bootstrap-datepicker.js"></script>-->
	        <script type="text/javascript">
	            // When the document is ready
	           // $(document).ready(function () {   
	                
	            //});

              $("#area_id").change(function() {
      				  $('#departamento_id').empty();
                $('#puesto').empty();
                $('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                $('#proyecto_tipo').empty();
                $('#proyecto_tipo').append('<option value="0"><b>Seleccione uno</b></option>');
                if($("#area_id").val()==1){
					$('#departamento_id').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#departamento_id').append('<option value="1">Diseño</option>');<!--oper-->
                  $('#departamento_id').append('<option value="5">Construccion</option>');<!--oper-->
                  $('#departamento_id').append('<option value="6">Presupuestos Y Concursos</option>');<!--oper-->
                  $('#departamento_id').append('<option value="7">Administracion de Proyectos</option>');<!--oper-->
                  $('#departamento_id').append('<option value="10">Calidad y Seguridad</option>');<!--oper-->
                  $('#departamento_id').append('<option value="15">Planeacion de Proyectos</option>');<!--oper-->

                  $('#exp_prof').remove();
                  
                  $('#exp_prof_cont').append('<select name="exp_prof" id="exp_prof"></select>');
                  $('#exp_prof').append('<option value="0">Seleccione</option>');
                  $('#exp_prof').append('<option value="Civil">Civil</option>');
                  $('#exp_prof').append('<option value="Acabados">Acabados</option>');
                  $('#exp_prof').append('<option value="Escuelas">Escuelas</option>');
                  $('#exp_prof').append('<option value="Hospitales">Hospitales</option>');
                  $('#exp_prof').append('<option value="Desarrollo Vertical">Desarrollo Vertical</option>');
                  $('#exp_prof').append('<option value="Estructuras Metalicas">Estructuras Metalicas</option>');
                      
                    
                   

                }
                if($("#area_id").val()==2){
                  $('#departamento_id').empty();
                  $('#puesto').empty();
                  $('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
					        $('#departamento_id').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#departamento_id').append('<option value="3">Sistemas</option>');<!--adm-->
                  $('#departamento_id').append('<option value="4">Comercial</option>');<!--adm-->
                  $('#departamento_id').append('<option value="8">Control de Cobranza</option>');<!--adm-->
                  $('#departamento_id').append('<option value="9">Abastecimiento</option>');<!--adm-->
                  $('#departamento_id').append('<option value="11">Servicios</option>');<!--adm-->
                  $('#departamento_id').append('<option value="12">Contabilidad</option>');<!--adm-->
                  $('#departamento_id').append('<option value="13">RH</option>');<!--adm-->
                  $('#departamento_id').append('<option value="14">Contraloria</option>');<!--adm-->
                  $('#departamento_id').append('<option value="16">Juridico</option>');<!--adm-->
                  $('#departamento_id').append('<option value="17">Finanzas</option>');<!--adm-->
                  $('#departamento_id').append('<option value="18">Relaciones Institucionales</option>');<!--adm-->
                  $('#departamento_id').append('<option value="99">Direccion</option>');<!--adm-->

                  $('#exp_prof').remove();
                  $('#exp_prof_cont').append('<input type="text" name="exp_prof" id="exp_prof"/>');
                }
                  
                  

                
              });
              $("#departamento_id").change(function() {
					$('#puesto').empty();
          //$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
          $('#proyecto_tipo').empty();
          $('#proyecto_tipo').append('<option value="0"><b>Seleccione uno</b></option>');
                if($("#departamento_id").val()==1){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="1_1">Gerente de Diseno</option>');
                  $('#puesto').append('<option value="1_2">Diseñador</option>');
                  $('#puesto').append('<option value="1_3">Practicante Diseñador</option>');
                }if($("#departamento_id").val()==3){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="3_1">Programador</option>');
                  $('#puesto').append('<option value="3_2">Encargado de Soporte</option>');
                  $('#puesto').append('<option value="3_3">Auxiliar de Soporte</option>');
                  $('#puesto').append('<option value="3_4">Practicante de Sistemas</option>');

                }if($("#departamento_id").val()==4){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="4_2">Vendedor</option>');
                  $('#puesto').append('<option value="4_3">Practicante de Comercial</option>');
                }if($("#departamento_id").val()==5){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="5_1">Gerente de Contruccion</option>');
                  
                  $('#puesto').append('<option value="5_4">Superintendente Operativo</option>');
                  
                  $('#puesto').append('<option value="5_3">Residente Gral. (ROA)</option>');
                  $('#puesto').append('<option value="5_6">Residente Operativo (RO)</option>');
                  
                  $('#puesto').append('<option value="5_8">Residente Aux. Operativo</option>');
                  
                }if($("#departamento_id").val()==6){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="6_1">Gerente Psp y Concursos</option>');
                  $('#puesto').append('<option value="6_2">Analista de Psp</option>');
                  $('#puesto').append('<option value="6_3">Aux. de Psp</option>');
                  $('#puesto').append('<option value="6_4">Encargado de Normatividad</option>');
                }if($("#departamento_id").val()==7){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="7_1">Gerente de Admon de Proyectos</option>');<!--admon. proy-->
                  $('#puesto').append('<option value="7_2">Administrador de Proyectos</option>');
                  $('#puesto').append('<option value="7_3">Adminstrador de ERP</option>');
                  $('#puesto').append('<option value="7_4">Superintendente Adminsitrativo</option>');
                  $('#puesto').append('<option value="7_5">Residente Adminstrativo (RA)</option>');
                  $('#puesto').append('<option value="7_6">Residente Aux. Adminstrativo</option>');
                }if($("#departamento_id").val()==8){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="8_1">Gerente de Cobranza</option>');<!--Control de Cobranza-->
                  $('#puesto').append('<option value="8_2">Aux. de Cobranza</option>');
                  $('#puesto').append('<option value="8_3">Practicante de Control de Cobranza</option>');
                }if($("#departamento_id").val()==9){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');

                  $('#puesto').append('<option value="9_1">Encargado de Compras</option>');<!--Abastecimiento-->
                  $('#puesto').append('<option value="9_2">Aux. de Compras</option>');
                  $('#puesto').append('<option value="9_3">Practicante de Abastecimiento</option>');
                }if($("#departamento_id").val()==10){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="10_1">Residente LEAD</option>');<!--Calidad-->
                  $('#puesto').append('<option value="10_2">Residente en Seguridad</option>');

                }if($("#departamento_id").val()==11){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="11_1">Auxiliar de Limpieza</option>');<!--Limpieza y MTTO-->
                  $('#puesto').append('<option value="11_2">Chofer</option>');
                  $('#puesto').append('<option value="11_3">Encargado de Tramites</option>');
                  $('#puesto').append('<option value="11_4">Recepcionista</option>');
                }if($("#departamento_id").val()==12){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="12_1">Gerente de Contabilidad/Tesoreria</option>');<!--Contabilidad-->
                  $('#puesto').append('<option value="12_2">Encargado Contablidad</option>');
                  $('#puesto').append('<option value="12_3">Aux. Contable</option>');
                  $('#puesto').append('<option value="12_4">Tesorero/Bancos</option>');
                  $('#puesto').append('<option value="12_5">Tesorero/Pagos</option>');
                  $('#puesto').append('<option value="12_6">Practicante de Contabilidad</option>');
                }if($("#departamento_id").val()==13){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="13_1">Encargado de RH</option>');<!--RH-->
                  $('#puesto').append('<option value="13_2">Practicante de RH</option>');
                }if($("#departamento_id").val()==14){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="14_1">Contralor</option>');<!--Contraloria-->
                  $('#puesto').append('<option value="14_2">Aux. de contralor</option>');
                  $('#puesto').append('<option value="14_3">Practicante de Contraloria</option>');
                }if($("#departamento_id").val()==15){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="15_1">Gerente de Planeacion de Proy.</option>');<!--Planeacion de Proyectos-->
                  $('#puesto').append('<option value="15_3">Cordinador de Ingenierias</option>');
                  $('#puesto').append('<option value="15_2">Aux de Planeacion de Proy.</option>');
                }if($("#departamento_id").val()==16){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="16_1">Gerente Juridico</option>');<!--Juridico-->
                  $('#puesto').append('<option value="16_2">Practicante de Juridico</option>');
                }if($("#departamento_id").val()==17){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="17_1">Gerente de Finanzas</option>');<!--Finanzas-->
                  $('#puesto').append('<option value="17_2">Practicante de Finanzas</option>');
                }if($("#departamento_id").val()==18){
          $('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="18_1">Gerente de Relaciones Institucionales </option>');<!--Relaciones Institucionales -->
                  $('#puesto').append('<option value="18_2">Asistente de Relaciones Institucionales </option>');
                  $('#puesto').append('<option value="18_3">Practicante de Relaciones Institucionales</option>');
                }if($("#departamento_id").val()==99){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="99_1">Director General</option>');<!--Direccion-->
                  $('#puesto').append('<option value="99_2">Gerente Operativo</option>');
                  $('#puesto').append('<option value="99_3">Director Adminstrativo</option>');
                  $('#puesto').append('<option value="99_4">Cordinador De Servicios</option>');
                  $('#puesto').append('<option value="99_5">Asistente de Direccion Gral.</option>');
                  $('#puesto').append('<option value="99_6">Asistente de Direccion Adminstrativa</option>');
                  $('#puesto').append('<option value="99_7">Asistente de Servicios</option>');
                }
                
              });
              
              $("#su_neg").focusout(function(){
                var auxiliar=0;
                var neg=$('#su_neg').val();
                var aut=$('#su_aut').val();
                if(parseFloat(neg) > parseFloat(aut)){
                    auxiliar=0;
                    $("#su_neg").val( 0);
                    alert('Excede El Sueldo Tope');
                }
                else{
                  auxiliar=$("#su_neg").val();
                }
                var calculo = auxiliar*12/365*7;
                calculo=Math.round(calculo * 100) / 100;
                $("#su_sem").val(calculo);
                $('#su_sem_fiscal').val(0);
                $('#su_sem_efectivo').val(calculo);
              });

              $("#estudios").change(function(){
                $("#titulo_t").remove();
                $("#titulo_v").remove();
                if( $("#estudios").val() =="7" || $("#estudios").val() =="8" || $("#estudios").val() =="4"){
                  if( $("#estudios").val() =="7" || $("#estudios").val() =="8"){
                    $("#cedula_t").remove();
                    $("#cedula_v").remove();
                    $("#if_cedula_v").remove();
                    $("#if_cedula_t").remove();
                    $("#estudios_td_t").after('<td id="cedula_t">No de Cedula</td>');
                    $("#estudios_td_t").after('<td id="if_cedula_t">¿Tiene Cedula?</td>');
                    $("#estudios_td_v").after('<td id= "cedula_v"><input type="text" name="cedula" id="cedula" value="Sin Cedula" readonly/> </td>');
                    $("#estudios_td_v").after('<td id= "if_cedula_v"><select name="if_cedula" id="if_cedula"><option value="0">No </option><option value="1">Si</option></select></td>');
                  }
                  else{
                    $("#cedula_t").remove();
                    $("#cedula_v").remove();
                    $("#if_cedula_v").remove();
                    $("#if_cedula_t").remove();
                  }
                  $("#estudios_td_t").after('<td id= "titulo_t">Profesion</td>');
                  $("#estudios_td_v").after('<td id= "titulo_v"><input type="text" name="carrera" id="carrera"/> </td>');
                }
                else{
                  $("#cedula_t").remove();
                  $("#cedula_v").remove();
                  $("#if_cedula_v").remove();
                    $("#if_cedula_t").remove();
                }   
              });
        
			  $("#su_sem_fiscal").focusout(function(){
              
                var calculo2 = $('#su_sem').val()-$('#su_sem_fiscal').val();
                calcul2o=Math.round(calculo2 * 100) / 100;
                $("#su_sem_efectivo").val(calculo2);
              });
        $(document).on("change","#if_cedula" , function(){
           if($("#if_cedula").val()=="1"){
             $("#cedula_v").remove();
             $("#if_cedula_v").after('<td id= "cedula_v"><input type="text" name="cedula" id="cedula"/> </td>');
           }
           if($("#if_cedula").val()=="0"){
             $("#cedula_v").remove();
             $("#if_cedula_v").after('<td id= "cedula_v"><input type="text" name="cedula" id="cedula" value="Sin Cedula" readonly/> </td>');
           }
        });
             
              /*$("#puesto").change(function() {
                if($("#puesto").val()=='1_1' || $("#puesto").val()=='1_2'){
            
                $('#proyecto_tipo').append('<option value="99_5">Asistente de Direccion</option>');
              });*/
            

			      $("#puesto").change(function() {
              $('#proyecto_tipo').empty();
              $('#proyecto_tipo').append('<option value="0"><b>Seleccione uno</b></option>');
                if(!($("#puesto").val()=='3_1' || $("#puesto").val()=='3_2' || $("#puesto").val()=='3_3' || $("#puesto").val()=='9_1' || $("#puesto").val()=='9_2' || $("#puesto").val()=='11_1' || $("#puesto").val()=='12_1' || $("#puesto").val()=='12_2' || $("#puesto").val()=='12_3' || $("#puesto").val()=='12_4' || $("#puesto").val()=='13_1' || $("#puesto").val()=='12_5' || $("#puesto").val()=='14_1' || $("#puesto").val()=='14_2' || $("#puesto").val()=='16_1' || $("#puesto").val()=='17_1' || $("#puesto").val()=='99_1' || $("#puesto").val()=='99_2' || $("#puesto").val()=='99_3' || $("#puesto").val()=='99_5')){
                  var items="";
                    $.getJSON("./app/assets/Get_proy.php",function(data){
                      $.each(data,function(index,item) 
                      {
                        $('#proyecto_tipo').append('<option value="'+item.num_proy+'" class="opt_proy">'+item.nombre_proyecto+'</option>');
                      });
                      
                    });
                  }
                  else{
                    $('#proyecto_tipo').append('<option value="0"><b>No Aplica</b></option>');
                  }
                });
            
            
            $("#status").change(function() {
                if($("#status").val()==0){
                    $('#cont_inanc_val').append('<td><input type="date" name="fecha_baja" id="fecha_baja" style="width:210px; height: 24px;"/></td>');
                    $('#cont_inanc').append('<td class="altos" id="fecha_baja_l">Jefe</td>');
                }
                else{
                  $('#fecha_baja_l').remove();
                  $('#fecha_baja').remove();
                }
              
                });
            $("#infonavit").focusout(function(){
              
                var calculo2 = $('#su_sem').val()-$('#su_sem_fiscal').val()-$("#infonavit").val();
                calculo2=Math.round(calculo2 * 100) / 100;
                $("#su_sem_efectivo").val(calculo2);
              });

            /*$("#fileToUpload").change(function(){
              var aux=$("#fileToUpload").val();
              $("#foto").attr("src", aux);

            });*/

				
        </script>
 


 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>