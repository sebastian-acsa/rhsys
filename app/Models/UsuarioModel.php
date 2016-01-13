<?php
class UsuarioModel
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

     public function login($u,$p)
			{
				$dbconn = pg_connect("host=".$mvc_bd_hostname_pg." port=5432 dbname=".$mvc_bd_nombre_pg." user=".$mvc_bd_usuario_pg." password=".$mvc_bd_clave_pg);
			  	
				
				$u= htmlspecialchars($u);
				$p= htmlspecialchars($p);				
				$sql = "select * from usuarios where usuario='".$u."' and password='".$p."'";

				$result = pg_query($query); 
	            if (!$result) { 
	                echo "Problem with query " . $query . "<br/>"; 
	                echo pg_last_error(); 
	                exit(); 
	            }
	            $proyectos=array();
	            while($row = pg_fetch_assoc($result)) { 
	                 $proyectos[] = $row;    
	            }
				
				/*
				$result = mysql_query($sql, $this->conexion) or die(mysql_error());
				$usuario = array();
				while ($row = mysql_fetch_assoc($result))
				{
				    $usuario[] = $row;
				}
				*/


				return $usuario;

         		
			  }


	 

 }
 ?>