<?php ob_start() ?>

<!--formualrio-->
<form action="index.php?ctl=viewHist" method="post">
<table width="100%" border="1">
  <tr>
    <td>Empleado</td>
    <td>
    	<select id="id" name="id">
    		<option value="">Seleccione Uno</option>
               <?php foreach ($params['empleados'] as $empleado) :?>
                 <option value="<?php echo $empleado['empleado_id']?>" <?php 
                 if(isset($params['cambios'][0])){if($empleado['empleado_id']==$params['cambios'][0]['empleado_id']){ echo "selected";}}?>><?php echo $empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m']?></option>
               <?php endforeach; ?>
    	</select>
	</td>
    <td>tipo;</td>
    <td>
    	<select id="tipo" name="tipo">
    		<option value="Economico">Economico</option>
    		<option value="Personal">Personal</option>
    		<option value="Puesto">Puesto</option>
    		<option value="Profesional">Profesional</option>
    	</select>
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td><input name="" type="submit" value="buscar" /></td>
  </tr>
</table>
</form>
<!--fin formualrio-->

<!--Economico-->
<?php if($params['tipo']=="Economico"){ ?>
	<table width="100%" border="1">
	  <tr>
	    <th scope="col">Fecha</th>
	    <th scope="col">Sueldo Tope</th>
	    <th scope="col">Sueldo Actual</th>
	    <th scope="col">Sueldo deseado</th>
	    <th scope="col">Sueldo Semanal</th>
	    <th scope="col">Sueldo Semanal Efectivo</th>
	    <th scope="col">sueldo Semanal Fiscal</th>
	    <th scope="col"># de Imss</th>
	    <th scope="col">Descuento Imss</th>
	    <th scope="col">ISR</th>
	    <th scope="col">Num Cuenta</th>
	    <th scope="col">Clave Interbancaria</th>
	    <th scope="col">Quien Edito</th>
	    
	  </tr>
	  	<?php if(isset($params['cambios'])){ 
	  	if(empty($params['cambios'])){
	  		echo "<tr><td colspan=\"13\">Este Empleado no Tiene Cambios </td></tr>";
	  	}
	  	else{?>
		<?php   foreach ($params['cambios'] as $cambio) :?>
		  <tr>
		  	<!--Fecha-->
		    <td><?php $cambio['f_cambio'] ?></td>
		    <!--Sueldo Tope-->
		    <td><?php if($cambio['su_aut_old']!=$cambio['su_aut_new']){echo number_format($cambio['su_aut_old'],2,".",",")."->".number_format($cambio['su_aut_new'],2,".",",");}else{echo number_format($cambio['su_aut_new'],2,".",",");} ?></td>
		    <!--Sueldo Actual-->
		    <td><?php if($cambio['su_neg_old']!=$cambio['su_neg_new']){echo number_format($cambio['su_neg_old'],2,".",",")."->".number_format($cambio['su_neg_new'],2,".",",");}else{echo number_format($cambio['su_neg_new'],2,".",",");}  ?></td>
		    <!--Sueldo deseado-->
		    <td><?php if($cambio['sd_old']!=$cambio['sd_new']){echo number_format($cambio['sd_old'],2,".",",")."->".number_format($cambio['sd_new'],2,".",",");}else{echo number_format($cambio['sd_new'],2,".",",");}  ?></td>
		    <!--Sueldo Semanal-->
		    <td><?php if($cambio['su_sem_old']!=$cambio['su_sem_new']){echo number_format($cambio['su_sem_old'],2,".",",")."->".number_format($cambio['su_sem_new'],2,".",",");}else{echo number_format($cambio['su_sem_new'],2,".",",");}  ?></td>
		    <!--Sueldo Semanal Efectivo-->
		    <td><?php if($cambio['su_sem_efectivo_old']!=$cambio['su_sem_efectivo_new']){echo number_format($cambio['su_sem_efectivo_old'],2,".",",")."->".number_format($cambio['su_sem_efectivo_new'],2,".",",");}else{echo number_format($cambio['su_sem_efectivo_new'],2,".",",");}  ?></td>
		    <!--sueldo Semanal Fiscal-->
		    <td><?php if($cambio['su_sem_fiscal_old']!=$cambio['su_sem_fiscal_new']){echo number_format($cambio['su_sem_fiscal_old'],2,".",",")."->".number_format($cambio['su_sem_fiscal_new'],2,".",",");}else{echo number_format($cambio['su_sem_fiscal_new'],2,".",",");}  ?></td>
		    <!--# de Imss-->
		    <td><?php if($cambio['imss_num_old']!=$cambio['imss_num_new']){echo $cambio['imss_num_old']."->".$cambio['imss_num_new'];}else{echo $cambio['imss_num_new'];}  ?></td>
		    <!--Descuento Imss-->
		    <td><?php if($cambio['imss_desc_old']!=$cambio['imss_desc_new']){echo $cambio['imss_desc_old']."->".$cambio['imss_desc_new'];}else{echo $cambio['imss_desc_new'];}  ?></td>
		    <!--ISR-->
		    <td><?php if($cambio['isr_desc_old']!=$cambio['isr_desc_new']){echo $cambio['isr_desc_old']."->".$cambio['isr_desc_new'];}else{echo $cambio['isr_desc_new'];}  ?></td>
		    <!--Num Cuenta-->
		    <td><?php if($cambio['num_cta_ban_old']!=$cambio['num_cta_ban_new']){echo $cambio['num_cta_ban_old']."->".$cambio['num_cta_ban_new'];}else{echo $cambio['num_cta_ban_new'];}  ?></td>
		    <!--Clave Interbancaria-->
		    <td><?php if($cambio['cta_ban_clabe_old']!=$cambio['cta_ban_clabe_new']){echo $cambio['cta_ban_clabe_old']."->".$cambio['cta_ban_clabe_new'];}else{echo $cambio['cta_ban_clabe_new'];}  ?></td>
		    <!--Quien Edito-->
		    <td><?php $cambio['quien_edita'] ?></td>
		  </tr>
		  <?php endforeach;
			}
	  	}
	  else{
	  	
	  		echo "<tr><td colspan=\"13\">Por Favor Seleccione Un Empleado </td></tr>";
	  	
	  	
	  } ?>
	</table>
<?php } ?>
<!-- fin Economico-->

