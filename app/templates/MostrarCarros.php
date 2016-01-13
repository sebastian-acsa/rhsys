 <?php ob_start() ?>
 <div style="float:center">
 <table width="100%" style="margin-left:10px;" border="1">
     <tr><!--encabezados-->
         <th>id</th>
         <th>marca</th>
         <th>modelo</th>
         <th>color</th>
         <th>placas</th>
         <th>ID Oxxo</th>
         <th>Asignado a:</th>
     </tr>
     <?php foreach ($params['autos'] as $auto) :?>
     <tr>
        <td><a href="index.php?ctl=viewAuto&id=<?php echo $auto['automovil_id']?>"><?php echo $auto['automovil_id'] ?></a></td>
        <td><?php echo $auto['marca'] ?></td>
        <td><?php echo $auto['modelo'] ?></td>
        <td><?php echo $auto['color'] ?></td>
        <td><?php echo $auto['placas'] ?></td>
        <td><?php echo $auto['oxxo'] ?></td>
        <td>
            <?php foreach ($params['empleados'] as $empleado) :?>
                <?php if($empleado['empleado_id']==$auto['empleado_id']){ echo $empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'];}?>
            <?php endforeach; ?>
        </td>



         <!--datos a mostrar-->
     </tr>
     <?php endforeach; ?>

 </table>
 </div>


 <?php $contenido = ob_get_clean() ?>

 <?php include './app/templates/layout.php' ?>