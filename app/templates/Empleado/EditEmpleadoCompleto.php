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

 <?php if(isset($params['mensaje'])) :?>
 <b><span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
 <?php endif; ?>
 <br/>
 <form name="formInsertar" action="index.php?ctl=insertar1" method="POST">
  <fieldset>
    <legend>Datos Personales</legend>
 	<table width="100%" border="0">
<tr>
  <td width="123">nombre</td>
  <td>apellido Paterno</td>
  <td>apellido materno</td>
  <td>sexo</td>
  <td>estado_civil</td>
  <td>nacionalidad</td>
</tr>
<tr>
  <td width="281"><input type="text" name="nombre" id= "nombre" value="<?php echo $params['nombre'] ?>" /></td>
  <td><input type="text" name="apellido_p" id= "apellido_p" value="<?php echo $params['apellido_p'] ?>" /></td>
  <td><input type="text" name="apellido_m" id= "apellido_m" value="<?php echo $params['apellido_m'] ?>" /></td>
  
  <td><select name="sexo" id= "sexo" style="width:100%;">
        <?if(params['sexo']=="Masculino"){?>
          <option value="Maculino" selected>Masculino</option>
          <option value="Femenino">Femenino</option>
        <?}else{?>
          <option value="Maculino">Masculino</option>
          <option value="Femenino" selected>Femenino</option>
        <?}?>
      </select>
    </td>
    <td><select name="estado_civil" id= "estado_civil" style="width:100%;" >
          <?if(params['sexo']=="Masculino"){?>
            <option value="Soltero">Soltero</option>
            <option value="Casado">Casado</option>
            <option value="Union Libre">Union Libre</option>
          <?}else{?>
            <option value="Soltero">Soltero</option>
            <option value="Casado">Casado</option>
            <option value="Union Libre">Union Libre</option>
           <?}?>
            <!--<option value="Divorciado">Divorciado</option>
            <option value="Viudo">Viudo</option>-->
            
        </select>
    
    </td>
  <td><input type="text" name="nacionalidad" id= "nacionalidad" value="params['nacionalidad']"  /></td>
  
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
  <td>Telelefono Fijo</td>
  <!--<td>Experiecia (Tipo de Proyecto)</td>-->
</tr> 
<tr>
  <td><input type="text" name="curp" id="curp" value="<?php echo $params['curp']?>" /></td>
  <td><input type="text" name="rfc" id="rfc" value="<?php echo $params['rfc']?>" /></td>
  <td><input type="date" name="f_nacimiento" id="f_nacimiento" value="<?php echo $params['f_nacimiento']?>" style="width:99%;" /></td>
  <td><input type="text" name="l_nacimiento" id="l_nacimiento" value="<?php echo $params['l_nacimiento']?>" /></td>
  <td><input type="email" name="correo_personal" id="correo_personal" value="<?php echo $params['correo_personal']?>" /> </td>
  <td><input type="tel" name="cel_personal" id="cel_personal" value="<?php echo $params['cel_personal']?>" /> </td>
  <td><input type="tel" name="tel_personal" id="tel_personal" value="<?php echo $params['tel_personal']?>" /> </td>
</tr>
<tr>
            <td class="altos">calle</td>
            <td class="altos">colonia</td>
            <td class="altos">cp</td>
            <td class="altos">entidad</td>
            <td class="altos">pais</td>
        </tr>
        <tr>
            <td><input type="text" name="dir_calle" id="dir_calle" value="<?php echo $params['dir_calle']?>" /></td>
      			<td><input type="text" name="dir_colonia" id="dir_colonia" value="<?php echo $params['dir_colonia']?>" /> </td>
      			<td><input type="text" name="dir_cp" id="dir_cp" value="<?php echo $params['dir_cp']?>" /> </td>
      			<td><input type="text" name="dir_entidad" id="dir_entidad" value="<?php echo $params['dir_entidad']?>" /> </td>
            <td><input type="text" name="pais" id="pais" value="<?php echo $params['pais']?>" /> </td>
        </tr>

