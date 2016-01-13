<?php

//version local de pruebas en mysql
		

// load library
require 'php-excel.class.php';
	
	function dameEmpleados_monitor_op_por_dep($dep) // ajustar a postgress
	{

		$mvc_bd_conexion = mysql_connect("localhost", "sebastian_rhsys", "Hum4nf0rc3");
		//$mvc_bd_conexion = mysql_connect("localhost", "sebastian2", "");
		if (!$mvc_bd_conexion) {
		   die('No ha sido posible realizar la conexión con la base de datos: '. mysql_error());
		}
		mysql_select_db("rhsys", $mvc_bd_conexion);

		mysql_set_charset('utf8');

		$conexion = $mvc_bd_conexion;
		$sql = "SELECT e . * , d.nombre departamento_name, p.nombre puesto_name FROM empleados e, departamentos d, puestos p WHERE e.departamento_id = d.departamento_id AND e.puesto = p.clave  and d.departamento_id=".$dep." order by d.orden, p.orden, e.nombre";
		$result = mysql_query($sql, $conexion);
		$empleados = array();
		if($result){
		 	while ($row = mysql_fetch_assoc($result))
		 	{
		    	$empleados[] = $row;
		 	}
		}
		return $empleados;
	}
	

// create a simple 2-dimensional array
$data = array(
        1 => array ('Nombre', 'Puesto')
        );
	
	$data[]=array('Operativos','');
	$data[]=array('','');
	$data[]=array('Diseño','');

	$diseno=dameEmpleados_monitor_op_por_dep(1);
	foreach ($diseno as $empleado){
		$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}

	$data[]=array('Presupuestos Y Concursos','');

	$presupuestos=dameEmpleados_monitor_op_por_dep(6);
	foreach ($presupuestos as $empleado){
			$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}

	$data[]=array('Planeacion de Proyectos','');
	$planeacion=dameEmpleados_monitor_op_por_dep(15);
	foreach ($planeacion as $empleado){
			$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}
	$data[]=array('Adminstracion de Proyectos','');

	$admin_proy=dameEmpleados_monitor_op_por_dep(7);
	foreach ($admin_proy as $empleado){
			$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}
	
	
	$data[]=array('Calidad y Seguridad','');
	$calidad=dameEmpleados_monitor_op_por_dep(10);
	foreach ($calidad as $empleado){
			$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}

	$data[]=array('Construccion','');
	$construccion=dameEmpleados_monitor_op_por_dep(5);
	foreach ($construccion as $empleado){
		$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}
	

	$data[]=array('Adminstrativos','');

	$data[]=array('Direccion','');
	$direccion=dameEmpleados_monitor_op_por_dep(99);
	foreach ($direccion as $empleado){
			$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}
	
	$data[]=array('Comercial','');
	$comercial=dameEmpleados_monitor_op_por_dep(4);
	foreach ($comercial as $empleado){
			$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}
	$data[]=array('Relaciones','');
	$relaciones=dameEmpleados_monitor_op_por_dep(18);
	foreach ($relaciones as $empleado){
			$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}
	$data[]=array('Finanzas','');
	$finanzas=dameEmpleados_monitor_op_por_dep(17);
	foreach ($finanzas as $empleado){
			$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}
	$data[]=array('Contabilidad','');
	$contabilidad=dameEmpleados_monitor_op_por_dep(12);
	foreach ($contabilidad as $empleado){
			$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}
	$data[]=array('Control de Cobranza','');
	$control=dameEmpleados_monitor_op_por_dep(8);
	foreach ($control as $empleado){
			$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}
	$data[]=array('Contraloria','');
	$contraloria=dameEmpleados_monitor_op_por_dep(14);
	foreach ($contraloria as $empleado){
			$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}

	$data[]=array('Abastecimiento','');
	$abastecimiento=dameEmpleados_monitor_op_por_dep(9);
	foreach ($abastecimiento as $empleado){
			$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}
	$data[]=array('RH','');
	$rh=dameEmpleados_monitor_op_por_dep(13);
	foreach ($rh as $empleado){
			$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}

	$data[]=array('Juridico','');
	$juridico=dameEmpleados_monitor_op_por_dep(16);
	foreach ($juridico as $empleado){
			$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}

	$data[]=array('Sistemas','');

	$sistemas=dameEmpleados_monitor_op_por_dep(3);
	foreach ($sistemas as $empleado){
			$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}
	
	
	$data[]=array('Limpieza','');
	$limpieza=dameEmpleados_monitor_op_por_dep(11);
	foreach ($limpieza as $empleado){
			$data[]=array($empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],$empleado['puesto_name']);
	}


// generate file (constructor parameters are optional)
$xls = new Excel_XML('UTF-8', false, 'Monitor de Empleados');
$xls->addArray($data);
$xls->generateXML('Monitor de Empleados');

?>