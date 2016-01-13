<?php

 class PrestamoController
 {
	public function inicio()//index
	{  session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}

        $m = new PrestamosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname); //coneccion al plazos

		$params = array( //parametros
			'prestamos' => $m->damePrestamos(),
		);

        //require __DIR__ . '/templates/mostrarCarros.php';
	}

	public function listar() //listar
    { 	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}

        $m = new PrestamosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname); //coneccion al plazos
        $m2 = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
     	$empleados= $m->dameEmpleados();
		$params = array( //parametros
			'prestamos' => $m->damePrestamos(),
			'empleados' => $empleados,
		);

        //require __DIR__ . '/templates/MostrarCarros.php';
    }
     

    public function addPrestamo() //insert
	{
		session_start();	
		if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
     	$m = new PrestamosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

     	$empleados= $m->dameEmpleadosLimpios();


		$params = array( //parametros que envio
			'saldo' => "",
			'plazos' => "",
			'plazos_max' => "",
			'empleado_id' => "",
			'empleados' => $empleados,
		);

        


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

             // comprobar campos formulario
			
             if ($m->validarDatos($_POST['saldo'],$_POST['plazos'],$_POST['plazos_max'])) {
				//usamos metodo del plazos
             	$prestamo_new=$_POST;
                 $m->insertarPrestamo($prestamo_new);
					 header('Location:  index.php?ctl=listarPrestamo'); //redirect				
            } else {
                $params = array( //parametros que envio
						'saldo' => $_POST['saldo'],
						'plazos' => $_POST['plazos'],
						'plazos_max' => $_POST['plazos_max'],
						'empleado_id' => $_POST['empleado'],
						'empleados' => $empleados,
				);
                $params['mensaje'] = 'No se ha podido registrar el Prestamo. Revisa el formulario';
            }
             
         }

         require __DIR__ . '/templates/Prestamo/AltaPrestamo.php';
    }

	public function viewPrestamo()
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

		$m = new PrestamosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$m2 = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

		$empleados = $m2->dameEmpleados();
		$prestamo= $m->damePrestamo($id);
		$params = array('empleados' => $empleados,'prestamo' => $prestamo);

		require __DIR__ . '/templates/Prestamo/ViewPrestamo.php';
	}

	public function editPrestamo()
	{
		session_start();
		if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
		$m = new PrestamosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$m2 = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$prestamo=$_POST;

			$m->editarPrestamo($prestamo);
			//echo $m->editarPrestamo($prestamo);
			header('Location:  index.php?ctl=ver&id='.$_POST['empleado_id']);
		}
		else{
			$id = $_GET['id'];
			
			$m = new PrestamosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
			$m2 = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
			         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

			$empleados = $m2->dameEmpleados();
			$prestamo= $m->damePrestamo($id);
			$params = array('empleados' => $empleados,'prestamo' => $prestamo);
			//$params = $empleado;
		}
		require __DIR__ . '/templates/Prestamo/EditPrestamo.php';
	}

	
 }
 