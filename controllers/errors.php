<?php
    /* Controlador de la pagina lading page */
    class Errores extends Controller{

        function __construct(){
            parent::__construct();
            $this->view->render('Errores/index'); //Cargado de la pagina o vista 
        }
    }
