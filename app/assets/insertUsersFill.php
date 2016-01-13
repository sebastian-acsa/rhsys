<?php

//version local de pruebas en mysql
      

       	$m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
	                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

       	$password= $m->generateRandomString(8);
 		$user_aux3= $m->generateRandomString(2);

 		$empleados= $m->dameEmpleados();

 		foreach ($empleados as $empleado) {
	 		$user=$m->postinsertEmpleado_Mysql($empleado);

 		}
 		


    
    	//termina version mysql

?>