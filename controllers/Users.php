<?php
require_once "models/User.php"; //aca se llama como una pegatina a landing y lo pega al frente
class Users {
    public function main(){
        $rol = new User;
        $rol->setRolCode("ABC123");
        echo "Codigo Rol: ". $rol->getRolCode(), "<hr>";
        echo "Nombre Rol: ";
    }
}
?>