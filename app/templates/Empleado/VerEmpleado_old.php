<?php ob_start() ?>

<style>
body{color:#9C3100;}

.bajos{color:#000;}
.altos{color:#9C3100;
font-size:12px;
font-weight: bold;}
td{text-transform:capitalize;}
table{
	background-color:rgba(158, 158, 158, 0.25);}
legend{
	text-transform:uppercase;
	font-weight: bold;
	color:#000;
	}
.encabezado_nom{
	text-transform:capitalize;
	color:#000;}
fieldset{
	padding-top:10px;
	
	}

</style>

 <h1 class="encabezado_nom"><?php echo $params['nombre']." ".$params['apellido_p']." ".$params['apellido_m'] ?></h1>
 
<fieldset>
    <legend>Datos Personales</legend>
 	<table width="100%" border="0">
  <tr>
    <td width="123" class="altos">nombre</td>
    <td class="altos">apellido Paterno</td>
    <td class="altos">apellido materno</td>
    <td class="altos">edad</td>
    <td class="altos">sexo</td>
    <td class="altos">estado_civil</td>
    <td class="altos">nacionalidad</td>
  </tr>
  <tr>
    <td width="281" class="bajos"><?php echo $params['nombre'] ?></td>
    <td class="bajos"><?php echo $params['apellido_p'] ?></td>
    <td class="bajos"><?php echo $params['apellido_m'] ?></td>
    <td class="bajos"><?php 
    		$dt_now=new DateTime("now");
    		$f_nac=new DateTime($params['f_nacimiento']);
    		$diff = date_diff( $f_nac, $dt_now,true); 
    		
    		echo $diff->y; ?></td>
    <td class="bajos"><?php if($params['sexo']=="M"){ echo "Masculino";}else{if($params['sexo']=="F"){echo "Femenino";}} ?>
      </td>
      <td class="bajos"><?php echo $params['estado_civil'] ?>
      
      </td>
    <td class="bajos"><?php echo $params['nacionalidad'] ?></td>
    
  </tr>
  <tr>
  <td height="19" colspan="7" > </td>
  </tr> 
  <tr>
    <td class="altos">Curp</td>
    <td class="altos">RFC</td>
    <td class="altos">Fecha de Nacimiento</td>
    <td class="altos">Lugar nacimiento</td>
    <td class="altos">Correo_personal</td>
    <td class="altos">Celular personal</td>
    <td class="altos">Telelefono Fijo</td>
    <!--<td>Experiecia (Tipo de Proyecto)</td>-->
  </tr> 
  <tr>
    <td class="bajos"><?php echo $params['curp'] ?></td>
    <td class="bajos"><?php echo $params['rfc'] ?></td>
    <td class="bajos"><?php echo $params['f_nacimiento'] ?></td>
    <td class="bajos"><?php echo $params['l_nacimiento'] ?></td>
    <td class="bajos"><?php echo $params['correo_personal'] ?></td>
    <td class="bajos"><?php echo $params['cel_personal'] ?></td>
    <td class="bajos"><?php echo $params['tel_personal'] ?></td>
  </tr>
  <tr>
            <td class="altos">calle</td>
            <td class="altos">colonia</td>
            <td class="altos">cp</td>
            <td class="altos">entidad</td>
        </tr>
        <tr>
            <td class="bajos"><?php echo $params['dir_calle'] ?></td>
            <td class="bajos"><?php echo $params['dir_colonia'] ?></td>
            <td class="bajos"><?php echo $params['dir_cp'] ?></td>
            <td class="bajos"><?php echo $params['dir_entidad'] ?></td>
        </tr>

  </table>
</fieldset><br/>

  
  <fieldset>
    <legend>Datos Del Puesto</legend>
    <table width="100%" border="0">
        <tr><!-- localidad-->
            <td class="altos">Area</td>
            <td class="altos">Departamento</td>
            <td class="altos">Puesto</td>
            
            <td class="altos">Proyecto</td>
            <td class="altos">Celular Acsa</td>
            <td class="altos">Razon Social</td>  
        </tr>
        
        <tr> </tr>
        <tr>
            <td class="bajos"><?php echo $params['area_id'] ?>
                  
                  
                  
                
            </td>
            <td class="bajos"><?php echo $params['departamento_id'] ?>
              
              
              
                </td>
            
            <td class="bajos"><?php echo $params['puesto_id'] ?>
                  
                  
                  
                
              </td>
            <!--<td><input type="text" name="proyecto_tipo" id="proyecto_tipo"/></td>-->
            
            <td class="bajos"><?php echo $params['proyecto_tipo'] ?>
            </td><!--
            <td><select name="area_id" id="area_id">
                  <option value="0">Seleccione uno</option>
                  
                  
                </select>
                </td>
                <td><select name="departamento_id" id="departamento_id">
                  <option value="0">Seleccione uno</option>
                  
                </select></td>-->
                
                <td class="bajos"><?php echo $params['cel_acsa'] ?></td>
                <td class="bajos">
                    <?php if($params['razon_social_id']==0){echo "ACSA";}else{if($params['razon_social_id']==0){echo "MADA";}} ?>
                </td>
        
           </tr><!-- termina localidad-->
         </table>
         </fieldset><br/>
        <fieldset>
    <legend>Datos Economicos</legend> 
    <table width="100%" border="0">    
        <tr><!--economicos-->
        	<td class="altos">sueldo Tope</td>
            <td class="altos">sueldo Deseado</td>
            <td class="altos">sueldo contratado</td>
            <td class="altos" >sueldo Actual</td>
        </tr>    
        <tr><!--economicos-->
        	<td class="bajos"><?php echo $params['su_aut'] ?></td>
            <td class="bajos"><?php echo $params['sd'] ?></td>
            <td class="bajos"><?php echo $params['su_neg'] ?></td>
            <td class="bajos"><?php echo $params['su_neg'] ?></td>
        </tr>
        <tr><!--economicos mensuales-->
            <td class="altos">sueldo Mensual Bruto </td>
            
            <td class="altos">sueldo Mensual neto</td>
            
            <td class="altos">sueldo Mensual efectivo</td>
            
            <td class="altos">Fecha Ultimo ajuste de sueldo</td>
        </tr>
        <tr>
            <td class="bajos"><?php echo $params['su_men_b'] ?></td>
            
            <td class="bajos"><?php echo $params['su_men_neto'] ?></td>
            
            <td class="bajos"><?php echo $params['su_men_efectivo'] ?></td>
            
            <td class="bajos"><?php echo $params['f_ajuste_su'] ?></td> 
        </tr>
        <tr>
          <td class="altos">sueldo Semanal</td>
        </tr>
        <tr>
          
          <td class="bajos"><?php echo $params['su_sem'] ?></td>
        </tr>
        <!--fin economicos 2-->
        </table>
         </fieldset><br/>
           <fieldset>
    <legend>Datos Economicos deducciones</legend> 
    <table width="100%" border="0"> 
        
        <tr><!-- imss e impuestos-->
            <td class="altos">Numero del IMSS</td>
            <td class="altos">Descuento IMSS</td>
            <td class="altos">Descuento ISR</td>
        </tr>
        <tr>
            <td class="bajos"><?php echo $params['imss_num'] ?></td>
        
            <td class="bajos"><?php echo $params['imss_desc'] ?></td>
            <td class="bajos"><?php echo $params['isr_desc'] ?></td>
        </tr><!--fin imss e impuestos-->
      
    
     </table>
         </fieldset><br/>
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
            <td class="bajos"><?php echo $params['num_cta_ban'] ?></td>
            <td class="bajos"><?php echo $params['cta_ban_clabe'] ?></td>
            <td class="bajos"><?php echo $params['cta_ban_id'] ?></td>
            <td class="bajos"><?php echo $params['no_plastico'] ?></td>
        </tr>
        </table>
         </fieldset><br/>
           <fieldset>
    <legend>Otros</legend> 
    <table width="100%" border="0"> 
        <tr>
            <td class="altos">fecha de ingreso</td>
            <td class="altos">status</td>
            <td class="altos">Jefe</td>
        </tr>
        <tr>
            <td class="bajos"><?php echo $params['fecha_ingreso'] ?></td>
            <td class="bajos"><?php echo $params['status'] ?></td>
            <td class="bajos"><?php echo $params['jefe_id'] ?></td>
        </tr>
        
        
          
        
    </table>
    </fieldset><br/>

 </table>


 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>