<!--Oficina-->
<?php if($params['tipo']=="Puesto"){ ?>
		<table width="100%" border="1">
		  <tr>
		    <th scope="col">Fecha</th>
		    <th scope="col">Area</th>
		    <th scope="col">departamento</th>
		    <th scope="col">puesto</th>
		    <th scope="col">Proyecto</th>
		    <th scope="col">Empresa Empleadora</th>
		    <th scope="col">Quien Edito</th>
		  </tr>
		    <?php if(isset($params['cambios'])){ 
			  	if(empty($params['cambios'])){
			  		echo "<tr><td colspan=\"13\">Este Empleado no Tiene Cambios </td></tr>";
			  	}
			  	else{?>
				  <?php foreach ($params['cambios'] as $cambio) :?>
				  <tr>
				  	<!--Fecha-->
				    <td><?php $cambio['f_cambio'] ?></td>
				    <!--Area-->
				    <td><?php if($cambio['area_id_old']!=$cambio['area_id_new']){echo $cambio['area_id_old']."->".$cambio['area_id_new'];}else{echo $cambio['area_id_new'];}  ?></td>
				    <!--departamento-->
				    <td><?php if($cambio['departamento_id_old']!=$cambio['departamento_id_new']){echo $cambio['departamento_id_old']."->".$cambio['departamento_id_new'];}else{echo $cambio['departamento_id_new'];}  ?></td>
				    <!--puesto-->
				    <td><?php if($cambio['puesto_old']!=$cambio['puesto_new']){echo $cambio['puesto_old']."->".$cambio['puesto_new'];}else{echo $cambio['puesto_new'];}  ?></td>
				    <!--Proyecto-->
				    <td><?php if($cambio['proyecto_tipo_old']!=$cambio['proyecto_tipo_new']){echo $cambio['proyecto_tipo_old']."->".$cambio['proyecto_tipo_new'];}else{echo $cambio['proyecto_tipo_new'];}  ?></td>
				    <!--Empresa Empleadora-->
				    <td><?php if($cambio['razon_social_id_old']!=$cambio['razon_social_id_new']){echo $cambio['razon_social_id_old']."->".$cambio['razon_social_id_new'];}else{echo $cambio['razon_social_id_new'];}  ?>
				    </td>
				    <!--Quien Edito-->
				    <td><?php $cambio['quien_edita'] ?></td>
				  </tr>
				  <?php endforeach;
				}
		  	}
		    else{
		  	
		  		echo "<tr><td colspan=\"13\">Por Favor Seleccione Un Empleado </td></tr>"; 	
		  	} ?>
		</table>
<?php } ?>
<!-- fin oficina-->

