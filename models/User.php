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
        // 2da Parte: Sobrecarga Constructores
        public function __construct(){
            $a = func_get_args();
            $i = func_num_args();
            if (method_exists($this, $f = '__construct' . $i)) {
                call_user_func_array(array($this, $f), $a);
            }
        }

        # Constructor: Objeto 09 parámetros
        public function __construct0(){}
        

        //Constructor: objeto 9 parametros
        public function __construct9($rol_code, $rol_name, $user_code, $user_name, $user_lastname, $user_id, $user_email, $user_pass, $user_state){
            $this->rol_code = $rol_code;
            $this->rol_name = $rol_name;
            $this->user_code = $user_code;
            $this->user_name = $user_name;
            $this->user_lastname = $user_lastname;
            $this->user_id = $user_id;
            $this->user_email = $user_email;
            $this->user_pass = $user_pass;
            $this->user_state = $user_state;
            
        }
        
            
        

        // 3da Parte: Setter y Getters
        # Código Rol    //set recibe parametro
        public function setRolCode($rol_code){
            $this->rol_code = $rol_code;
        }               //get devuelve parametro
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

        //Apellido usuario

        public function setUserLastName($user_lastname){
            $this->user_lastname = $user_lastname;
        }
        public function getUserLastName(){
            return $this->user_lastname;
        }

        //Id usuario

        public function setUserId($user_id){
            $this->user_id = $user_id;
        }
        public function getUserId(){
            return $this->user_id;
        }

        //Email usuario

        public function setUserEmail($user_email){
            $this->user_email = $user_email;
        }
        public function getUserEmail(){
            return $this->user_email;
        }

        //Password usuario

        public function setUserPass($user_pass){
            $this->user_pass = $user_pass;
        }
        public function getUserPass(){
            return sha1($this->user_pass);
        }

        //Estado usuario

        public function setUserState($user_state){
            $this->user_state = $user_state;
        }
        public function getUserState(){
            return $this->user_state;
        }
    }
    //4ta parte:precistencia a la base de datos
?>