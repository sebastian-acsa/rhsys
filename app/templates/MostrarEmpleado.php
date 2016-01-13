 <?php ob_start() ?>
<!--  <div style="float:center">
     <table border="1" width="100%">
         <tr>
             <th>Nombre</th>
             <th>Departamento</th>
             <th>Puesto</th>
             
         </tr>
         <?php foreach ($params['empleados'] as $empleado) :?>
         <tr>
            <td><a href="index.php?ctl=ver&id=<?php echo $empleado['empleado_id']?>">
                     <?php echo $empleado['nombre'] ?></a></td>
            <td><?php echo $empleado['departamento_name'] ?></td>
            <td><?php echo $empleado['puesto_name'] ?></td>

             
         </tr>
         <?php endforeach; ?>

     </table>
 </div> -->


 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>