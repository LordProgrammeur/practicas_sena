<?php
require_once "models/User.php"; //aca se llama como una pegatina a landing y lo pega al frente
class Users {
    public function main(){
        $rol = new User;
        $user = new User;

        $rol->setRolCode("ABC123");
        echo "Codigo Rol: ". $rol->getRolCode(), "<hr>";
    
        $rol->setRolName("admin");
        echo "Nombre Rol: ". $rol->getRolName(), "<hr>";

        $user->setUserName("12345");
        echo "Codigo usuario: ". $user->getUserName(), "<hr>";

        $user->setUserName("Felipe");
        echo "Nombre usuario: ". $user->getUserName(), "<hr>";

        $user->setUserLastName("Rincon");
        echo "Apellido usuario: ". $user->getUserLastName(), "<hr>";

        $user->setUserId("101425263");
        echo "Id usuario: ". $user->getUserId(), "<hr>";

        $user->setUserEmail("david__91@gmail.com");
        echo "Email usuario: ". $user->getUserEmail(), "<hr>";

        $user->setUserPassword("gil202030.");
        echo "Password usuario: ". $user->getUserPassword(), "<hr>";

        $user->setUserState(True);
        echo "Estado usuario: ". $user->getUserState(), "<hr>";
    }


}
?>