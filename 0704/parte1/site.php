<?php 
    session_start();
    var_dump($_SESSION);

    $usuario = $_SESSION["usuario"] ?? null;
    if(is_null($usuario)){
        echo "bem vindo";
    }else{
        echo "erro-sem usuario";
    }
?>