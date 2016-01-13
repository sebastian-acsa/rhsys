<?php

 class FamiliarController
 {
	public function inicio()//index
	{  session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}

        $m = new FamiliaresModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname); //coneccion al modelo

		$params = array( //parametros
			'familiar' => $m->dameFamiliares(),
		);

        require __DIR__ . '/templates/mostrarFamiliares.php';
	}

	
	public function listar() //listar
    { 	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}

        $m = new FamiliaresModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname); //coneccion al modelo

		$params = array( //parametros
			'familiar' => $m->dameFamiliares(),
		);

        //require __DIR__ . '/templates/mostrarFamiliares.php';
    }

    
    public function SeleccionarEmpleado()
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

         require __DIR__ . '/templates/Familiar/SeleccionarEmpleado.php';
    }
     

    public function addFamiliar() //insert
	{ 	
		session_start();	
		if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
     	$m = new FamiliaresModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

     	$m2 = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
     	
     	
		$params = array( //parametros que envio
			'tipo' => "",
			'nombre' => "",
			'edad' => "",
			'direccion' => "",
			'empleado_id' => "",
			
		);

        


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // comprobar campos formulario
			if(isset($_POST['empleado_k'])){
				$empleado= $m2->dameEmpleado($_POST['empleado_k']);

				$params = array( //parametros que envio
							'tipo' => "",
							'nombre' => "",
							'edad' => "",
							'direccion' => "",
							'empleado_id' => $_POST['empleado_k'],
							'empleado_nombre' => "".$empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],
							);
			}

			else{
				$empleado= $m2->dameEmpleado($_POST['empleado_id']);
				$params = array( //parametros que envio
							'tipo' => "",
							'nombre' => "",
							'edad' => "",
							'direccion' => "",
							'empleado_id' => $_POST['empleado_id'],
							'empleado_nombre' => "".$empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],
							);

	            if ($m->validarDatos($_POST['tipo'],$_POST['nombre'],$_POST['edad'],$_POST['direccion'])) {
					//usamos metodo del modelo
	            	$familiar_new=$_POST;
	                 $m->insertarFamiliar($familiar_new);
						 header('Location:  index.php?ctl=addFamiliar&id='.$_POST['empleado_id']); //redirect				
	            } else {
	            	
	                $params = array( //parametros que envio
							'tipo' => $_POST['tipo'],
							'nombre' => $_POST['nombre'],
							'edad' => $_POST['edad'],
							'direccion' => $_POST['direccion'],
							'empleado_id' => $_POST['empleado_id'],
							
					);
	                $params['mensaje'] = 'No se ha podido registrar el Familiar. Revisa el formulario';
	            }
            }
        }
        else{
        	if (isset($_GET['id'])) {
        		$empleado= $m2->dameEmpleado($_GET['id']);
        		$params = array( //parametros que envio
				'tipo' => "",
				'nombre' => "",
				'edad' => "",
				'direccion' => "",
				'empleado_id' => $_GET['id'],
				'empleado_nombre' => "".$empleado['nombre']." ".$empleado['apellido_p']." ".$empleado['apellido_m'],);			 	
			}
        	
        }

         require __DIR__ . '/templates/Familiar/AltaFamiliar.php';
    }


    public function buscarPorEmpleado()
    { 
     	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}

	 	$m2 = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

         $m = new FamiliaresModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
         $params = array(
             'empleado' => '',
             'resultado' => array(),
             'empleados' => $m2->dameEmpleadosActivos(),
             
         );
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {

         	$params = array(
             'empleado' => $_POST['empleado'],
             'resultado' => array(),
             'empleados' => $m2->dameEmpleadosActivos(),
             'familiares' => $m->buscarPorEmpleado($_POST['empleado']),
         );
            
             
             
         }

         require __DIR__ . '/templates/Familiar/buscarPorEmpleado.php';
    }
	 
	

    
    

	public function viewFamiliar()
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

		$m = new FamiliaresModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$m2 = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

		$empleados = $m2->dameEmpleados();
		$familiar= $m->dameFamiliar($id);
		$params = array('empleados' => $empleados,'familiar' => $familiar);

		require __DIR__ . '/templates/Familiar/viewFamiliar.php';
	}

	public function editFamiliar()
	{
		session_start();
		if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
		$m = new FamiliaresModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$m2 = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$m->editarFamiliar($_POST['id'], $_POST['empleado_id'],$_POST['tipo'],$_POST['nombre'],$_POST['edad'],$_POST['direccion']);
			header('Location:  index.php?ctl=viewFamiliar&id='.$_POST['id']);
		}
		else{
			$id = $_GET['id'];
			
			$m = new FamiliaresModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
			$m2 = new EmpleadosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
			         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

			$empleados = $m2->dameEmpleados();
			$familiar= $m->dameFamiliar($id);
			$params = array('empleados' => $empleados,'familiar' => $familiar);

			$params = $empleado;
		}
		require __DIR__ . '/templates/Familiar/EditFamiliar.php';

	}

	
 }
 