<!--Personal-->
<?php if($params['tipo']=="Personal"){ ?>
	<table width="100%" border="1">
	  <tr>
	    <th scope="col">Fecha</th>
	    <th scope="col">Nombre</th>
	    <th scope="col">Sexo</th>
	    <th scope="col">estado Civil</th>
	    <th scope="col">nacionalidad</th>
	    <th scope="col">curp</th>
	    <th scope="col">rfc</th>
	    <th scope="col">Correo</th>
	    <th scope="col">celular;</th>
	    <th scope="col">telefono</th>
	    <th scope="col">calle</th>
	    <th scope="col">colonia</th>
	    <th scope="col">CP</th>
	    <th scope="col">entidad</th>
	    <th scope="col">pais</th>
	    <th scope="col">¿Quien Edito?</th>
	  </tr>
	  <?php if(isset($params['cambios'])){ 
		  	if(empty($params['cambios'])){
		  		echo "<tr><td colspan=\"13\">Este Empleado no Tiene Cambios </td></tr>";
		  	}
		  	else{?>
				<?php   foreach ($params['cambios'] as $cambio) :?>
				  <tr>
				  	<!--Fecha-->
				    <td><?php $cambio['f_cambio'] ?></td>
				    <!--Nombre-->
				    <td><?php if($cambio['nombre_old']!=$cambio['nombre_new']){echo $cambio['nombre_old']."->".$cambio['nombre_new'];}else{echo $cambio['nombre_new'];}  ?></td>
				    <!--Sexo-->
				    <td><?php if($cambio['sexo_old']!=$cambio['sexo_new']){echo $cambio['sexo_old']."->".$cambio['sexo_new'];}else{echo $cambio['sexo_new'];}  ?></td>
				    <!--estado Civil-->
				    <td><?php if($cambio['estado_civil_old']!=$cambio['estado_civil_new']){echo $cambio['estado_civil_old']."->".$cambio['estado_civil_new'];}else{echo $cambio['estado_civil_new'];}  ?></td>
				    <!--nacionalidad-->
				    <td><?php if($cambio['nacionalidad_old']!=$cambio['nacionalidad_new']){echo $cambio['nacionalidad_old']."->".$cambio['nacionalidad_new'];}else{echo $cambio['nacionalidad_new'];}  ?></td>
				    <!--curp-->
				    <td><?php if($cambio['curp_old']!=$cambio['curp_new']){echo $cambio['curp_old']."->".$cambio['curp_new'];}else{echo $cambio['curp_new'];}  ?></td>
				    <!--rfc-->
				    <td><?php if($cambio['rfc_old']!=$cambio['rfc_new']){echo $cambio['rfc_old']."->".$cambio['rfc_new'];}else{echo $cambio['rfc_new'];}  ?></td>
				    <!--Correo-->
				    <td><?php if($cambio['correo_personal_old']!=$cambio['correo_personal_new']){echo $cambio['correo_personal_old']."->".$cambio['correo_personal_new'];}else{echo $cambio['correo_personal_new'];}  ?></td>
				    <!--celular-->
				    <td><?php if($cambio['cel_personal_old']!=$cambio['cel_personal_new']){echo $cambio['cel_personal_old']."->".$cambio['cel_personal_new'];}else{echo $cambio['cel_personal_new'];}  ?></td>
				    <!--telefono-->
				    <td><?php if($cambio['tel_personal_old']!=$cambio['tel_personal_new']){echo $cambio['tel_personal_old']."->".$cambio['tel_personal_new'];}else{echo $cambio['tel_personal_new'];}  ?></td>
				    <!--calle-->
				    <td><?php if($cambio['dir_calle_old']!=$cambio['dir_calle_new']){echo $cambio['dir_calle_old']."->".$cambio['dir_calle_new'];}else{echo $cambio['dir_calle_new'];}  ?></td>
				    <!--colonia-->
				    <td><?php if($cambio['dir_colonia_old']!=$cambio['dir_colonia_new']){echo $cambio['dir_colonia_old']."->".$cambio['dir_colonia_new'];}else{echo $cambio['dir_colonia_new'];}  ?></td>
				    <!--CP-->
				    <td><?php if($cambio['dir_cp_old']!=$cambio['dir_cp_new']){echo $cambio['dir_cp_old']."->".$cambio['dir_cp_new'];}else{echo $cambio['dir_cp_new'];}  ?></td>
				    <!--entidad-->
				    <td><?php if($cambio['dir_entidad_old']!=$cambio['dir_entidad_new']){echo $cambio['dir_entidad_old']."->".$cambio['dir_entidad_new'];}else{echo $cambio['dir_entidad_new'];}  ?></td>
				    <!--pais-->
				    <td><?php if($cambio['pais_old']!=$cambio['pais_new']){echo $cambio['pais_old']."->".$cambio['pais_new'];}else{echo $cambio['pais_new'];}  ?></td>
				    <!--¿Quien Edito?-->
				    <td><?php $cambio['quien_edita'] ?></td>
				  </tr>
			  	<?php endforeach;
				}
		  	}
		    else{
		  	
		  		echo "<tr><td colspan=\"13\">Por Favor Seleccione Un Empleado </td></tr>"; 	
		  	} ?>
	</table>
<?php } ?>
<!--Fin Personal-->

