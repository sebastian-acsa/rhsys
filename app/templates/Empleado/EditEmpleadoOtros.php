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
 <form name="formInsertar" action="index.php?ctl=editOther" method="POST">
  <input type="hidden" name="id" value="<?php echo $params['empleado_id']?>">
<fieldset style="margin-left: 10px; margin-right: 10px;">
    <legend>Otros</legend> 
    <table width="100%" border="0"> 
        <tr id="cont_inanc">
            
            <td class="altos">status</td>
            <td class="altos">Jefe</td>
            <td class="altos" >Fecha de Alta</td>
            <td class="altos" >Fecha de Baja</td>
        </tr>
        <tr id="cont_inanc_val">
            <td>
                <select name="status" id="status">
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
            <td><input type="date" name="fecha_ingreso" id="fecha_ingreso" style="width:210px; height: 24px;" value="<?php echo $params['fecha_ingreso']?>"/></td>
            <td><input type="date" name="fecha_baja" id="fecha_baja" style="width:210px; height: 24px;" value="<?php echo $params['fecha_baja']?>"/></td>
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
              });
              $("#su_sem_fiscal").focusout(function(){
                var calculo2 = $('#su_sem').val()-$('#su_sem_fiscal').val();
                calculo2=Math.round(calculo2 * 100) / 100;
                $("#su_sem_efectivo").val(calculo2);
              });
              
              
              
            

                
        </script>
 


 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>