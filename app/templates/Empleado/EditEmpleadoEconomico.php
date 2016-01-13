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
.formulas{background-color: #E9E9E9;}
</style>

 <?php if(isset($params['mensaje'])) :?>
 <b><span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
 <?php endif; ?>
 <br/>
 <form name="formInsertar" action="index.php?ctl=editEco" method="POST">
  <input type="hidden" name="id" value="<?php echo $params['empleado_id']?>">
<fieldset style="margin-left: 10px; margin-right: 10px;">
<legend>Datos Economicos</legend> 
    <table width="100%" border="0">    
        <tr><!--economicos-->
        	<td class="altos">sueldo Tope(Mensual)</td>
            <td class="altos">sueldo Deseado (Mensual)</td>
            <td class="altos">sueldo contratado (Mensual)</td>
            <td class="altos">sueldo Anterior</td>
        </tr>    
        <tr><!--economicos-->
        	<td><input type="text" name="su_aut" id= "su_aut" class="formulas" value="<?php echo $params['su_aut']?>" </td>
            <td><input type="text" name="sd" id= "sd" class="formulas" value="<?php echo number_format($params['sd'],2,".",",")?>"  /></td>
            <td><input type="text" name="su_neg" id= "su_neg" class="formulas" value="<?php echo number_format($params['su_neg'],2,".",",")?>"  /></td>
            <td><input type="text" name="su_anterior" id= "su_anterior" class="formulas" value="<?php echo number_format($params['su_anterior'],2,".",",")?>"   /></td>
        </tr>
        <tr><!--economicos mensuales-->
            <td class="altos">sueldo Semanal Bruto</td>
            <td class="altos">sueldo Semanal fiscal</td>
            <td class="altos">sueldo Semanal efectivo Neto</td>
            <td class="altos" >sueldo Actual</td>            
        </tr>
        <tr>
            <td><input type="text" name="su_sem" id= "su_sem" class="formulas" value="<?php echo $params['su_sem'] ?>"  /></td>
            <td><input type="text" name="su_sem_fiscal" id= "su_sem_fiscal" value="<?php echo $params['su_sem_fiscal'] ?>"  /></td><!--add DB-->
            <td><input type="text" name="su_sem_efectivo" id= "su_sem_efectivo" class="formulas" value="<?php echo $params['su_sem_efectivo'] ?>"   /></td>
            <td><input type="text" name="su_actual" id= "su_actual" value="<?php echo $params['su_actual'] ?>"   /></td>
        </tr>
        
        <!--fin economicos 2-->
        </table>
         </fieldset>
           <fieldset>
    <legend>Datos Economicos deducciones</legend> 
    <table width="100%" border="0"> 
        
        <tr><!-- imss e impuestos-->
            <td width="20%" class="altos">Numero del IMSS</td>
            <td width="20%" class="altos" >Descuento IMSS</td>
            <td width="20%" class="altos">Retencion Infonavit</td>
            <td width="20%" class="altos">Descuento ISR</td>
            <td width="20%" class="altos">Fecha De Ingreso</td>
        </tr>
        <tr>
            <td><input type="text" name="imss_num" id="imss_num" value="<?php echo $empleado['imss_num']?>" class="formulas"   /></td>
                  <td><input type="text" name="imss_desc" id= "imss_desc" value="<?php echo $empleado['imss_desc']?>" class="formulas"  /></td>
                  <td class="bajos"><input class="personales" type="text" name="infonavit" id= "infonavit" value="<?php echo $empleado['infonavit']?>" /></td>
                  <td><input type="text" name="isr_desc" id= "isr_desc" value="<?php echo $empleado['isr_desc']?>" class="formulas"  /></td>
                  <td class="bajos"><input class="personales" type="date" name="fecha_ingreso" id="fecha_ingreso" style="height: 24px;" value="<?php echo $empleado['fecha_ingreso']?>" /></td>

        </tr><!--fin imss e impuestos-->
      
    
     </table>
         </fieldset>
           <fieldset>
    <legend>Datos Nomina</legend> 
    <table width="100%" border="0"> 
        <tr>
            <td class="altos">Numero Cuenta Bacaria</td>
            <td class="altos">Clave InterBancaria</td>
            <td class="altos">Banco</td>
            <td class="altos">No. Plastico</td>
        </tr>
        <tr>
            <td><input type="text" name="num_cta_ban" id="num_cta_ban" value="<?php echo $params['num_cta_ban']?>"  /></td>
            <td><input type="text" name="cta_ban_clabe" id="cta_ban_clabe" value="<?php echo $params['cta_ban_clabe']?>"  /></td>
            <td><input type="text" name="cta_ban_id" id="cta_ban_id" value="<?php echo $params['cta_ban_id']?>" />
        
            </td>
            <td><input type="text" name="no_banco" id="no_banco" value="<?php echo $params['no_banco']?>"  />
            </td>
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
            
                $("#su_actual").focusout(function(){
                var auxiliar=0;
                var neg=$('#su_actual').val();
                var aut=$('#su_aut').val();
                if(parseFloat(neg) > parseFloat(aut)){
                    auxiliar=0;
                    $("#su_actual").val( $('#su_aut').val());
                    //alert('Excede El Sueldo Tope');
                }
                else{
                  auxiliar=$("#su_actual").val();
                }
                var calculo = auxiliar*12/365*7;
                calculo=Math.round(calculo * 100) / 100;
                $("#su_sem").val(calculo);
                $('#su_sem_efectivo').val(calculo);
              });
              /*
              $("#su_actual").focusout(function(){
                var auxiliar=0;
                if($('#su_actual').val() >= $('#su_aut').val()){
                    auxiliar=$("#su_aut").val();
                    $('#su_actual').val( $('#su_aut').val());
                    //alert('Excede El Sueldo Tope');
                }
                else{
                  auxiliar=$("#su_actual").val();
                }
                var calculo = auxiliar*12/365*7;
                calculo=Math.round(calculo * 100) / 100;
                $("#su_sem").val(calculo);
                $("#su_sem_fiscal").val(0);
                $("#su_sem_efectivo").val(calculo);
              });*/

              $("#su_sem_fiscal").focusout(function(){
                var calculo2 = $('#su_sem').val()-$('#su_sem_fiscal').val()-$("#infonavit").val();
                calculo2=Math.round(calculo2 * 100) / 100;
                $("#su_sem_efectivo").val(calculo2);
              });

              $("#infonavit").focusout(function(){
              
                var calculo2 = $('#su_sem').val()-$('#su_sem_fiscal').val()-$("#infonavit").val();
                calculo2=Math.round(calculo2 * 100) / 100;
                $("#su_sem_efectivo").val(calculo2);
              });                
              
            

                
        </script>
 


 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>