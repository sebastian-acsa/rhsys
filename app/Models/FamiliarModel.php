<?php

	class FamiliaresModel
	{
	    protected $conexion;

	    public function __construct($dbname,$dbuser,$dbpass,$dbhost)
	    {
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

	    public function insertarFamiliar($familiar_new)
		{
		  	extract($familiar_new);
			$empleado_id= htmlspecialchars($empleado_id);
			$tipo= htmlspecialchars($tipo);
			
			
			
			$nombre= htmlspecialchars($nombre);
			$edad= htmlspecialchars($edad);
		
			$direccion= htmlspecialchars($direccion);
			
			
			
			
			$sql = "insert into familiares (empleado_id,tipo,nombre,edad,direccion )
			values('".$empleado_id."','".$tipo."','".$nombre."','".$edad."','".$direccion."')";
			
			$result = mysql_query($sql, $this->conexion) or die(mysql_error());

	 		return $result;
		}
		 
		public function editarFamiliar($id, $empleado_id,$tipo,$nombre,$edad,$direccion)
		{
		 	$tipo= htmlspecialchars($tipo);
			$nombre= htmlspecialchars($nombre);
			$edad= htmlspecialchars($edad);
			$direccion= htmlspecialchars($direccion);
			$empleado_id= htmlspecialchars($empleado_id);
			

			$sql="Update set familiares tipo=".$tipo.",nombre=".$nombre.",edad=".$edad.",direccion=".$direccion.",empleado_id=".$empleado_id." where id=".$id;
			$result = mysql_query($sql, $this->conexion) or die(mysql_error());
	        return $result;
		}

		public function dameFamiliar($id)
		{
			$id = htmlspecialchars($id);

			$sql = "select * from familiares where tel_id=".$id;

			$result = mysql_query($sql, $this->conexion);

			//$Automoviles = array();
			$row = mysql_fetch_assoc($result);

			return $row;
		}

		public function dameFamiliares() // ajustar a postgress
		{
		 $sql = "select * from familiares ";

		 $result = mysql_query($sql, $this->conexion);
		 $familiares = array();
		 if($result){
		 	while ($row = mysql_fetch_assoc($result))
		 	{
		     $familiares[] = $row;
		 	}

		 }
		 return $familiares;
		}

		//porsi las dudas
		public function dameFamiliaresActivos() // ajustar a postgress
		{
		 $sql = "select * from familiares where status=1 ";

		 $result = mysql_query($sql, $this->conexion);
		 $familiares = array();
		 if($result){
		 	while ($row = mysql_fetch_assoc($result))
		 	{
		     $familiares[] = $row;
		 	}

		 }
		 return $familiares;
		}

		//porsi las dudas
		public function dameFamiliaresInactivos() // ajustar a postgress
		{
		 $sql = "select * from familiares where status <>1 ";

		 $result = mysql_query($sql, $this->conexion);
		 $familiares = array();
		 if($result){
		 	while ($row = mysql_fetch_assoc($result))
		 	{
		     $familiares[] = $row;
		 	}

		 }
		 return $familiares;
		}

		public function buscarPorEmpleado($empleado)
		{
			$empleado = htmlspecialchars($empleado);

			$sql = "select * from familiares where empleado_id ='" . $empleado . "'";

			$result = mysql_query($sql, $this->conexion);

			$familiares = array();
			while ($row = mysql_fetch_assoc($result))
			{
			 $familiares[] = $row;
			}

			return $familiares;
		}

		public function dameEmpleados()
		{
			$sql = "select * from empleados ";

		 $result = mysql_query($sql, $this->conexion);

		 $empleados = array();
		 while ($row = mysql_fetch_assoc($result))
		 {
		     $empleados[] = $row;
		 }
		 return $empleados;
		}

		public function validarDatos($tipo,$nombre,$edad,$direccion)
		{
		 	return (is_string($tipo) &
		 		is_string($nombre) &
		         is_string($edad) &
				 is_string($direccion) 
				 );
		}
	}

 ?>