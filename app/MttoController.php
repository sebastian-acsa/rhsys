<?php

 class MttoController
 {



 	
	public function inicio()//index
	{  session_start();
		if(!isset($_session['user_id'])){
	    	header('Location:  index.php?ctl=login');	
	 	}


		$m = new MttoModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		             Config::$mvc_bd_clave, Config::$mvc_bd_hostname); //coneccion al modelo

		$params = array( //parametros
		     'Mttos' => $m->dameMttos(),
		);

	 require __DIR__ . '/templates/mostrarMttos.php';
	}

	public function listar() //listar
    { 	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}

        $m = new MttosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname); //coneccion al modelo

		$params = array( //parametros
			'mttos' => $m->dameMttos(),
		);

        require __DIR__ . '/templates/mostrarMttos.php';
    }
     

    public function addMtto() //insert
	{ 	
		session_start();	
		if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
     	$m = new MttosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

     	$m2 = new AutomovilModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
     	$automoviles= $m->dameMttos();

		$params = array( //parametros que envio
			'km' => "",
			'fecha' => "",
			'automovil_id' => "",
			'automoviles' => $automoviles,
		);

        


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

             // comprobar campos formulario
			
             if ($m->validarDatos($_POST['compania'],$_POST['telefono'],$_POST['numcuenta'],$_POST['razon_social'])) {
				//usamos metodo del modelo

                 $m->insertarMtto($_POST['compania'],$_POST['telefono'],$_POST['numcuenta'],$_POST['razon_social'],$_POST['empleado_id']);
					 //header('Location:  index.php?ctl=listarAuto'); //redirect				
            } else {
                $params = array( //parametros que envio
					'km' => "",
					'fecha' => "",
					'automovil_id' => "",
					'automoviles' => $automoviles,
				);
                $params['mensaje'] = 'No se ha podido registrar el celular. Revisa el formulario';
            }
             
         }

         require __DIR__ . '/templates/Mtto/AltaMtto.php';
    }


    public function buscarPorFecha()
    { 
     	session_start();
     	if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
         $params = array(
             'fecha' => '',
             'resultado' => array(),
         );

         $m = new MttosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             $params['fecha'] = $_POST['fecha'];
             $params['resultado'] = $m->buscarEmpleadoPorNombre($_POST['fecha']);
         }

         //require __DIR__ . '/templates/Empleado/buscarPorNombre.php';
    }
	 

	public function viewMtto()
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

		$m = new MttosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$m2 = new AutomovilModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

		$automoviles = $m2->dameAutomoviles();
		$mtto= $m->dameMtto($id);
		$params = array('automoviles' => $automoviles,'Mtto' => $mtto);

		require __DIR__ . '/templates/Mtto/viewMtto.php';
	}

	public function editMtto()
	{
		session_start();
		if(isset($_SESSION['user_id'])){
	 	}
	 	else{
	 		header('Location:  index.php?ctl=login');
	 	}
		$m2 = new AutomovilModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
	                     Config::$mvc_bd_clave, Config::$mvc_bd_hostname);
		$m = new MttosModel(Config::$mvc_bd_nombre, Config::$mvc_bd_usuario,
		         Config::$mvc_bd_clave, Config::$mvc_bd_hostname);

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$m->editarMtto($_POST['id'],$_POST['compania'],$_POST['telefono'],$_POST['numcuenta'],$_POST['razon_social'],$_POST['empleado_id']);
			header('Location:  index.php?ctl=viewCel&id='.$_POST['id']);
		}
		else{
			$id = $_GET['id'];
			
			$automoviles= $m2->dameAutomoviles();

			$params = array( //parametros que envio
						'compania' => $_POST['compania'],
						'telefono' => $_POST['telefono'],
						'num_cuenta' => $_POST['numcuenta'],
						'razon_social' => $_POST['razon_social'],
						'empleado_id' => $_POST['empleado_id'],
						'automoviles' => $automoviles,
				);
		}
		require __DIR__ . '/templates/Mtto/editMtto.php';

	}

	
 }
 