<!--Profesional-->
<?php if($params['tipo']=="Profesional"){ ?>
	<table width="100%" border="1">
	  <tr>
	    <th scope="col">Fecha</th>
	    <th scope="col">cedula</th>
	    <th scope="col">Ultimo grado de estudios</th>
	    <th scope="col">Experiencia Profesional</th>
	    <th scope="col">Quien Edito</th>
	    
	  </tr>
	  	<?php if(isset($params['cambios'])){ 
		  	if(empty($params['cambios'])){
		  		echo "<tr><td colspan=\"13\">Este Empleado no Tiene Cambios </td></tr>";
		  	}
		  	else{?>
				<?php   foreach ($params['cambios'] as $cambio) :?>
						<tr>
							<!--Fecha-->
							<td><?php $cambio['f_cambio'] ?></td>
							<!--cedula-->
							<td><?php if($cambio['cedula_old']!=$cambio['cedula_new']){echo $cambio['cedula_old']."->".$cambio['cedula_new'];}else{echo $cambio['cedula_new'];}  ?>
							</td>
							<!--Ultimo grado de estudios-->
							<td><?php if($cambio['estudios_old']!=$cambio['estudios_new']){echo $cambio['estudios_old']."->".$cambio['estudios_new'];}else{echo $cambio['estudios_new'];}  ?>
							</td>
							<!--Experiencia Profesional-->
							<td><?php if($cambio['estudios_old']!=$cambio['estudios_new']){echo $cambio['estudios_old']."->".$cambio['estudios_new'];}else{echo $cambio['estudios_new'];}  ?>
							</td>
							<!--¿Quien Edito?-->
							<td><?php $cambio['quien_edita'] ?></td>
						</tr>
				<?php endforeach;
			}
	  	}
	    else{
	  	
	  		echo "<tr><td colspan=\"13\">Por Favor Seleccione Un Empleado </td></tr>"; 	
	  	} ?>
	</table>
<?php } ?>
<!--Fin Profesional-->



 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>