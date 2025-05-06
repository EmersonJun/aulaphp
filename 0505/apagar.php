<?php 
     

     if($_SERVER['REQUEST_METHOD'] === "GET"){
        require "banco.php";

        $idTarefa = $_GET['id']?? null;

        if(!is_null($idTarefa)){
        $sql = "DELETE FROM tarefas WHERE id='$idTarefa'";
        $resp = $banco->query($sql);
        }
     }
?>