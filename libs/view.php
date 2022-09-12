<?php
    /* 
       ===================================================
       Estas carpetas contienen las clases bases que 
       sirven para las nuevos controladores que creemos
       de esta manera hereadaran todas las funcionalidades
       que deben de tener todos los controladores.
       ===================================================
    */
    class View{


        function __construct()
        {

        }

        /* 
           ===================================================
           Cargado de las vistas
           ===================================================
        */

        function render($nombre_vista)
        {

            require 'views/'.$nombre_vista.'.php';

        }

    }

    
?>