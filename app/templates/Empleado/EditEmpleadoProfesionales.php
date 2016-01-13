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
 <form name="formEditar" action="index.php?ctl=editarPro" method="POST">
  <input type="hidden" name="id" value="<?php echo $params['empleado_id']?>">
  <fieldset style="margin-left: 10px; margin-right: 10px;">
    <legend>Datos Profesionales</legend>
    <table width="100%" border="0">
    	<tr><!-- localidad-->
        <td>Ultimo Grado de estudios</td>
        <td>Experiencia Profesional</td>
      </tr>
      <tr>
      	<td id="estudios_td_v">
            <select name="estudios" id= "estudios">
              <option value="0">Seleccione</option>
              <option value="1">Primaria</option>
              <option value="2">Secuandaria</option>
              <option value="3">Preparatoria</option>
              <option value="4">Tecnico</option>
              <option value="5">Profesional (No Titulado)</option>
              <option value="6">Profesional (Pasante)</option>
              <option value="7">Profesional (Titulado)</option>
              <option value="8">Postgrado</option>
              <option value="9">Otros</option>
            </select>
        </td>
        <?php if($params['area_id']=1){?>
          <td><select name="exp_prof" id="exp_prof">
                <option value="Civil" <?php if($params['exp_prof'] == "Civil"){ echo "selected";}?>>Civil</option>
                <option value="Acabados" <?php if($params['exp_prof'] == "Acabados"){ echo "selected";}?>>Acabados</option> 
                <option value="Escuelas" <?php if($params['exp_prof'] == "Escuelas"){ echo "selected";}?>>Escuelas</option>
                <option value="Hospitales" <?php if($params['exp_prof'] == "Hospitales"){ echo "selected";}?>>Hospitales</option>
                <option value="Desarrollo Vertical" <?php if($params['exp_prof'] == "Desarrollo Vertical"){ echo "selected";}?>>Desarrollo Vertical</option>
                <option value="Estructuras Metalicas" <?php if($params['exp_prof'] == "Estructuras Metalicas"){ echo "selected";}?>>Estructuras Metalicas</option>
                
              </select>
          </td>
        <?php }else{?>
          <td><input type="text" name="exp_prof" id= "exp_prof" value="<?php echo $params['exp_prof']?>" /></td>
        <?php }?>
      </tr>
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
                  $('#puesto').append('<option value="5_5">Residente Gral. (ROA)</option>');
                  $('#puesto').append('<option value="5_6">Residente Operativo</option>');
                  $('#puesto').append('<option value="5_7">Residente Adminstrativo</option>');
                  $('#puesto').append('<option value="5_8">Residente Aux. Operativo</option>');
                  $('#puesto').append('<option value="5_9">Residente Aux. Adminstrativo</option>');
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
              $("#estudios").change(function(){
                if( $("#estudios").val() =="7" || $("#estudios").val() =="8" || $("#estudios").val() =="4"){
                  if( $("#estudios").val() =="7" || $("#estudios").val() =="8"){
                    $("#estudios_td_t").after('<td>Cedula</td>');
                    $("#estudios_td_v").after('<td><input type="text" name="cedula" id="cedula"/> </td>');
                  }
                  $("#estudios_td_t").after('<td>Titulo</td>');
                  $("#estudios_td_v").after('<td><input type="text" name="carrera" id="carrera"/> </td>');
                }    
              });
                
        </script>
 


 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>