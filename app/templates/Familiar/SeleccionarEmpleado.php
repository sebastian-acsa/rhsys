
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
  <script type="text/javascript">
//     $(function() {
//         var availableTags = ;
//         $("#tags").autocomplete({
//             source: availableTags,
//             autoFocus:true
//         });
//     });
   </script>


  <?php ob_start() ?>
 


 <?php if(isset($params['mensaje'])) :?>
 <b><span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
 <?php endif; ?>
 <br/>
 <form action="index.php?ctl=addFamiliar" method="POST">
 <table>
 <tr>
 <td align="right">Empleado:</td>
     <td>
        <select id="empleado_k" name="empleado_k">
          <option>Seleccione uno</option>
          <?php foreach ($params['empleados'] as $empleado) :?>
           <option value="<?php echo $empleado['empleado_id']; ?>"><?php echo $empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m']; ?></option>
           <?php endforeach; ?>
        </select> 

        <input type="submit" value="Ir">
     </td>
     <td>
         
     </td>
 </tr>
 </table>
 </form>
 <!--
 <div class="ui-widget">
  <label for="tags">Tags: </label>
  <input id="tags">
</div>
 -->
 
 <?php $contenido = ob_get_clean() ?>

 <?php include './app/templates/layout.php' ?>


 
   
            