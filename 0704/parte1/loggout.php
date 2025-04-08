<?php 
    session_start();
    $_SESSION["usuario"] = null; //altera
    unset($_SESSION["usuario"]); //apaga
    session_destroy();
?>