<?php

    class User{
        // 1ra Parte: Atributos
        private $rol_code;
        private $rol_name;
        private $user_code;
        private $user_name;
        private $user_lastname;
        private $user_id;
        private $user_email;
        private $user_pass;
        private $user_state;
        //2da parte sobrecarga de constructores

        // 3da Parte: Setter y Getters
        # Código Rol
        public function setRolCode($rol_code){
            $this->rol_code = $rol_code;
        }
        public function getRolCode(){
            return $this->rol_code;
        }
        //Nombre del rol
        public function setRolName($rol_name){
            $this->rol_name = $rol_name;
        }
        public function getRolName(){
            return $this->rol_name;
        }
        //Codigo usuario

        public function setUsercode($user_code){
            $this->user_code = $user_code;
        }
        public function getUsercode(){
            return $this->user_code;
        }

        //Nombre usuario

        public function setUserName($user_name){
            $this->user_name = $user_name;
        }
        public function getUserName(){
            return $this->user_name;
        }
    }
    //4ta parte:precistencia a la base de datos
?>