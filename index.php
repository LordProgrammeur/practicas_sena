<!-- index siempre llama controladores -->
<?php
    require_once "controllers/Landing.php"; //aca se llama como una pegatina a landing y lo pega al frente
    $controller = new Landing;// si no se crea el objeto no se puede usar la funcion
    $controller->main();//el main corre la fiucnion creada en landing
?>