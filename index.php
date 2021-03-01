<?php
	//Controlador
	require_once("controllers/factorial_controller.php");

	$controller= new factorial_controller();
    
    if(!empty($_REQUEST['a'])){
        $action=$_REQUEST['a'];
        if (method_exists($controller, $action)) {
            $controller->$action();
        }else{
            $controller->index();
        }
    }else{
        $controller->index();
    }

?>