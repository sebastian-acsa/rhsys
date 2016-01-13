<?php

 class PrestamosModel
 {
    protected $conexion;

    public function __construct($dbname,$dbuser,$dbpass,$dbhost){
		 //$mvc_bd_conexion = pg_connect("host=localhost dbname=rh_dm user=PHP password=php_dev")
    	//or die('No se ha podido conectar: ' . pg_last_error());
		$mvc_bd_conexion = mysql_connect($dbhost, $dbuser, $dbpass);

		if (!$mvc_bd_conexion) {
			die('No ha sido posible realizar la conexión con la base de datos: ' . mysql_error());
		}
		mysql_select_db($dbname, $mvc_bd_conexion);

		mysql_set_charset('utf8');

		$this->conexion = $mvc_bd_conexion;
    }



	public function bd_conexion() //coneccion a la base de datos
	{

	}

    public function insertarPrestamo($prestamo_new)
	{
	  	extract($prestamo_new);				
		$sql = "insert into prestamos_rh (empleado_id, saldo, plazos,plazos_max )
		values('".$empleado_id."','".$saldo."','".$plazos."','".$plazos_max."')";
		
		$result = mysql_query($sql, $this->conexion) or die(mysql_error());

 		return $result;
	}


	public function editarPrestamo($prestamo)
	{
	 	extract($prestamo);		

		$sql="Update prestamos_rh set empleado_id=".$empleado_id.",saldo=".$saldo.",plazos=".$plazos.",plazos_max=".$plazos_max." where prestamo_id=".$id;
		$result = mysql_query($sql, $this->conexion) or die(mysql_error());
        return $sql;
	}


	public function damePrestamos() // ajustar a postgress
	{
	 $sql = "select * from prestamos_rh ";

	 $result = mysql_query($sql, $this->conexion);
	 $prestamos = array();
	 if($result){
	 	while ($row = mysql_fetch_assoc($result))
	 	{
	     $prestamos[] = $row;
	 	}

	 }
	 return $prestamos;
	}
	

	public function dameEmpleadosLimpios()
	{
		$sql = "select e.* from empleados e, prestamos_rh p where p.empleado_id=e.empleado_id and saldo = 0";

	 $result = mysql_query($sql, $this->conexion);

	 $empleados = array();
	 while ($row = mysql_fetch_assoc($result))
	 {
	     $empleados[] = $row;
	 }
	 return $empleados;
	}

	public function damePrestamo($id)
	{
		$id = htmlspecialchars($id);

		$sql = "select * from prestamos_rh where prestamo_id=".$id;

		$result = mysql_query($sql, $this->conexion);

		//$Automoviles = array();
		$row = mysql_fetch_assoc($result);

		return $row;
	}
	public function damePrestamoPorEmpleado($id)
	{
		$id = htmlspecialchars($id);

		$sql = "select * from prestamos_rh where empleado_id=".$id;

		$result = mysql_query($sql, $this->conexion);

		//$Automoviles = array();
		$row = mysql_fetch_assoc($result);

		return $row;
	}

	public function validarDatos($empleado_id,$saldo,$plazos,$plazos_max)
	{
	 	return (is_numeric($empleado_id) &
	 		is_numeric($saldo) &
			is_numeric($plazos) &
			is_numeric($plazos_max) 
			);
	}

 }

 ?>