<?php

 class AutomovilController
 {
	public function inicio()//index
	{  session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}

        $m = new AutomovilesModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname); //coneccion al modelo

		$params = array( //parametros
			'autos' => $m->dameAutomoviles(),
		);

        require __DIR__ . '/templates/mostrarCarros.php';
	}

	public function listar() //listar
    { 	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}

        $m = new AutomovilesModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname); //coneccion al modelo
        $m2 = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
     	$empleados= $m->dameEmpleados();
		$params = array( //parametros
			'autos' => $m->dameAutomoviles(),
			'empleados' => $empleados,
		);

        require __DIR__ . '/templates/MostrarCarros.php';
    }
     

    public function addAuto() //insert
	{ 	
		session_start();	
		if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
     	$m = new AutomovilesModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

     	$m2 = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
     	$empleados= $m->dameEmpleados();

		$params = array( //parametros que envio
			'marca' => "",
			'modelo' => "",
			'ano' => "",
			'color' => "",
			'placas' => "",
			'oxxo' => "",
			'empleado_id' => "",
			'empleados' => $empleados,
		);

        


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

             // comprobar campos formulario
			
             if ($m->validarDatos($_POST['marca'],$_POST['modelo'],$_POST['ano'],$_POST['color'],$_POST['placa'])) {
				//usamos metodo del modelo

                 $m->insertarAutomovil($_POST['marca'],$_POST['modelo'],$_POST['ano'],$_POST['color'],$_POST['placa'],$_POST['oxxo'],$_POST['empleado']);
					 header('Location:  index.php?ctl=listarAuto'); //redirect				
            } else {
                $params = array( //parametros que envio
						'marca' => $_POST['marca'],
						'modelo' => $_POST['modelo'],
						'ano' => $_POST['ano'],
						'color' => $_POST['color'],
						'placas' => $_POST['placa'],
						'oxxo' => $_POST['oxxo'],
						'empleado_id' => $_POST['empleado'],
						'empleados' => $empleados,
				);
                $params['mensaje'] = 'No se ha podido registrar el Automovil. Revisa el formulario';
            }
             
         }

         require __DIR__ . '/templates/Automovil/AltaAutomovil.php';
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

         //require __DIR__ . '/templates/Empleado/buscarPorNombre.php';
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

         //require __DIR__ . '/templates/Empleado/buscarActivos.php';
    }

    public function buscarInactivos()
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
			 'empleados' => $m->dameEmpleadosInactivos(),
         );

         

         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             $params['nombre'] = $_POST['nombre'];
             $params['resultado'] = $m->buscarEmpleadoInactivo($_POST['nombre']);
         }

         //require __DIR__ . '/templates/Empleado/buscarInactivos.php';
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

        //require __DIR__ . '/templates/Empleado/buscarTodos.php';
    }

	public function viewAuto()
	{
		session_start();
		if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		echo "no tiene session";
	 		#header('Location:  index.php?ctl=login');

	 	}
		if (!isset($_GET['id'])) {
		 throw new Exception('Página no encontrada');
		}

		$id = $_GET['id'];

		$m = new AutomovilesModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$m2 = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

		$empleados = $m2->dameEmpleados();
		$automovil= $m->dameAutomovil($id);
		$params = array('empleados' => $empleados,'automovil' => $automovil);

		require __DIR__ . '/templates/Automovil/ViewAutomovil.php';
	}

	public function editAuto()
	{
		session_start();
		if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
		$m = new AutomovilesModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$m2 = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$m->editarAutomovil($_POST['id'],$_POST['marca'],$_POST['modelo'],$_POST['ano'],$_POST['color'],$_POST['placas'],$_POST['oxxo'],$_POST['empleado_id']);
			header('Location:  index.php?ctl=ver&id='.$_POST['id']);
		}
		else{
			$id = $_GET['id'];
			
			$m = new AutomovilesModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
			$m2 = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
			         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

			$empleados = $m2->dameEmpleados();
			$automovil= $m->dameAutomovil($id);
			$params = array('empleados' => $empleados,'automovil' => $automovil);
			//$params = $empleado;
		}
		require __DIR__ . '/templates/Automovil/EditAutomovil.php';
	}

	
 }
 