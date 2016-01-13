<?php
//error_reporting(0);//no notificara errores

 class EmpleadoController
 {
 	
	public function inicio()//index
	{  session_start();
		if(!isset($_session['user_id'])){
	    	header('Location:  index.php?ctl=login');	
	 	}


		$m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		             Config::$mvc_bd_clave, Config::$mvc_bd_hostname); //coneccion al modelo

		$params = array( //parametros
		     'empleados' => $m->dameEmpleados(),
		);

	 require __DIR__ . '/templates/mostrarEmpleado.php';
	}

    public function listar() //listar
    { 	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}

         $m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname); //coneccion al modelo

         $params = array( //parametros
             'empleados' => $m->dameEmpleados(),
         );

         require __DIR__ . '/templates/MostrarEmpleado.php';
    }

    public function rellenaDB(){
    	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
    	$m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
	                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);


       	$password= $m->generateRandomString(8);
 		$user_aux3= $m->generateRandomString(2);

 		$empleados= $m->dameEmpleados_fill();
 		//print_r($empleados);
 		$cont_e=0;
 		$cont_f=0;
 		foreach ($empleados as $empleado) {
 			//print_r($empleado);
	 		if($m->postinsertEmpleado_Mysql($empleado)){
	 			$cont_e+=1;
	 			echo "exito ".$cont_e. "</br>";

	 		}
	 		else{
	 			$cont_f+=1;
	 			echo "fallo: ".$cont_f. "</br>";
	 			

	 		}


 		}

    }


    public function insertar1() //insert
	{ 	
		session_start();	
		if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
	 	

			if($_SESSION['user_id']==2 ||$_SESSION['user_id']==3 || $_SESSION['user_id']==5 ){
				     	$m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
				                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
				         $params = array( //parametros que espero
				             'nombre' => '',
				             'apellido_p' => '',
				             'apellido_m' => '',
				          	  'proyectos' => $m->dameProyectos(),
				             'sexo' => '',
				             'estado_civil' => '',
							 'nacionalidad' => '',
							 'curp' => '',
							 'rfc' => '',
							 'f_nacimiento' => '',
				             'l_nacimiento' => '',
				             'correo_personal' => '',
							 'cel_personal' => '',
							 'tel_personal' => '',
							 'dir_calle' => '',
							 'dir_colonia' => '',
							 'dir_cp' => '',
							 'dir_municipio' => '',
							 'dir_entidad' => '',
							 'pais' => '',
							 'razon_social_id' => '',
							 'area_id' => '',
							 'departamento_id' => '',
							 'puesto' => '',
							 'estudios' => '',
							 'exp_prof' => '',
							 'su_aut' => '',
							 'sd' => '',
							 'su_neg' => '',
							 'su_sem' => '',
							 'su_sem_fiscal' => '',
							 'su_sem_efectivo' => '',
							 'imss_num' => '',
							 'imss_desc' => '',
							 'infonavit' => '',
							 'isr_desc' => '',
							 'fecha_ingreso' => '',
							 'num_cta_ban' => '',
							 'cta_ban_clabe' => '',
							 'cta_ban_id' => '',
							 'no_banco' => '',
							 'bono' => '',
					         );

	         $m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
	                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

	         if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	         	$target_dir = "./web/uploads/"; //<--directorio destino
				$target_file = $target_dir .$m->generateRandomString(2). basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"])) {
				    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				    if($check !== false) {
				    //    echo "File is an image - " . $check["mime"] . ".";
				    //    $uploadOk = 1;
				    } else {
				    //    echo "File is not an image.";
				    //    $uploadOk = 0;
				    }
				}
				
				// Check if file already exists
				if (file_exists($target_file)) {
				   // echo "Sorry, file already exists.";
				   // $uploadOk = 0;
				}
				/*
				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 500000) {
				    echo "Sorry, your file is too large.";
				    $uploadOk = 0;
				}
				*/
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				   //$uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				  //  echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				       // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				    } else {
				       // echo "Sorry, there was an error uploading your file.";
				    }
				}

	             // comprobar campos formulario

				$empleado_new =$_POST;
				$empleado_new['foto']=$target_file;
	             if ($m->validarDatos1($empleado_new)){
					//usamos metodo del modelo*/
						$id=$m->insertarEmpleado($empleado_new);
						$m->postinsertEmpleado($empleado_new,$id);
						//echo $id;
						header('Location:  index.php?ctl=activos'); //redirect
	             } else {
	                 $params = array( //parametros que regreso
							 'nombre' => $_POST['nombre'],
							 'apellido_p' => $_POST['apellido_p'],
							 'apellido_m' => $_POST['apellido_m'],
							 'sexo' => $_POST['sexo'],
							 'proyectos' => $m->dameProyectos(),
							 'estado_civil' => $_POST['estado_civil'],
							 'nacionalidad' => $_POST['nacionalidad'],
							 'curp' => $_POST['curp'],
							 'rfc' => $_POST['rfc'],
							 'f_nacimiento' => $_POST['f_nacimiento'],
							 'l_nacimiento' => $_POST['l_nacimiento'],
							 'correo_personal' => $_POST['correo_personal'],
							 'cel_personal' => $_POST['cel_personal'],
							 'tel_personal' => $_POST['tel_personal'],
							 'dir_calle' => $_POST['dir_calle'],
							 'dir_colonia' => $_POST['dir_colonia'],
							 'dir_cp' => $_POST['dir_cp'],
							 'dir_municipio' => $_POST['dir_municipio'],
							 'dir_entidad' => $_POST['dir_entidad'],
							 'pais' => $_POST['pais'],
							 'razon_social_id' => $_POST['razon_social_id'],
							 'area_id' => $_POST['area_id'],
							 'departamento_id' => $_POST['departamento_id'],
							 'puesto' => $_POST['puesto'],
							 'estudios' => $_POST['estudios'],
							 'exp_prof' => $_POST['exp_prof'],
							 'su_aut' => $_POST['su_aut'],
							 'sd' => $_POST['sd'],
							 'su_neg' => $_POST['su_neg'],
							 'su_sem' => $_POST['su_sem'],
							 'su_sem_fiscal' => $_POST['su_sem_fiscal'],
							 'su_sem_efectivo' => $_POST['su_sem_efectivo'],
							 'imss_num' => $_POST['imss_num'],
							 'imss_desc' => $_POST['imss_desc'],
							 'infonavit' => $_POST['infonavit'],
							 'bono' => $_POST['bono'],
							 'fecha_ingreso' => $_POST['fecha_ingreso'],
							 'num_cta_ban' => $_POST['num_cta_ban'],
							 'cta_ban_clabe' => $_POST['cta_ban_clabe'],
							 'cta_ban_id' => $_POST['cta_ban_id'],
							 'no_banco' => $_POST['no_banco'],
							 'mensaje' => 'No se ha podido insertar el Empleado. Revisa el formulario',
							);
	                 //$params['mensaje'] = 'No se ha podido insertar el Empleado. Revisa el formulario';
	             }
	             
	             
	         }

	         require __DIR__ . '/templates/Empleado/formInsertar.php';
     	}
     	else{
     		header('Location:  index.php?ctl=listar');
     	}
    }


	public function buscarPorNombre()
	{ 
     	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
         $params = array(
             'nombre' => '',
             'resultado' => array(),
         );

         $m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             $params['nombre'] = $_POST['nombre'];
             $params['resultado'] = $m->buscarEmpleadoPorNombre($_POST['nombre']);
         }

         require __DIR__ . '/templates/Empleado/buscarPorNombre.php';
    }
	 
	public function buscarActivos()
    {
     	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
		$m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
        $params = array(
             'nombre' => '',
             'resultado' => array(),
			 'empleados' => $m->dameEmpleadosActivos(),
        );

         

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		 $params['nombre'] = $_POST['nombre'];
		 $params['resultado'] = $m->buscarEmpleadoActivo($_POST['nombre']);

		}

         require __DIR__ . '/templates/Empleado/buscarActivos.php';
    }
    public function buscarInactivos(){
     	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
		 $m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
         $params = array(
             'nombre' => '',
             'resultado' => array(),
			 'empleados' => $m->dameEmpleadosInactivos(),
         );

         

         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             $params['nombre'] = $_POST['nombre'];
             $params['resultado'] = $m->buscarEmpleadoInactivo($_POST['nombre']);
         }

         require __DIR__ . '/templates/Empleado/buscarInactivos.php';
    }
    public function buscarTodos()
    {
     	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
		 $m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
         $params = array(
             'nombre' => '',
             'resultado' => array(),
			 'empleados' => $m->dameEmpleados(),
         );

         

         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             $params['nombre'] = $_POST['nombre'];
             $params['resultado'] = $m->buscarEmpleadoActivo($_POST['nombre']);
         }

         require __DIR__ . '/templates/Empleado/buscarTodos.php';
    }

	public function ver()
	{
		session_start();
		if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		//echo "no tiene session";
	 		header('Location:  index.php?ctl=login');
	 	}
		$id;
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		 
		 $id=$_POST['id'];
		 $_GET['id'] = $id;

		}
		else{
			if (!isset($_GET['id'])) {
			 	//throw new Exception('Página no encontrada');
			 	header('Location:  index.php?ctl=activos');
			}
			$id = $_GET['id'];
		}
		$m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$m2 = new PrestamosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

		$empleado = $m->dameEmpleado($id);
		$proyectos= $m->getProyecto($id);
		$puesto= $m->getPuesto($id);
		$departamento= $m->getDepartamento($id);
		$prestamo= $m2->damePrestamoPorEmpleado($id);
		$params = array('empleado' => $empleado,'proyectos'=> $proyectos, 'puesto'=>$puesto,'departamento'=> $departamento,'prestamo'=>$prestamo);

		require __DIR__ . '/templates/Empleado/VerEmpleado.php';
	}

	public function editPersonal()
	{
		session_start();
		if(isset($_SESSION['user_id'])){

		}
		else{
			header('Location:  index.php?ctl=login');
		}
	 	

		if($_SESSION['user_id']==2 ||$_SESSION['user_id']==3 || $_SESSION['user_id']==5  ){
	 		$m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
	                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$target_dir = "./web/uploads/"; //<--directorio destino
				$target_file = $target_dir .$m->generateRandomString(2). basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"])) {
				    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				    if($check !== false) {
				    echo "File is an image - " . $check["mime"] . ".";
				    //    $uploadOk = 1;
				    } else {
				    echo "File is not an image.";
				    //    $uploadOk = 0;
				    }
				}
				
				// Check if file already exists
				if (file_exists($target_file)) {
				   echo "Sorry, file already exists.";
				   $uploadOk = 0;
				}
				/*
				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 500000) {
				    echo "Sorry, your file is too large.";
				    $uploadOk = 0;
				}
				*/
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				   $uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				    echo "Sorry, your file was not uploaded.";
					//if everything is ok, try to upload file
				} else {
				    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				    } else {
				        echo "Sorry, there was an error uploading your file.";
				    }
				}

				$empleado_new =$_POST;
				$empleado_new['foto']=$target_file;

				$m->editarPersonales($empleado_new);
				//header('Location:  index.php?ctl=ver&id='.$_POST['id']);
			}
			else{
				$id = $_GET['id'];
				
				$empleado = $m->dameEmpleado($id);

				$params = $empleado;
			}
			require __DIR__ . '/templates/Empleado/EditEmpleadoPersonal.php';

	 	}
	 	else{
	 		header('Location:  index.php?ctl=listar');
	 	}
		
	}
	public function editOther()
	{
		session_start();
		if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
	 	

		if($_SESSION['user_id']==2 ||$_SESSION['user_id']==3 || $_SESSION['user_id']==5){
			$m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$empleado_edit =$_POST;
				$m->editarOther($empleado_edit);
				header('Location:  index.php?ctl=ver&id='.$_POST['id']);
			}
			else{
				$id = $_GET['id'];
				
				$empleado = $m->dameEmpleado($id);

				$params = $empleado;
			}
			require __DIR__ . '/templates/Empleado/EditEmpleadoOtros.php';
		}
		else{
			header('Location:  index.php?ctl=listar');
		}
	}

	public function editProfesional()
	{
		session_start();
		if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
		

			if($_SESSION['user_id']==2 ||$_SESSION['user_id']==3 || $_SESSION['user_id']==5){
			$m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
	                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
			

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$m->editarProfesionales($_POST['id'],$_POST['cedula'],$_POST['estudios'],$_POST['exp_prof']);
				header('Location:  index.php?ctl=ver&id='.$_POST['id']);


			}
			else{
				$id = $_GET['id'];
				$empleado = $m->dameEmpleado($id);

				$params = $empleado;

			}
			require __DIR__ . '/templates/Empleado/EditEmpleadoProfesionales.php';
		}
		else{
			header('Location:  index.php?ctl=listar');
		}

	}
	public function editPuesto()
	{
		session_start();
		if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
		

			if($_SESSION['user_id']==2 ||$_SESSION['user_id']==3 || $_SESSION['user_id']==5){
			$m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
	                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
			

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$m->editarPuesto($_POST['id'],$_POST['puesto'],$_POST['proyecto_tipo'],$_POST['area_id'],$_POST['departamento_id'],$_POST['razon_social_id']);
				header('Location:  index.php?ctl=ver&id='.$_POST['id']);
			}
			else{
				$id = $_GET['id'];
				$empleado = $m->dameEmpleado($id);
				$params = $empleado;
			}
			require __DIR__ . '/templates/Empleado/EditEmpleadoPuesto.php';
		}
		else{
			header('Location:  index.php?ctl=listar');
		}
	}
	public function editEconomicos()
	{
		session_start();
		if(isset($_SESSION['user_id'])){}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
		
		if($_SESSION['user_id']==2 ||$_SESSION['user_id']==3 || $_SESSION['user_id']==5){
			$m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
	                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$empleado=$_POST;
				$m->editarEconomicos($empleado);
				//echo $_POST['id'].",".$_POST['su_sem'].",".$_POST['su_sem_efectivo'].",".$_POST['su_sem_fiscal'].",".$_POST['imss_num'].",".$_POST['imss_desc'].",".$_POST['isr_desc'].",".$_POST['num_cta_ban'].",". $_POST['cta_ban_clabe'].",".$_POST['cta_ban_id'].",".$_POST['no_banco'].",".$_POST['su_actual'];
				header('Location:  index.php?ctl=ver&id='.$_POST['id']);
			}else{
				$id = $_GET['id'];
				$empleado = $m->dameEmpleado($id);
				$params = $empleado;
			}
			require __DIR__ . '/templates/Empleado/EditEmpleadoEconomico.php';
		}
		else{
			header('Location:  index.php?ctl=listar');
		}

	}
	public function verCambios(){
		session_start();
		if(isset($_SESSION['user_id'])){}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}

		$m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		
		$empleados= $m->dameEmpleados();
		$tipo="Economico";

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$id= $_POST['id'];
			$tipo = $_POST['tipo'];
			$cambios=$m->dameCambios($id,$tipo);
			$params = array('empleados' => $empleados,'cambios'=> $cambios,'tipo'=>$tipo);
			//$params = $cambios;

		}
		else{
			$params = array('empleados' => $empleados,'tipo'=>$tipo);
		}
		require __DIR__ . '/templates/Empleado/VerEmpleadoCambios.php';
	}

	//picadillo
	public function picadillo()
	{
		session_start();
		if(isset($_SESSION['user_id'])){}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
		//desarrollo
         //   $mvc_bd_hostname_pg = "localhost";
         //   $mvc_bd_nombre_pg   = "proyectos";
         //   $mvc_bd_usuario_pg  = "postgres";
         //   $mvc_bd_clave_pg    = "qwerty";
        //
        //production
            $mvc_bd_hostname_pg = "192.168.1.244";
            $mvc_bd_nombre_pg   = "proyectos";
            $mvc_bd_usuario_pg  = "postgres";
            $mvc_bd_clave_pg    = "Acsa.2014";
        //

        $dbconn = pg_connect("host=".$mvc_bd_hostname_pg." port=5432 dbname=".$mvc_bd_nombre_pg." user=".$mvc_bd_usuario_pg." password=".$mvc_bd_clave_pg);

		//pedir supervisores de pg
		$supervisores=array();
		$supervisores_sql="select distinct(residente) from proyectos.residente_admin where num_proy in (SELECT num_proy FROM proyectos.proy where (estatus = '3' or certeza = '1' ) and status_construccion = '1' and estatus_cobranza='1' and status_gasto ='1' order by num_proy DESC)";
		$result2 = pg_query($supervisores_sql); 
            if (!$result2) { 
                echo "Problem with query " . $supervisores_sql . "<br/>"; 
                echo pg_last_error(); 
                exit(); 
            }
            
            while($row = pg_fetch_assoc($result2)) { 
                $supervisores[] = $row;    
            }
		//sacar proyectos de supervisores de pg
        $proyectos_sql="SELECT nombre_proyecto projecto, num_proy FROM proyectos.proy where (estatus = '3' or certeza = '1' ) and status_construccion = '1' and estatus_cobranza='1' and status_gasto ='1' order by num_proy DESC";
		//$proyectos_sql="select nombre_proyecto projecto, num_proy  from proyectos.proy where num_proy in (select distinct(proyectos.residente_admin.num_proy) from proyectos.residente_admin where num_proy in (SELECT num_proy FROM proyectos.proy where (estatus = '3' or certeza = '1' ) and status_construccion = '1' and estatus_cobranza='1' and status_gasto ='1' order by num_proy DESC))";
		$result = pg_query($proyectos_sql); 
            if (!$result) { 
                echo "Problem with query " . $proyectos_sql . "<br/>"; 
                echo pg_last_error(); 
                exit(); 
            }
            $proyectos=array();
            while($row = pg_fetch_assoc($result)) { 
            	$proyectos[] = $row;    
            }

             $res_opt=array();
            $res_opt_sql="select distinct(admin) from proyectos.residente_operativo where num_proy in (SELECT num_proy FROM proyectos.proy where (estatus = '3' or certeza = '1' ) and status_construccion = '1' and estatus_cobranza='1' and status_gasto ='1' order by num_proy DESC)";
		//$proyectos_sql="select nombre_proyecto projecto, num_proy  from proyectos.proy where num_proy in (select distinct(proyectos.residente_admin.num_proy) from proyectos.residente_admin where num_proy in (SELECT num_proy FROM proyectos.proy where (estatus = '3' or certeza = '1' ) and status_construccion = '1' and estatus_cobranza='1' and status_gasto ='1' order by num_proy DESC))";
		$result3 = pg_query($res_opt_sql); 
            if (!$result3) { 
                echo "Problem with query " . $res_opt_sql . "<br/>"; 
                echo pg_last_error(); 
                exit(); 
            }
            
            while($row = pg_fetch_assoc($result3)) { 
            	$res_opt[] = $row;    
            }

            

            $params = array( //parametros
            	'supervisores' => $supervisores,
            	'proyectos' => $proyectos,
            	'adminstradores' =>$res_opt,

         	);
        require __DIR__ . '/templates/Empleado/Picadillo_supervisores.php';

	}

	//monitores
	public function monitores_empleados_simple() //monitor basico
    { 	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:index.php?ctl=login');
	 	}
         $m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname); //coneccion al modelo
         $params = array( //parametros
             'empleados_op' => $m->dameEmpleados_monitor_op(),
             'empleados_ad' => $m->dameEmpleados_monitor_ad(),
         );
         require __DIR__ . '/templates/Monitores/empleados_simple.php';
    }
    public function monitores_puesto_departamento() //monitor basico
    { 	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:index.php?ctl=login');
	 	}
         $m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname); //coneccion al modelo
         $params = array( //parametros
            'departamentos'=>$m->dameDepartamentos(),

            'diseno'=>$m->damePuestos_monitor_ad_por_dep(1),
			'construccion'=>$m->damePuestos_monitor_ad_por_dep(5),
			'presupuestos'=>$m->damePuestos_monitor_ad_por_dep(6),
			'admin_proy'=>$m->damePuestos_monitor_ad_por_dep(7),
			'calidad'=>$m->damePuestos_monitor_ad_por_dep(10),
			'planeacion'=>$m->damePuestos_monitor_ad_por_dep(15),

			'sistemas'=>$m->damePuestos_monitor_ad_por_dep(3),
			'comercial'=>$m->damePuestos_monitor_ad_por_dep(4),
			'control'=>$m->damePuestos_monitor_ad_por_dep(8),
			'abastecimiento'=>$m->damePuestos_monitor_ad_por_dep(9),
			'limpieza'=>$m->damePuestos_monitor_ad_por_dep(11),
			'contabilidad'=>$m->damePuestos_monitor_ad_por_dep(12),
			'rh'=>$m->damePuestos_monitor_ad_por_dep(13),
			'contraloria'=>$m->damePuestos_monitor_ad_por_dep(14),
			'juridico'=>$m->damePuestos_monitor_ad_por_dep(16),
			'finanzas'=>$m->damePuestos_monitor_ad_por_dep(17),
			'relaciones'=>$m->damePuestos_monitor_ad_por_dep(18),
			'direccion'=>$m->damePuestos_monitor_ad_por_dep(99),
         );
         require __DIR__ . '/templates/Monitores/puesto_deparamento_sin_nombre.php';
    }
    public function monitores_empleados_vuelo() //monitor basico
    { 	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:index.php?ctl=login');
	 	}
         $m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname); //coneccion al modelo
         $params = array( //parametros
             'empleados_op' => $m->dameEmpleados_monitor_op(),
             'empleados_ad' => $m->dameEmpleados_monitor_ad(),
         );
         require __DIR__ . '/templates/Monitores/empleados_vuelos.php';
    }

    public function monitores_empleados_alt() //monitor basico
    { 	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:index.php?ctl=login');
	 	}
         $m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname); //coneccion al modelo
         
         $params = array( //parametros

         	'departamentos'=>$m->dameDepartamentos(),

            'diseno'=>$m->dameEmpleados_monitor_op_por_dep(1),
			'construccion'=>$m->dameEmpleados_monitor_op_por_dep(5),
			'presupuestos'=>$m->dameEmpleados_monitor_op_por_dep(6),
			'admin_proy'=>$m->dameEmpleados_monitor_op_por_dep(7),
			'calidad'=>$m->dameEmpleados_monitor_op_por_dep(10),
			'planeacion'=>$m->dameEmpleados_monitor_op_por_dep(15),

			'sistemas'=>$m->dameEmpleados_monitor_op_por_dep(3),
			'comercial'=>$m->dameEmpleados_monitor_op_por_dep(4),
			'control'=>$m->dameEmpleados_monitor_op_por_dep(8),
			'abastecimiento'=>$m->dameEmpleados_monitor_op_por_dep(9),
			'limpieza'=>$m->dameEmpleados_monitor_op_por_dep(11),
			'contabilidad'=>$m->dameEmpleados_monitor_op_por_dep(12),
			'rh'=>$m->dameEmpleados_monitor_op_por_dep(13),
			'contraloria'=>$m->dameEmpleados_monitor_op_por_dep(14),
			'juridico'=>$m->dameEmpleados_monitor_op_por_dep(16),
			'finanzas'=>$m->dameEmpleados_monitor_op_por_dep(17),
			'relaciones'=>$m->dameEmpleados_monitor_op_por_dep(18),
			'direccion'=>$m->dameEmpleados_monitor_op_por_dep(99),
         );
         require __DIR__ . '/templates/Monitores/empleados_alternativo.php';
    }
    public function monitores_empleados_alt_con_sueldo() //monitor basico
    { 	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:index.php?ctl=login');
	 	}
         $m = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname); //coneccion al modelo
         
         $params = array( //parametros

         	'departamentos'=>$m->dameDepartamentos(),

            'diseno'=>$m->dameEmpleados_monitor_op_por_dep(1),
			'construccion'=>$m->dameEmpleados_monitor_op_por_dep(5),
			'presupuestos'=>$m->dameEmpleados_monitor_op_por_dep(6),
			'admin_proy'=>$m->dameEmpleados_monitor_op_por_dep(7),
			'calidad'=>$m->dameEmpleados_monitor_op_por_dep(10),
			'planeacion'=>$m->dameEmpleados_monitor_op_por_dep(15),

			'sistemas'=>$m->dameEmpleados_monitor_op_por_dep(3),
			'comercial'=>$m->dameEmpleados_monitor_op_por_dep(4),
			'control'=>$m->dameEmpleados_monitor_op_por_dep(8),
			'abastecimiento'=>$m->dameEmpleados_monitor_op_por_dep(9),
			'limpieza'=>$m->dameEmpleados_monitor_op_por_dep(11),
			'contabilidad'=>$m->dameEmpleados_monitor_op_por_dep(12),
			'rh'=>$m->dameEmpleados_monitor_op_por_dep(13),
			'contraloria'=>$m->dameEmpleados_monitor_op_por_dep(14),
			'juridico'=>$m->dameEmpleados_monitor_op_por_dep(16),
			'finanzas'=>$m->dameEmpleados_monitor_op_por_dep(17),
			'relaciones'=>$m->dameEmpleados_monitor_op_por_dep(18),
			'direccion'=>$m->dameEmpleados_monitor_op_por_dep(99),
         );
         require __DIR__ . '/templates/Monitores/empleados_alternativo_con_sueldo.php';
    }

    /*public function addFoto()
    {
    	session_start();
		if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}

    	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	    	$target_dir = "uploads/"; //<--directorio destino
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			    if($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			
			// Check if file already exists
			if (file_exists($target_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}
		}
    }*/
 }
 