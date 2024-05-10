<!-- index siempre llama controladores -->
<?php
require_once "controllers/Users.php"; //aca se llama como una pegatina a landing y lo pega al frente
$controller = new Users; // si no se crea el objeto no se puede usar la funcion
$controller->main(); //el main corre la fiucnion creada en landing
//Logica de programacion basada en programacion estructurada
//POO
//Aplicar la POO en un proyecto real
//Diagrama de clases
//Metodo set y get
?>