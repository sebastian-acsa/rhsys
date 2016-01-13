<?php ob_start() ?>
<style>
body{color:#9C3100;}

.bajos{color:#000;}
.altos{color:#9C3100;
font-size:14px;
font:bold;}
td{text-transform:capitalize;}
table{  background-color:rgba(158, 158, 158, 0.25);}
fieldset{margin-left: 40px; margin-right: 10px;}
  .personal{width: 200px;}
</style>

 <?php if(isset($params['mensaje'])) :?>
 <b><span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
 <?php endif; ?>
 <br/>
  <form name="formEditar" action="index.php?ctl=editarOf" method="POST">
    <input type="hidden" name="id" value="<?php echo $params['empleado_id']?>">
<fieldset style="margin-left: 10px; margin-right: 10px;">
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
            <td><select class="personal" name="area_id" id="area_id">
                  <option value="0">Seleccione uno</option>
                  <option value="1">Operativo</option>
                  <option value="2">Adminstrativo</option>  
                </select>
            </td>
            <td><select class="personal" name="departamento_id" id="departamento_id">
              <!--ordenar por alfa-->
                  <option value="0">Seleccione uno</option><!--adm--> <!--oper-->
                  
                </select></td>
            
            <td><select class="personal" name="puesto" id="puesto">
                  <option value="0">Seleccione uno</option>
                  
                  
                </select>
              </td>
            <!--<td><input type="text" name="proyecto_tipo" id="proyecto_tipo"/></td>-->
            
            <td><select class="personal" name="proyecto_tipo" id="proyecto_tipo">
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
                      <option value="1" <?php if($params['razon_social_id'] == 1){ echo "selected";}?> >ACSA</option>
                      <option value="2" <?php if($params['razon_social_id'] == 2){ echo "selected";}?> >MADA</option>
                      <option value="3" <?php if($params['razon_social_id'] == 2){ echo "selected";}?> >IDP</option>
                      <option value="4" <?php if($params['razon_social_id'] == 2){ echo "selected";}?> >JIMEC</option>
                    </select>
                </td>
        
           </tr><!-- termina localidad-->
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
                  
                  $('#puesto').append('<option value="5_3">Superintendente Operativo</option>');
                  
                  $('#puesto').append('<option value="5_4">Residente Gral. (ROA)</option>');
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
                  $('#puesto').append('<option value="7_7">Residente Adminstrativo (RA)</option>');
                  $('#puesto').append('<option value="7_9">Residente Aux. Adminstrativo</option>');
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
                  $('#puesto').append('<option value="99_9">Practicante de Direccion</option>');
                }
                
              });
              
              $("#su_neg").focusout(function(){
                var auxiliar=0;
                var neg=$('#su_neg').val();
                var aut=$('#su_aut').val();
                if(parseFloat(neg) > parseFloat(aut)){
                    auxiliar=$('#su_aut').val();
                    $("#su_neg").val( $('#su_aut').val());
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
                
        </script>
 


 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>