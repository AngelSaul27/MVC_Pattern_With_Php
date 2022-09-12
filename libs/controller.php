<?php
    /* ===================================================
       Estas carpetas contienen las clases bases que 
       sirven para las nuevos controladores que creemos
       de esta manera hereadaran todas las funcionalidades
       que deben de tener todos los controladores.
       ===================================================
    */
    class controller{


        function __construct()
        {
            /* Creamos un controllador base y posteriormente 
               retornamos una vista */
            $this->view = new View();
        }

        //Cargador de modelos para consultas de la base de datos
        function loadModel($model){
            //Establecemos la nomemclatura de los archivos models
            $URL = 'models/'.$model.'model.php';
            //Comprobamos que los archivos models existan
            if(file_exists($URL)){
                require $URL;
                $modelName = $model.'Model';
                $this->model = new $modelName(); //Llamamos al modelo
            }
        }

    }

?>