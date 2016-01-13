<?php ob_start() ?>
<style>
body{color:#9C3100;}
<?php $empleado=$params['empleado'] ?>
.bajos{color:#000;}
.altos{color:#9C3100;
font-size:14px;
font:bold;
padding-top: 10px;}
td{text-transform:capitalize;}
.Subcat{color:black;}
table{background-color:rgba(158, 158, 158, 0.25);}

.formulas{background-color: #E9E9E9;} 
</style>

 <?php if(isset($params['mensaje'])) :?>
 <b><span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
 <?php endif; ?>
 <br/>
 <form name="formInsertar" action="index.php?ctl=insertar1" method="POST">
  <a href="index.php?ctl=monitorEmp_a#<?php echo $_GET['zona'];?>">regresar</a>
  <fieldset style="margin-left: 10px; margin-right: 10px;">
    <legend>Datos Personales</legend>
 	<table width="100%" border="0">
    <tr>
      <td class="altos" rowspan="11" style="padding-right: 15px;
    padding-left: 5px;
    background-color: white;"><img id="foto" src="<?php echo $empleado['foto']?>" width="120" height="190" /></td>
      <td class="altos">nombre</td>
      <td class="altos">apellido Paterno</td>
      <td class="altos">apellido materno</td>
      <td class="altos">sexo</td>
      <td class="altos">estado_civil</td>
      <td class="altos">nacionalidad</td>
    </tr>
    <tr>
      <td><input type="text" name="nombre" id= "nombre" value="<?php echo $empleado['nombre']  ?>"   class="formulas" /></td>
      <td><input type="text" name="apellido_p" id= "apellido_p" value="<?php echo $empleado['apellido_p']  ?>"   class="formulas" /></td>
      <td><input type="text" name="apellido_m" id= "apellido_m" value="<?php echo $empleado['apellido_m']  ?>"   class="formulas" /></td>
      
      <td><select name="sexo" id= "sexo" style="width:100%;" class="formulas" disabled>
            
              <option value="Maculino" <?php if($empleado['sexo']=="Masculino"){echo "selected";}?> >Masculino</option>
              <option value="Femenino" <?php if($empleado['sexo']=="Femenino"){echo "selected";}?> >Femenino</option>
            
          </select>
        </td>
        <td><select name="estado_civil" id= "estado_civil" style="width:100%;" class="formulas" disabled>
              
                <option value="Soltero" <?php if($empleado['estado_civil']=="Soltero"){echo "selected"; }?> >Soltero</option>
                <option value="Casado" <?php if($empleado['estado_civil']=="Casado"){echo "selected"; }?> >Casado</option>
                <option value="Union Libre" <?php if($empleado['estado_civil']=="Union Libre"){echo "selected"; }?> >Union Libre</option>

                <!--<option value="Divorciado">Divorciado</option>
                <option value="Viudo">Viudo</option>-->
                
            </select>
        
        </td>
      <td><input type="text" name="nacionalidad" id= "nacionalidad" value="<?php echo $empleado['nacionalidad']?>"   class="formulas"/></td>
  
      </tr>
      <tr>
      <td height="19" colspan="7" > </td>
      </tr> 
      <tr>
        <td style="altos">Curp</td>
        <td style="altos">RFC</td>
        <td style="altos">Fecha de Nacimiento</td>
        <td class="altos">Lugar nacimiento</td>
        <td class="altos">Correo_personal</td>
        <td class="altos">Celular personal</td>
        <!--<td>Experiecia (Tipo de Proyecto)</td>-->
      </tr> 
      <tr>
        <td><input type="text" name="curp" id="curp" value="<?php echo $empleado['curp'] ?>" class="formulas"  /></td>
        <td><input type="text" name="rfc" id="rfc" value="<?php echo $empleado['rfc'] ?>" class="formulas"  /></td>
        <td><input type="date" name="f_nacimiento" id="f_nacimiento" value="<?php echo $empleado['f_nacimiento'] ?>" class="formulas" style="width:99%; height: 24px;"  /></td>
        <td><input type="text" name="l_nacimiento" id="l_nacimiento" value="<?php echo $empleado['l_nacimiento'] ?>" class="formulas"  /></td>
        <td><input type="email" name="correo_personal" id="correo_personal" value="<?php echo $empleado['correo_personal'] ?>" class="formulas"  /> </td>
        <td><input type="tel" name="cel_personal" id="cel_personal" value="<?php echo $empleado['cel_personal'] ?>" class="formulas"  /> </td>
        
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
            <td><input type="text" name="dir_calle" id="dir_calle" value="<?php echo $empleado['dir_calle']?>" class="formulas"  /></td>
      			<td><input type="text" name="dir_colonia" id="dir_colonia" value="<?php echo $empleado['dir_colonia']?>" class="formulas"  /> </td>
      			<td><input type="text" name="dir_cp" id="dir_cp" value="<?php echo $empleado['dir_cp']?>" class="formulas"  /> </td>
            <td><input type="text" name="dir_municipio" id="dir_municipio" value="<?php echo $empleado['dir_municipio']?>" class="formulas"  /> </td>
      			<td><input type="text" name="dir_entidad" id="dir_entidad" value="<?php echo $empleado['dir_entidad']?>" class="formulas"  /> </td>
            <td><input type="text" name="pais" id="pais" value="<?php echo $empleado['pais']?>" class="formulas"  /> </td>
        </tr>
        <tr>
          <td class="altos">Telelefono Fijo</td>
        </tr>
        <tr>
          <td><input type="tel" name="tel_personal" id="tel_personal" value="<?php echo $empleado['tel_personal']?>" class="formulas"  /></td>
        </tr>
		    <tr>
          <td colspan="7" align="right"><a href="index.php?ctl=editarP&id=<?php echo $empleado['empleado_id']?>">editar</a></td>
        </tr>
    </table>
    </fieldset>

  
  
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
          
            <td><input type="text" name="area_id" id= "area_id" value="<?php if($empleado["area_id"]==1){echo "Operativo";}else{echo "Adminstrativo";}?>" class="formulas"   /></td>

            
            <td><input type="text" name="departamento_id" id= "departamento_id" value="<?php echo $params["departamento"]?>" class="formulas" style=" width: 210;" /></td>
            
            <td><input type="text" name="puesto" id= "puesto" value="<?php echo $params["puesto"]?>" class="formulas" style=" width: 210;" /></td>
              
            <td>
              <input type="text" name="proyecto_tipo" id= "proyecto_tipo" value="<?php echo $params["proyectos"]?>" class="formulas" /></td>
            </td>
            <td><input type="text" name="razon_social_id" id= "razon_social_id" value="<?php switch ($empleado['razon_social_id']) {
              case '1':
                echo "ACSA";
                break;
              case '2':
                echo "MADA";
                break;
              case '3':
                echo "IDP";
                break;
              case '4':
                echo "JIMEC";
                break; 
              default:
                echo "No Asignado";
                break;
              }
              ?>"   class="formulas" /></td>
          </tr><!-- termina localidad-->
          <tr>
              <td colspan="7" align="right"><a href="index.php?ctl=editarOf&id=<?php echo $empleado['empleado_id']?>">editar</a></td>
       	  </tr>
        </table>
        </fieldset>
        <fieldset style="margin-left: 10px; margin-right: 10px;">
            <legend>Datos Profesionales</legend>
            <table width="100%" border="0">
              <tr><!-- localidad-->
                    <td class="altos">Ultimo Grado de estudios</td>
                    <td class="altos">Cedula Profesional</td>
                    <td class="altos">Experiencia Profesional</td>
                </tr>
                <tr>
                  <td><input type="text" name="estudios" id= "estudios" value="<?php echo $empleado['estudios']?>" class="formulas"  /></td>
                    <td><input type="text" name="cedula" id="cedula" value="<?php echo $empleado['cedula']?>" class="formulas"  /> </td>
                    
                      <?php if($params['area_id']=1){?>
                  <td>
                    <select name="exp_prof" id="exp_prof" class="formulas" disabled>
                      <option value="Civil" <?php if($empleado['exp_prof'] == "Civil"){ echo "selected";}?>>Civil</option>
                      <option value="Acabados" <?php if($empleado['exp_prof'] == "Acabados"){ echo "selected";}?>>Acabados</option> 
                      <option value="Escuelas" <?php if($empleado['exp_prof'] == "Escuelas"){ echo "selected";}?>>Escuelas</option>
                      <option value="Hospitales" <?php if($empleado['exp_prof'] == "Hospitales"){ echo "selected";}?>>Hospitales</option>
                      <option value="Desarrollo Vertical" <?php if($empleado['exp_prof'] == "Desarrollo Vertical"){ echo "selected";}?>>Desarrollo Vertical</option>
                      <option value="Estructuras Metalicas" <?php if($empleado['exp_prof'] == "Estructuras Metalicas"){ echo "selected";}?>>Estructuras Metalicas</option>
                    </select>
                  </td>
                <?php }else{?>
                  <td><input type="text" name="exp_prof" id= "exp_prof" value="<?php echo $params['exp_prof']?>" /></td>
                <?php }?>
                        
                    </td>
                </tr>
                <tr>
                  <td colspan="7" align="right"><a href="index.php?ctl=editarPro&id=<?php echo $empleado['empleado_id']?>">editar</a></td>
                </tr>
            </table>
        </fieldset>  



        <fieldset style="margin-left: 10px; margin-right: 10px;">
          <legend>Datos Economicos</legend> 
          <table width="100%" border="0">    
              <tr><!--economicos-->
              	  <td class="altos">sueldo Tope(Mensual)</td>
                  <td class="altos">sueldo Deseado (Mensual)</td>
                  <td class="altos">sueldo contratado (Mensual)</td>
              </tr>    
              <tr><!--economicos-->
              	  <td><input type="text" name="su_aut" id= "su_aut" value="<?php echo "$".number_format($empleado['su_aut'],2,".",",")?>"   class="formulas" /></td>
                  <td><input type="text" name="sd" id= "sd" value="<?php echo "$".number_format($empleado['sd'],2,".",",")?>"   class="formulas" /></td>
                  <td><input type="text" name="su_neg" id= "su_neg" value="<?php echo "$".number_format($empleado['su_neg'],2,".",",")?>"   class="formulas" /></td>
                  <td colspan="7" align="right"><a href="index.php?ctl=editPrestamo&id=<?php echo $params['prestamo']['prestamo_id']?>">Agregar Prestamo</a></td>
              </tr>
              <tr><!--economicos mensuales-->
                  <td class="altos">sueldo Semanal Bruto </td>
                  <td class="altos">sueldo Semanal fiscal</td>
                  <td class="altos">sueldo Semanal efectivo neto</td>
                  <td class="altos">sueldo Actual</td>
              </tr>
              <tr>
                  <td><input type="text" name="su_sem" id= "su_sem" value="<?php echo "$".number_format($empleado['su_sem'],2,".",",")?>"   /></td>
                  <td><input type="text" name="su_sem_fiscal" id= "su_sem_fiscal" value="<?php echo "$".number_format($empleado['su_sem_fiscal'],2,".",",")?>" class="formulas"   /></td><!--add DB-->
                  <td><input type="text" name="su_sem_efectivo" id= "su_sem_efectivo" value="<?php echo "$".number_format($empleado['su_sem_efectivo'],2,".",",")?>" class="formulas"    /></td>
                  <td><input type="text" name="su_sem_efectivo" id= "su_sem_efectivo" value="<?php echo "$".number_format($empleado['su_actual'],2,".",",")?>" class="formulas"    /></td>
              </tr>
              <tr>
                    <td colspan="7" align="right"><a href="index.php?ctl=editEco&id=<?php echo $empleado['empleado_id']?>">editar</a></td>
              </tr>
              <!--fin economicos 2-->
              </table>
               </fieldset>
                <fieldset style="margin-left: 10px; margin-right: 10px;">
                    <legend>Datos Economicos deducciones</legend> 
                    <table width="100%" border="0"> 
                        
                        <tr><!-- imss e impuestos-->
                            <td width="20%" class="altos">Numero del IMSS</td>
                            <td width="20%" class="altos" >Descuento IMSS</td>
                            <td width="20%" class="altos">Retencion Infonavit</td>
                            <td width="20%" class="altos">Bonos</td>
                            <td width="20%" class="altos">Fecha De Ingreso</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="imss_num" id="imss_num" value="<?php echo $empleado['imss_num']?>" class="formulas"  readonly /></td>
                            <td><input type="text" name="imss_desc" id= "imss_desc" value="<?php echo $empleado['imss_desc']?>" class="formulas" readonly /></td>
                            <td class="bajos"><input class="personales" type="text" name="infonavit" id= "infonavit" value="<?php echo $empleado['infonavit']?>" readonly/></td>
                            <td><input type="text" name="bono" id= "bono" value="<?php echo $empleado['bono']?>" class="formulas" readonly /></td>
                            <td class="bajos"><input class="personales" type="date" name="fecha_ingreso" id="fecha_ingreso" style="height: 24px;" value="<?php echo $empleado['fecha_ingreso']?>" readonly/></td>

                        </tr><!--fin imss e impuestos-->
                      	<tr>
                              <td colspan="7" align="right"><a href="index.php?ctl=editEco&id=<?php echo $empleado['empleado_id']?>">editar</a></td>
                       	</tr>
                    
                    </table>
                </fieldset>
      <fieldset style="margin-left: 10px; margin-right: 10px;">
          <legend>Datos Nomina</legend> 
          <table width="100%" border="0"> 
              <tr>
                  <td class="altos" >Numero Cuenta Bacaria</td>
                  <td class="altos" >Clave InterBancaria</td>
                  <td class="altos"> Banco</td>
                  <td class="altos" >No. Plastico</td>
              </tr>
              <tr>
                  <td><input type="text" name="num_cta_ban" id="num_cta_ban" value="<?php echo $empleado['num_cta_ban']?>" class="formulas" readonly /></td>
                  <td><input type="text" name="cta_ban_clabe" id="cta_ban_clabe" value="<?php echo $empleado['cta_ban_clabe']?>" class="formulas"  readonly/></td>
                  <td><input type="text" name="cta_ban_id" id="cta_ban_id" value="<?php echo $empleado['cta_ban_id']?>" class="formulas" readonly />
              
                  </td>
                  <td><input type="text" name="no_banco" id="no_banco" value="<?php echo $empleado['no_banco']?>"   />
                  </td>
              </tr>
              <tr>
                    <td colspan="7" align="right"><a href="index.php?ctl=editEco&id=<?php echo $empleado['empleado_id']?>">editar</a></td>
              </tr>
              </table>
      </fieldset>
      <fieldset style="margin-left: 10px; margin-right: 10px;">
          <legend>Datos Estado</legend> 
          <table width="100%" border="0"> 
              <tr>
                  <td class="altos">Fecha De Ingreso</td>
                  <td class="altos">Estado</td>
                  <?php if($empleado['status']==0){?>
                  <td class="altos">Fecha de baja</td>
                  <?php }?>
              </tr>
              <tr>
                  <td><input type="text" name="fecha_ingreso" id="fecha_ingreso" value="<?php echo $empleado['fecha_ingreso']?>" class="formulas"  /></td>
                  <?php if($empleado['status']==1){ $estado="Activo";}else{ $estado="Inactivo";}?>
                  <td><input type="text" name="status" id="status" value="<?php echo $estado;?>" class="formulas"  /></td>
                  <?php if($empleado['status']==0){?>
                    <td><input type="text" name="fecha_baja" id="fecha_baja" value="<?php echo $empleado['fecha_baja']?>"   /></td>
                  <?php }?>
              </tr>
              <tr>
                  <td colspan="7" align="right"><a href="index.php?ctl=editOther&id=<?php echo $empleado['empleado_id']?>">editar</a></td>
              </tr>
              </table>
      </fieldset>
  
         
    
 </form>
 


 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>