<?php ob_start() ?>
<style>
body{color:#9C3100;}

.bajos{color:#FFF;}
.altos{color:#9C3100;}

</style>
 <?php if(isset($params['mensaje'])) :?>
 <b><span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
 <?php endif; ?>
 <br/>
 <form name="formInsertar" action="index.php?ctl=insertar2" method="POST">
	<table width="100%" border="0">
        <tr><!-- localidad-->
            <td>Puesto</td>
            <td>Proyecto tipo</td>
            <td>Area</td>
            <td>Departamento</td>
            <td>Sede</td>
            <td>celular Acsa</td>
            <td>Razon Social</td>
            
        </tr>
        <tr>
            <td><input type="text" name="puesto" id="puesto"/></td>
            <td><select name="proyecto_tipo" id="proyecto_tipo">
                <option>Seleccione uno</option>
                <!--rellenar-->
              </select>
            </td>
            <td><select name="area_id" id="area_id">
                  <option>Seleccione uno</option>
                  
                  <!-- rellenar con DB-->
                </select>
                </td>
                <td><select name="departamento_id" id="departamento_id">
                  <option>Seleccione uno</option>
                  <!-- rellenar con DB-->
                </select></td>
                <td><input type="text" name="sede" id= "sede" /></td>
                <td><input type="text" name="cel_acsa" id="cel_acsa"/> </td>
                <td>
                    <select name="razon_social_id" id="razon_social_id">
                      <option>Seleccione uno</option>
                      <option>ACSA</option>
                      <option>MADA</option>
                    </select>
                </td>
        
                
        
        </tr><!-- termina localidad-->
        <tr><!--economicos-->
            <td>sueldo Tope</td>
            <td>sueldo contratado</td>
            <td>sueldo Deseado</td>
            <td>sueldo Semanal</td>
            <td>sueldo Semanal texto</td>
            
        </tr>    
        <tr><!--economicos-->
            <td><input type="text" name="su_aut" id= "su_aut"/></td>
            <td><input type="text" name="su_neg" id= "su_neg"/></td>
            <td><input type="text" name="sd" id= "sd"/></td>
            <td><input type="text" name="su_sem" id= "su_sem"/></td>
            <td><input type="text" name="su_sem_text" id= "su_sem_text"/></td>
            
        </tr>
        
        <tr><!--economicos mensuales-->
            <td>sueldo Mensual Bruto </td>
            <td>sueldo Mensual Bruto texto</td>
            <td>sueldo Mensual neto</td>
            <td>sueldo Mensual neto text0</td>
            <td>sueldo Mensual efectivo</td>
            <td>sueldo Mensual efectivo texto</td>
            <td>Ultimo ajuste de sueldo</td>
        </tr>
        <tr>
            <td><input type="text" name="su_men_b" id= "su_men_b"/></td>
            <td><input type="text" name="su_men_b_text" id= "su_men_b_text"/></td>
            <td><input type="text" name="su_men_neto" id= "su_men_neto"/></td>
            <td><input type="text" name="su_men_neto_text" id= "su_men_neto_text"/></td>
            <td><input type="text" name="su_men_efectivo" id= "su_men_efectivo"/></td>
            <td><input type="text" name="su_men_efectivo_text" id= "su_men_efectivo_text"/></td>
            <td><input type="text" name="f_ajuste_su" id="f_ajuste_su"/></td>
            
        </tr><!--fin economicos 2-->
        
        <tr><!-- imss e impuestos-->
            <td>Numero del IMSS</td>
            <td>Descuento IMSS</td>
            <td>Descuento ISR</td>
        </tr>
        <tr>
            <td><label for="imss_num"></label>
          <input type="text" name="imss_num" id="imss_num" /></td>
        
            <td><input type="text" name="imss_desc" id= "imss_desc"/></td>
            <td><input type="text" name="isr_desc" id= "isr_desc"/></td>
        </tr><!--fin imss e impuestos-->
      
    
     
       
        
      
        
        <tr>
            <td>Numero cuenta bacaria</td>
            <td>CTA</td>
            <td>Banco</td>
            <td>Nomina</td>>
        </tr>
        <tr>
            <td><input type="text" name="num_cta_ban" id="num_cta_ban"/></td>
            <td><input type="text" name="cta_ban_clabe" id="cta_ban_clabe"/></td>
            <td><input type="text" name="cta_ban_id" id="cta_ban_id"/>
        
            </td>
            <td><input type="text" name="nomina_id" id="nomina_id"/>
            </td>
        </tr>
        <tr>
            <td>fecha de ingreso</td>
            <td>status</td>
            <td>Jefe</td>
        </tr>
        <tr>
            <td><input type="text" name="fecha_ingreso" id= "fecha_ingreso" /></td>
            <td><input type="text" name="status" id="status"/></td>
            <td>
              <select name="jefe_id" id="jefe_id">
                <option>Seleccione uno</option>
                <!--rellenar-->
              </select>
            </td>
        </tr>
    
    
      
    <tr>
    <td colspan="7" align="right"><input type="submit" value="insertar" name="insertar" /></td>
    
    </tr>
    
    </table>

 </form>
 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>