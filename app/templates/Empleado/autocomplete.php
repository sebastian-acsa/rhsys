<?php  
  
  $bd = new mysqli("localhost", "adminftp", "Acsa.2015", "rhsys");  
  if(mysqli_connect_errno()) return;  
  
  $empleados = array();  
  if($res = $bd->query("SELECT * FROM empleados"))  
    while($empleado = $res->fetch_assoc())  
      $empleados[] = 
         
      );  
  $bd->close();  
  echo json_encode($empleados);  
  return;  
}  
?>