<?php
    /* ===================================================
       Estas carpetas contienen las clases bases que 
       sirven para las nuevos controladores que creemos
       de esta manera hereadaran todas las funcionalidades
       que deben de tener todos los controladores.
       ===================================================
    */
    class Model{


        function __construct()
        {
            $this->db = new Database();
        }

    }

?>
