<?php
//$dbconn = pg_connect("host=192.168.1.244 port=5432 dbname=proyectos user=postgres password=Acsa.2014");
$dbconn = pg_connect("host=localhost port=5432 dbname=proyectos user=postgres password=qwerty");

$query = "SELECT num_proy, nombre_proyecto, tipo_proyecto, estatus FROM proyectos.proy where estatus in ('3','4','6')"; 

    $result = pg_query($query); 
    if (!$result) { 
        echo "Problem with query " . $query . "<br/>"; 
        echo pg_last_error(); 
        exit(); 
    }
    $proyectos=array();
    while($myrow = pg_fetch_assoc($result)) { 
         $proyectos[] = $row;    
        } 
        print_r($proyectos)



?>
