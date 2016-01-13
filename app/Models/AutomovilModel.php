<?php

 class AutomovilesModel
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

     public function insertarAutomovil( $marca,$modelo,$ano,$color,$placas,$oxxo,$empleado_id)
			{
			  	
				$marca= htmlspecialchars($marca);
				$modelo= htmlspecialchars($modelo);
				$ano = date('Y-m-d', strtotime(str_replace('-', '/', $ano)));
				
				
				$color= htmlspecialchars($color);
				$placas= htmlspecialchars($placas);
				$oxxo= htmlspecialchars($oxxo);
				$empleado_id= htmlspecialchars($empleado_id);
				
				
				
				
				$sql = "insert into automoviles (marca,modelo,ano,color,placas,oxxo,empleado_id )
				values('".$marca."','".$modelo."','".$ano."','".$color."','".$placas."','".$oxxo."','".$empleado_id."')";
				
				$result = mysql_query($sql, $this->conexion) or die(mysql_error());

         		return $result;
			  }


	 

	
	 
	public function editarAutomovil($id,$marca,$modelo,$ano,$color,$placas,$oxxo,$empleado_id)
	{
	 	$marca= htmlspecialchars($marca);
		$modelo= htmlspecialchars($modelo);
		$ano= htmlspecialchars($ano);
		$color= htmlspecialchars($color);
		$placas= htmlspecialchars($placas);
		$oxxo= htmlspecialchars($oxxo);
		$empleado_id= htmlspecialchars($empleado_id);
		

		$sql="Update set automoviles marca=".$marca.",modelo=".$modelo.",ano=".$ano.",color=".$color.",placas=".$placas.",oxxo=".$oxxo.",empleado_id=".$empleado_id." where id=".$id;
		$result = mysql_query($sql, $this->conexion) or die(mysql_error());
        return $result;
	}


	public function dameAutomoviles() // ajustar a postgress
	{
	 $sql = "select * from automoviles ";

	 $result = mysql_query($sql, $this->conexion);
	 $automoviles = array();
	 if($result){
	 	while ($row = mysql_fetch_assoc($result))
	 	{
	     $automoviles[] = $row;
	 	}

	 }
	 return $automoviles;
	}
	//porsi las dudas
	public function dameAutomovilesActivos() // ajustar a postgress
	{
	 $sql = "select * from automoviles where status=1 ";

	 $result = mysql_query($sql, $this->conexion);
	 $automoviles = array();
	 if($result){
	 	while ($row = mysql_fetch_assoc($result))
	 	{
	     $automoviles[] = $row;
	 	}

	 }
	 return $automoviles;
	}
	//porsi las dudas
	public function dameAutomovilesInactivos() // ajustar a postgress
	{
	 $sql = "select * from automoviles where status <>1 ";

	 $result = mysql_query($sql, $this->conexion);
	 $automoviles = array();
	 if($result){
	 	while ($row = mysql_fetch_assoc($result))
	 	{
	     $automoviles[] = $row;
	 	}

	 }
	 return $automoviles;
	}

	public function buscarAutomovilesPorPlaca($placa)
	{
	 $placa = htmlspecialchars($placa);

	 $sql = "select * from automoviles where nombre like '" . $placa . "'desc";

	 $result = mysql_query($sql, $this->conexion);

	 $automoviles = array();
	 while ($row = mysql_fetch_assoc($result))
	 {
	     $automoviles[] = $row;
	 }

	 return $automoviles;
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

	public function dameAutomovil($id)
	{
	 $id = htmlspecialchars($id);

	 $sql = "select * from automoviles where automovil_id=".$id;

	 $result = mysql_query($sql, $this->conexion);

	 //$Automoviles = array();
	 $row = mysql_fetch_assoc($result);

	 return $row;

	}






	public function validarDatos($marca,$modelo,$color,$placa)
	{
	 	return (is_string($marca) &
	 		is_string($modelo) &
	         is_string($color) &
			 is_string($placa) 
			 );
	}

 }

 ?>