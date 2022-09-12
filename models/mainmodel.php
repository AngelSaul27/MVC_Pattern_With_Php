<?php

class MainModel extends Model{


    public function __construct(){
        parent::__construct();
    }

    public function insert(){
        echo "Ejecutando modelo...";
    }

}

?>