</table>
</fieldset>
<fieldset>
    <legend>Datos Profesionales</legend>
    <table width="100%" border="0">
    	<tr><!-- localidad-->
            <td>Ultimo Grado de estudios</td>
            <td>Cedula Profesional</td>
            <td>Experiencia Profesional</td>
        </tr>
        <tr>
        	<td><input type="text" name="estudios" id= "estudios" value="<?php echo $params['estudios']?>" readonly/></td>
            <td><input type="text" name="cedula" id="cedula" value="<?php echo $params['cedula']?>"readonly/> </td>
            <td><select name="exp_prof" id="exp_prof">
                  <option value="0">Tipo de Obra</option>
                  <option value="1">Civil</option>
                  <option value="2">Acabados</option> 
                  <option value="3">Escuelas</option>
                  <option value="4">Hospitales</option>  
                </select>
            </td>
        </tr>
    
   	</table>
</fieldset>
  
  <fieldset>
    <legend>Datos Del Puesto</legend>
    <table width="100%" border="0">
        <tr><!-- localidad-->
            <td>Area</td>
            <td>Departamento</td>
            <td>Puesto</td>
            
            <td>Proyecto</td>
            
            <td>Razon Social</td>  
        </tr>
        
        <tr> </tr>
        <tr>
            <td><select name="area_id" id="area_id">
                  <option value="0">Seleccione uno</option>
                  <option value="1">Operativo</option>
                  <option value="2">Adminstrativo</option>  
                </select>
            </td>
            <td><select name="departamento_id" id="departamento_id">
              <!--ordenar por alfa-->
                  <option value="0">Seleccione uno</option><!--adm--> <!--oper-->
                  
                </select></td>
            
            <td><select name="puesto" id="puesto">
                  <option value="0">Seleccione uno</option>
                  
                  
                </select>
              </td>
            <!--<td><input type="text" name="proyecto_tipo" id="proyecto_tipo"/></td>-->
            
            <td><select name="proyecto_tipo" id="proyecto_tipo">
                <option value="0">Seleccione uno</option>
                
              </select>
            </td><!--
            <td><select name="area_id" id="area_id">
                  <option value="0">Seleccione uno</option>
                  
                  
                </select>
                </td>
                <td><select name="departamento_id" id="departamento_id">
                  <option value="0">Seleccione uno</option>
                  
                </select></td>-->
                
                <td>
                    <select name="razon_social_id" id="razon_social_id">
                      <option>Seleccione uno</option>
                      <option>ACSA</option>
                      <option>MADA</option>
                    </select>
                </td>
        
           </tr><!-- termina localidad-->
         </table>
         </fieldset>
        <fieldset>
    <legend>Datos Economicos</legend> 
    <table width="100%" border="0">    
        <tr><!--economicos-->
        	<td>sueldo Tope(Mensual)</td>
            <td>sueldo Deseado (Mensual)</td>
            <td>sueldo contratado (Mensual)</td>
        </tr>    
        <tr><!--economicos-->
        	<td><input type="text" name="su_aut" id= "su_aut" value="<?php echo $params['su_aut']?>" readonly /></td>
            <td><input type="text" name="sd" id= "sd" value="<?php echo $params['sd']?>" readonly /></td>
            <td><input type="text" name="su_neg" id= "su_neg" value="<?php echo $params['su_neg']?>" readonly /></td>
        </tr>
        <tr><!--economicos mensuales-->
            <td>sueldo Semanal</td>
            <td>sueldo Semanal fiscal</td>
            <td>sueldo Semanal efectivo</td>
           
            
            
            
        </tr>
        <tr>
            <td><input type="text" name="su_sem" id= "su_sem" value="<?php echo $params['su_sem']?>" readonly /></td>
            <td><input type="text" name="su_sem_fiscal" id= "su_sem_fiscal" value="<?php echo $params['su_sem_fiscal']?>" readonly /></td><!--add DB-->
            <td><input type="text" name="su_sem_efectivo" id= "su_sem_efectivo" value="<?php echo $params['su_sem_efectivo']?>" readonly  /></td>
        </tr>
        
        <!--fin economicos 2-->
        </table>
         </fieldset>
           <fieldset>
    <legend>Datos Economicos deducciones</legend> 
    <table width="100%" border="0"> 
        
        <tr><!-- imss e impuestos-->
            <td>Numero del IMSS</td>
            <td>Descuento IMSS</td>
            <td>Descuento ISR</td>
        </tr>
        <tr>
            <td><label for="imss_num"></label>
          <input type="text" name="imss_num" id="imss_num" value="<?php echo $params['imss_num']?>" readonly /></td>
        
            <td><input type="text" name="imss_desc" id= "imss_desc" value="<?php echo $params['imss_desc']?>" readonly/></td>
            <td><input type="text" name="isr_desc" id= "isr_desc" value="<?php echo $params['isr_desc']?>" readonly/></td>
        </tr><!--fin imss e impuestos-->
      
    
     </table>
         </fieldset>
           <fieldset>
    <legend>Datos Nomina</legend> 
    <table width="100%" border="0"> 
        <tr>
            <td>Numero Cuenta Bacaria</td>
            <td>Clave InterBancaria</td>
            <td>Banco</td>
            <td>No. Plastico</td>
        </tr>
        <tr>
            <td><input type="text" name="num_cta_ban" id="num_cta_ban" value="<?php echo $params['num_cta_ban']?>" readonly/></td>
            <td><input type="text" name="cta_ban_clabe" id="cta_ban_clabe" value="<?php echo $params['cta_ban_clabe']?>" readonly/></td>
            <td><input type="text" name="cta_ban_id" id="cta_ban_id" value="<?php echo $params['cta_ban_id']?>" readonly/>
        
            </td>
            <td><input type="text" name="no_banco" id="no_banco" value="<?php echo $params['no_banco']?>" readonly />
            </td>
        </tr>
        <tr><td colspan="7">___________________________________________________________________________________________________________________________</td> </tr>
        </table>
         </fieldset>
           <fieldset>
    <legend>Otros</legend> 
    <table width="100%" border="0"> 
        <tr>
            
            <td>status</td>
            <td>Jefe</td>
        </tr>
        <tr>
          
            <td><select name="status" id="status">
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
                  
                  
                </select>
                </td>
            <td>
              <select name="jefe_id" id="jefe_id">
                <option value="0">Seleccione uno</option>
                <!--rellenar-->
              </select>
            </td>
        </tr>
        <tr><td colspan="7">___________________________________________________________________________________________________________________________</td> </tr>
        
          
        <tr>
          <td colspan="7" align="right"><input type="submit" value="insertar" name="insertar" /></td>
        </tr>
    </table>
    </fieldset>
    
 </form>
 <script src="./js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<!--<script src="datepicker/js/bootstrap-datepicker.js"></script>-->
	        <script type="text/javascript">
	            // When the document is ready
	           // $(document).ready(function () {   
	                
	            //});

              $("#area_id").change(function() {
      				  $('#departamento_id').empty();
                $('#puesto').empty();
                if($("#area_id").val()==1){
					$('#departamento_id').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#departamento_id').append('<option value="1">Diseño</option>');<!--oper-->
                  $('#departamento_id').append('<option value="5">Construccion</option>');<!--oper-->
                  $('#departamento_id').append('<option value="6">Presupuestos Y Concursos</option>');<!--oper-->
                  $('#departamento_id').append('<option value="7">Admin.Proy</option>');<!--oper-->
                  $('#departamento_id').append('<option value="10">Calidad</option>');<!--oper-->
                  $('#departamento_id').append('<option value="15">Planeacion de Proyectos</option>');<!--oper-->


                }
                if($("#area_id").val()==2){
                  $('#departamento_id').empty();
                  $('#puesto').empty();
					$('#departamento_id').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#departamento_id').append('<option value="3">Sistemas</option>');<!--adm-->
                  $('#departamento_id').append('<option value="4">Comercial</option>');<!--adm-->
                  $('#departamento_id').append('<option value="8">Control de Cobranza</option>');<!--adm-->
                  $('#departamento_id').append('<option value="9">Abastecimiento</option>');<!--adm-->
                  $('#departamento_id').append('<option value="11">Limpieza y MTTO</option>');<!--adm-->
                  $('#departamento_id').append('<option value="12">Cotabilidad</option>');<!--adm-->
                  $('#departamento_id').append('<option value="13">RH</option>');<!--adm-->
                  $('#departamento_id').append('<option value="14">Contraloria</option>');<!--adm-->
                  $('#departamento_id').append('<option value="16">Juridico</option>');<!--adm-->
                  $('#departamento_id').append('<option value="17">Finanzas</option>');<!--adm-->
                  $('#departamento_id').append('<option value="99">Direccion</option>');<!--adm-->
                }
                  
                  

                
              });
              $("#departamento_id").change(function() {
					$('#puesto').empty();
          $('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
          $('#proyecto_tipo').empty();
          $('#proyecto_tipo').append('<option value="0"><b>Seleccione uno</b></option>');
                if($("#departamento_id").val()==1){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="1_1">Gerente de Diseno</option>');
                  $('#puesto').append('<option value="1_2">Disenador</option>');
                }if($("#departamento_id").val()==3){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="3_1">Programador</option>');
                  $('#puesto').append('<option value="3_2">Encargado de Soporte</option>');
                  $('#puesto').append('<option value="3_3">Auxiliar de Soporte</option>');
                }if($("#departamento_id").val()==4){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="4_1">Promotor</option>');
                  $('#puesto').append('<option value="4_2">Vendedor</option>');
                }if($("#departamento_id").val()==5){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="5_1">Director de Contruccion</option>');
                  $('#puesto').append('<option value="5_2">Superintendente Gral.</option>');
                  $('#puesto').append('<option value="5_3">Superintendente Operativo</option>');
                  $('#puesto').append('<option value="5_4">Superintendente Adminsitrativo</option>');
                  $('#puesto').append('<option value="5_3">Residente Gral. (ROA)</option>');
                  $('#puesto').append('<option value="5_3">Residente Operativo</option>');
                  $('#puesto').append('<option value="5_3">Residente Adminstrativo</option>');
                  $('#puesto').append('<option value="5_3">Residente Aux. Operativo</option>');
                  $('#puesto').append('<option value="5_3">Residente Aux. Adminstrativo</option>');
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
                }if($("#departamento_id").val()==8){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="8_1">Gerente de Cobranza</option>');<!--Control de Cobranza-->
                  $('#puesto').append('<option value="8_2">Aux. de Cobranza</option>');
                }if($("#departamento_id").val()==9){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');

                  $('#puesto').append('<option value="9_1">Encargado de Compras</option>');<!--Abastecimiento-->
                  $('#puesto').append('<option value="9_2">Aux. de Compras</option>');
                }if($("#departamento_id").val()==10){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="10_1">Residente LEAD</option>');<!--Calidad-->
                }if($("#departamento_id").val()==11){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="11_1">Auxiliar de limpieza</option>');<!--Limpieza y MTTO-->
                }if($("#departamento_id").val()==12){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="12_1">Gerente de Cotabilidad/Tesoreria</option>');<!--Cotabilidad-->
                  $('#puesto').append('<option value="12_2">Encargado Contablidad</option>');
                  $('#puesto').append('<option value="12_3">Aux. Contable</option>');
                  $('#puesto').append('<option value="12_4">Tesorero/Bancos</option>');
                  $('#puesto').append('<option value="12_5">Tesorero/Pagos</option>');
                }if($("#departamento_id").val()==13){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="13_1">Encargado de RH</option>');<!--RH-->
                }if($("#departamento_id").val()==14){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="14_1">Contralor</option>');<!--Contraloria-->
                  $('#puesto').append('<option value="14_2">Aux. de contralor</option>');
                }if($("#departamento_id").val()==15){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="15_1">Gerente de Planeacion de Proy.</option>');<!--Planeacion de Proyectos-->
                  $('#puesto').append('<option value="15_2">Aux de Planeacion de Proy.</option>');
                }if($("#departamento_id").val()==16){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="16_1">Gerente Juridico</option>');<!--Juridico-->
                }if($("#departamento_id").val()==17){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="17_1">Gerente de Finanzas</option>');<!--Finanzas-->
                }if($("#departamento_id").val()==99){
					$('#puesto').append('<option value="0"><b>Seleccione uno</b></option>');
                  $('#puesto').append('<option value="99_1">Director General</option>');<!--Direccion-->
                  $('#puesto').append('<option value="99_2">Director Operativo</option>');
                  $('#puesto').append('<option value="99_3">Director Adminstrativo</option>');
                  
                  $('#puesto').append('<option value="99_5">Asistente de Direccion</option>');
                }
                
              });
              $("#su_neg").focusout(function(){
                var calculo = $("#su_neg").val()*12/365*7;
                calculo=Math.round(calculo * 100) / 100;
                $("#su_sem").val(calculo);
              });
			  $("#su_sem_fiscal").focusout(function(){
              
                var calculo2 = $('#su_sem').val()-$('#su_sem_fiscal').val();
                calcul2o=Math.round(calculo2 * 100) / 100;
                $("#su_sem_efectivo").val(calculo2);
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
                        $('#proyecto_tipo').append('<option value="'+item.num_proy+'">'+item.nombre+'</option>');
                      });
                      
                    });
                  }
                });
				
        </script>
 


 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>