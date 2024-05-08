<?php
    class Landing{ //las clases tienen apertura y cierre y fucnion constructora
        //public function __construct(){}// construct es una funcion que permite construir el objeto con sus cracteristicas
        public function main(){
            require_once "views/company/index.view.php";
        }
    }
    require_once "views/company/index.view.php"; //el landing carga la vista de index.view.php
?>