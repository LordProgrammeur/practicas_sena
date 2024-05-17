<?php
    require_once "models/User.php";
    class Users{
        // Controlador Principal
        public function main(){       

            // Objeto02 Usuario
            $user = new User;
            $user->setUserCode("user_123");
            echo "Código Usuario: ", $user->getUserCode(), "<hr>";
            $user->setUserName("Pepito");
            echo "Nombre Usuario: ", $user->getUserName(), "<hr>";
            $user->setUserLastName("Perez");
            echo "Apellido Usuario: ", $user->getUserLastName(), "<hr>";
            $user->setUserId(123456789);
            echo "Identificación Usuario: ", $user->getUserId(), "<hr>";
            $user->setUserEmail("pepito@perez.com");
            echo "Correo Usuario: ", $user->getUserEmail(), "<hr>";
            $user->setUserPass(12345);
            echo "Contraseña Usuario: ", $user->getUserPass(), "<hr>";
            $user->setUserState(True);
            echo "Estado Usuario: ", $user->getUserState(), "<hr>";
            echo "<hr>";

            // Objeto03 Constructor 09 Parámetros
            $userconst = new User(
                "02",
                "customer",
                "user_567",
                "Marinita",
                "García",
                "987654321",
                "marinita@garcia.com",
                sha1("12345"),
                True
            );
            print_r($userconst);
            echo "<hr>";

            // Objeto04 Constructor 02 Parámetros
            $user_login = new User("rodrigo@lara.com",md5("12345"));
            print_r($user_login);
            echo "<hr>";
        }

        // Controlador Crear Rol
        public function rolCreate(){        
            $rol = new User;        
            $rol->setRolName("customer");
            $rol->create_rol();
        }

        // Controlador Consultar Roles
        public function rolRead(){
            $roles = new User;
            $roles = $roles->read_roles();
            print_r($roles);
        }

        // Controlador Actualizar Rol
        public function rolUpdate(){
            $rolCode = 1;
            // Objeto_01. Crear el objeto a partir del registro db, según petición
            $rolId = new User;
            $rolId = $rolId->getrol_bycode($rolCode);
            print_r($rolId);

            // Objeto_02. Actualizar el usuario en la db, a partir del Objeto_01
            $rolUpdate = new User;
            $rolUpdate->setRolCode($rolCode);
            $rolUpdate->setRolName("admin");
            $rolUpdate->update_rol();
        }
        
        // Controlador Eliminar Rol
        public function rolDelete(){
            $rolCode = 2;
            $rol = new User;
            $rol->delete_rol($rolCode);
        }

        //Controlador Crear Usuario
        public function userCreate(){        
            $user = new User(3,null, "nicolas","ramos","091759085","nic_rts@gmail.com","52085705",1);        
            
            $user->create_user();
            // print_r($user);
            
        }
        
    }
?>