<?php
 // web/index.php

 // carga del modelo y los controladores
 require_once __DIR__ . '/app/Config.php';
 require_once __DIR__ . '/app/Models/EmpleadoModel.php';
 require_once __DIR__ . '/app/EmpleadoController.php';
 require_once __DIR__ . '/app/FamiliarController.php';
 require_once __DIR__ . '/app/AutomovilController.php';
 require_once __DIR__ . '/app/Models/UsuarioModel.php';
 require_once __DIR__ . '/app/Models/AutomovilModel.php';
 require_once __DIR__ . '/app/Models/FamiliarModel.php';
 require_once __DIR__ . '/app/PrestamosController.php';
 require_once __DIR__ . '/app/Models/PrestamoModel.php';
 require_once __DIR__ . '/app/WelcomeController.php';
 //valido login


 // enrutamiento
 $map = array(
     'login' => array('controller' =>'WelcomeController', 'action' =>'login'),
     'logout' => array('controller' =>'WelcomeController', 'action' =>'logout'),
     'inicio' => array('controller' =>'EmpleadoController', 'action' =>'inicio'),
     'listar' => array('controller' =>'EmpleadoController', 'action' =>'listar'),
	 'activos' => array('controller' =>'EmpleadoController', 'action' =>'buscarActivos'),
     'inactivos' => array('controller' =>'EmpleadoController', 'action' =>'buscarInactivos'),
     'todos' => array('controller' =>'EmpleadoController', 'action' =>'buscarTodos'),
     'insertar1' => array('controller' =>'EmpleadoController', 'action' =>'insertar1'),
     'alta' => array('controller' =>'EmpleadoController', 'action' =>'insertar1'),
     'rellenar' => array('controller' =>'EmpleadoController', 'action' =>'rellenaDB'),
     //'buscar' => array('controller' =>'EmpleadoController', 'action' =>'buscarPorNombre'),
     'ver' => array('controller' =>'EmpleadoController', 'action' =>'ver'),
     'editarP' => array('controller' =>'EmpleadoController', 'action' =>'editPersonal'),
     'editarPro' => array('controller' =>'EmpleadoController', 'action' =>'editProfesional'),
     'editarOf' => array('controller' =>'EmpleadoController', 'action' =>'editPuesto'),
     'editEco' => array('controller' =>'EmpleadoController', 'action' =>'editEconomicos'),
     'editOther' => array('controller' =>'EmpleadoController', 'action' =>'editOther'),
     'viewHist' => array('controller' =>'EmpleadoController', 'action' =>'verCambios'),
     //Familiares
     'addFamiliar' => array('controller' =>'FamiliarController', 'action' =>'addFamiliar'),
     'editFamiliar' => array('controller' =>'FamiliarController', 'action' =>'editFamiliar'),
     'viewFamiliar' => array('controller' =>'FamiliarController', 'action' =>'viewFamiliar'),
     'listarFamiliar' => array('controller' =>'FamiliarController', 'action' =>'listar'),
     'buscarFamiliar' => array('controller' =>'FamiliarController', 'action' =>'buscarPorEmpleado'),
     'fam_select' => array('controller' =>'FamiliarController', 'action' =>'SeleccionarEmpleado'),
     //picadillo
     'pic_sup' => array('controller' =>'EmpleadoController', 'action' =>'picadillo'),
     //automovil
     'addAuto' => array('controller' =>'AutomovilController', 'action' =>'addAuto'),
     'editAuto' => array('controller' =>'AutomovilController', 'action' =>'editAuto'),
     'viewAuto' => array('controller' =>'AutomovilController', 'action' =>'viewAuto'),
     'listarAuto' => array('controller' =>'AutomovilController', 'action' =>'listar'),
     //Celular
     'addCel' => array('controller' =>'CelularController', 'action' =>'addCel'),
     'editCel' => array('controller' =>'CelularController', 'action' =>'editCel'),
     'viewCel' => array('controller' =>'CelularController', 'action' =>'viewCel'),
     'listarCel' => array('controller' =>'CelularController', 'action' =>'listar'),
     //Prestamos
     'addPrestamo' => array('controller' =>'PrestamoController', 'action' =>'addPrestamo'),
     'editPrestamo' => array('controller' =>'PrestamoController', 'action' =>'editPrestamo'),
     'viewPrestamo' => array('controller' =>'PrestamoController', 'action' =>'viewPrestamo'),
     'listarCel' => array('controller' =>'PrestamoController', 'action' =>'listar'),
     //monitores
     'monitorEmp_s' => array('controller' =>'EmpleadoController', 'action' =>'monitores_empleados_simple'),
     'monitorEmp_a' => array('controller' =>'EmpleadoController', 'action' =>'monitores_empleados_alt'),
     'monitorEmp_v' => array('controller' =>'EmpleadoController', 'action' =>'monitores_empleados_vuelo'),
     'monitorEmp_p' => array('controller' =>'EmpleadoController', 'action' =>'monitores_puesto_departamento'),
     'monitorEmp_a_s' => array('controller' =>'EmpleadoController', 'action' =>'monitores_empleados_alt_con_sueldo'),
     
 );

 // Parseo de la ruta
 if (isset($_GET['ctl'])) {
     if (isset($map[$_GET['ctl']])) {
         $ruta = $_GET['ctl'];
     } else {
         header('Status: 404 Not Found');
         echo '<html><body><h1>Error 404: No existe la ruta <i>' .
                 $_GET['ctl'] .
                 '</p></body></html>';
         exit;
     }
 } else {
     $ruta = 'inicio';
 }

 $controlador = $map[$ruta];
 // Ejecución del controlador asociado a la ruta

 if (method_exists($controlador['controller'],$controlador['action'])) {
     call_user_func(array(new $controlador['controller'], $controlador['action']));
 } else {

     header('Status: 404 Not Found');
     echo '<html><body><h1>Error 404: El controlador <i>' .
             $controlador['controller'] .
             '->' .
             $controlador['action'] .
             '</i> no existe</h1></body></html>';
 }