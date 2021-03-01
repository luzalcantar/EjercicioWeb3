<?php
//Llamada al modelo
require_once("models/factorial.php");

class factorial_controller{
    private $modelo;
    
    function __construct(){
        $this->modelo= new factorial_model();
    }
    function index(){
        require_once("views/header.php");
        require_once("views/index.php");
        require_once("views/footer.php");

    }
    //Realizar Operacion
    function get_datos(){
        $data['numero']=$_REQUEST['in_factorial'];

        $resultados[] = $this->modelo->factorial($data);

        require_once("views/header.php");
        require_once("views/factorial_view.php");
        require_once("views/footer.php");
    }

}

?>
