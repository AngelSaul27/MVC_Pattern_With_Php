<?php
    /* Controlador de la pagina lading page */
    class Main extends Controller{

        function __construct(){
            parent::__construct();
            $this->view->render('Main/index'); //Cargado de la pagina o vista 
        }

        function registrar(){
            echo 'Ingresa al controlador y el metodo registrar<br>';
            $this->model->insert(); //Llamamos a la funcion del modelo insert
        }
        
    }

?>