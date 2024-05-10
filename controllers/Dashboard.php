<?php
    class Dashboard{ //las clases tienen apertura y cierre y funcion constructora
        //public function __construct(){}// construct es una funcion que permite construir el objeto con sus cracteristicas
        public function main(){
            require_once "views/roles/admin/admin.views.php";
        }
    }
    require_once "views/roles/admin/admin.views.php"; //el landing carga la vista de index.view.php
?>