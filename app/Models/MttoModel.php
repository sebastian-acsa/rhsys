<?php

 class MttosModel
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

    public function insertarMTTO( $km,$fecha,$automovil_id)
			{
			  	
				$km= htmlspecialchars($km);
				$automovil_id= htmlspecialchars($automovil_id);
				$fecha = date('Y-m-d', strtotime(str_replace('-', '/', $fecha)));
				
				$sql = "insert into mtto_automoviles (km,automovil_id,fecha)
				values('".$km."','".$automovil_id."','".$fecha."')";
				
				$result = mysql_query($sql, $this->conexion) or die(mysql_error());

         		return $result;
			  }
	 
	public function editarMTTO($id,$km,$fecha,$automovil_id)
	{
	 	$km= htmlspecialchars($km);
		$fecha= htmlspecialchars($fecha);
		$automovil_id= htmlspecialchars($automovil_id);
		
		$sql="Update set mtto_automoviles km=".$km.",fecha=".$fecha.",automovil_id=".$automovil_id." where id=".$id;
		$result = mysql_query($sql, $this->conexion) or die(mysql_error());
        return $result;
	}


	public function dameMttos() // ajustar a postgress
	{
		$sql = "select * from mtto_automoviles ";

		$result = mysql_query($sql, $this->conexion);
		$mtto = array();
		if($result){
			while ($row = mysql_fetch_assoc($result))
			{
				$mtto[] = $row;
			}

		}
		return $mtto;
	}
	

	public function dameAutomoviles()
	{
		$sql = "select * from automoviles ";

		$result = mysql_query($sql, $this->conexion);

		$automoviles = array();
		while ($row = mysql_fetch_assoc($result))
		{
		 $automoviles[] = $row;
		}
		return $automoviles;
	}

	public function dameMtto($id)
	{
		$id = htmlspecialchars($id);

		$sql = "select * from mtto where mtto_id=".$id;

		$result = mysql_query($sql, $this->conexion);

		//$Automoviles = array();
		$row = mysql_fetch_assoc($result);

		return $row;
	}

	public function validarDatos($km)
	{
	 	return (is_string($km));
	}

 }

 ?>