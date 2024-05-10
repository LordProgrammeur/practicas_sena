<?php
require_once "models/User.php"; //aca se llama como una pegatina a landing y lo pega al frente
class Users {
    public function main(){
        $rol = new User;
        $rol->setRolCode("ABC123");
        echo "Codigo Rol: ". $rol->getRolCode(), "<hr>";
    
        $rol->setRolName("admin");
        echo "Nombre Rol: ". $rol->getRolName(), "<hr>";

        $rol->setUserName("12345");
        echo "Codigo usuario: ". $rol->getUserName(), "<hr>";

        $rol->setUserName("Felipe");
        echo "Nombre usuario: ". $rol->getUserName(), "<hr>";
    }


}
?>