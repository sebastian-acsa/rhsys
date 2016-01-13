<?php 
      //version local de pruebas en mysql
      /*$mvc_bd_conexion = mysql_connect("localhost", "sebastian2", "");

       if (!$mvc_bd_conexion) {
           die('No ha sido posible realizar la conexión con la base de datos: ' . mysql_error());
       }
       mysql_select_db("rhsys", $mvc_bd_conexion);

       mysql_set_charset('utf8');

       $conexion = $mvc_bd_conexion;


       $sql = "select * from proyectos ";

         $result = mysql_query($sql, $conexion);

         $proyectos = array();
         while ($row = mysql_fetch_assoc($result))
         {
             $proyectos[] = $row;
         }*/
         //termina version mysql

        //traer del postgres
        //phpinfo();
        //develop
        //     $mvc_bd_hostname = "localhost";
            //  $mvc_bd_nombre   = "proyectos";
            //  $mvc_bd_usuario  = "postgres";
            //  $mvc_bd_clave    = "qwerty";
        //

        //production
            $mvc_bd_hostname_pg = "192.168.1.244";
            $mvc_bd_nombre_pg   = "proyectos";
            $mvc_bd_usuario_pg  = "postgres";
            $mvc_bd_clave_pg    = "Acsa.2014";
        //

        $dbconn = pg_connect("host=".$mvc_bd_hostname_pg." port=5432 dbname=".$mvc_bd_nombre_pg." user=".$mvc_bd_usuario_pg." password=".$mvc_bd_clave_pg);

        //$dbconn = pg_connect("host=localhost port=5432 dbname=proyectos user=postgres password=qwerty");

        $query = "SELECT num_proy, nombre_proyecto, tipo_proyecto, estatus FROM proyectos.proy where (estatus = '3' or certeza = '1' ) and status_construccion = '1' and estatus_cobranza='1' and status_gasto ='1' order by num_proy DESC  limit 8"; 

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


                //print_r($proyectos);
        echo json_encode($proyectos);




    ?>