 <?php ob_start() ?>
 <style>
.sangria{
    margin-right:10px;
    }
table{
    margin: 0 auto;
}
h2.area{
    text-align: center;
}
.centrados{
    text-align: center;
}
</style>
<h2 class="area"><strong>AREA OPERATIVA</strong></h2>
 <div style="float:center">
     <table border="1" width="900px">
         <tr><!--encabezados-->
             <th width="35%" class="centrados" style="background-color:rgba(158, 158, 158, 0.25);">&nbsp;&nbsp;&nbsp;Nombre</th>
             <th width="35%" class="centrados" style="background-color:rgba(158, 158, 158, 0.25);">&nbsp;&nbsp;&nbsp;Departamento</th>
             <th width="30%" class="centrados" style="background-color:rgba(158, 158, 158, 0.25);">&nbsp;&nbsp;&nbsp;Puesto</th>
             
         </tr>
         <?php foreach ($params['empleados_op'] as $empleado) :?>
         <tr>
            <td>&nbsp;&nbsp;&nbsp;<a href="index.php?ctl=ver&id=<?php echo $empleado['empleado_id']?>">
                     <?php echo $empleado['nombre'].$empleado['apellido_p'].$empleado['apellido_m'] ?></a></td>
            <td class="centrados">&nbsp;&nbsp;&nbsp;<?php echo $empleado['departamento_name'] ?></td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $empleado['puesto_name'] ?></td>

             <!--datos a mostrar-->
         </tr>
         <?php endforeach; ?>

     </table>
 </div>
 <p>&nbsp;</p>
 <h2 class="area"><strong>AREA ADMINISTRATIVA</strong></h2>
  <div style="float:center">
     <table border="1" width="900px">
         <tr><!--encabezados-->
             <th width="35%" class="centrados" style="background-color:rgba(158, 158, 158, 0.25);">&nbsp;&nbsp;&nbsp;Nombre</th>
             <th width="35%" class="centrados" style="background-color:rgba(158, 158, 158, 0.25);">&nbsp;&nbsp;&nbsp;Departamento</th>
             <th width="30%" class="centrados" style="background-color:rgba(158, 158, 158, 0.25);">&nbsp;&nbsp;&nbsp;Puesto</th>
             
         </tr>
         <?php foreach ($params['empleados_ad'] as $empleado) :?>
         <tr>
            <td>&nbsp;&nbsp;&nbsp;<a href="index.php?ctl=ver&id=<?php echo $empleado['empleado_id']?>">
                     <?php echo $empleado['nombre'].$empleado['apellido_p'].$empleado['apellido_m'] ?></a></td>
            <td class="centrados">&nbsp;&nbsp;&nbsp;<?php echo $empleado['departamento_name'] ?></td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $empleado['puesto_name'] ?></td>

             <!--datos a mostrar-->
         </tr>
         <?php endforeach; ?>

     </table>
 </div>


 <?php $contenido = ob_get_clean() ?>

<?php include './app/templates/layout.php' ?>