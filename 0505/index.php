<?php 
    $pagina = $_GET['pagina']?? null;
    var_dump($pagina);

    require "controller/homeController.php";
    require "controller/TarefasController.php";

    if($pagina == 'login'){
        homeController::login();
    }
    else if($pagina == 'dashboard'){
       TarefasController::index();
    }
    else{
        homeController::index();
    }
?>