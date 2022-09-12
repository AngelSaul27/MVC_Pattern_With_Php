<?php
    require_once 'libs/controller.php';
    require_once 'libs/model.php';
    require_once 'libs/view.php';
    require_once 'libs/database.php';
    require_once 'controllers/errors.php';
    require_once 'config/config.php';

    class App {

        function __construct()
        {

            /*  Obtención de la URL que se esta generando. 
                Por medio del htacces y la instrucción url, obtenemos los parametros 
                que se especificando en el navegador */
            $URL = isset($_GET['url']) ? $_GET['url'] : null;

            /*  La función rtrim() elimina los espacios en blanco u otros caracteres 
                predefinidos del lado derecho de una cadena.  
                -Remueve la ultima diagonal de la cadena */
            $URL = rtrim($URL, '/');

            /*  Devuelve un array de cadenas, siendo cada una de ellas una subcadena 
                del parámetro string formado por la división según los delimitadores
                indicados en el parámetro delimiter */
            $URL = explode('/', $URL); /*var_dump($URL);*/

            /*  Cargado del main controller por defecto cuando no se envian paramtros */
            if(empty($URL[0])){
                $archivo_controller = 'controllers/main.php';
                require_once $archivo_controller;
                /* Creamos o llamamos al controlador */
                $controller = new Main(); 
                /* Llamado del modelo desde los parametros del URL */
                $controller->loadModel($URL[0]);
                return false;
            }

            /* Cargado de controladores. El URL[0] es el nombre del controlador. */
            $archivo_controller = 'controllers/' . $URL[0] . '.php';
           
            /* vaidamos primero si el archivo_controller existe */
            if (file_exists($archivo_controller)) { 
                require_once 'controllers/' . $URL[0] . '.php';
                /* Llamado del controlador */
                $controller = new $URL[0]; 
                /* Llamado del modelo desde los parametros del URL */
                $controller->loadModel($URL[0]);

                /*  Validación de la existencia de los métodos en los controladores. Desde 
                    la posicion URL[1] en adelante se hace referencia a un metodo. */
                if (isset($URL[1])) {
                    /* Tranfromación del texto (contenido) a un metodo */
                    $controller->{$URL[1]}();
                }
            } else {
                $controller = new Errores();
            }
        }
    }

    new App();

?>