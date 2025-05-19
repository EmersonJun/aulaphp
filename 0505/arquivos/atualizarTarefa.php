<?php

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        require "banco.php";
        
        $idTarefa = $_POST['id-tarefa'] ?? null;
        $idUsuario = $_POST['id-usuario'] ?? null;
        $texto = $_POST['texto'] ?? null;
        
        if(!is_null($idTarefa)){
            $sql = "UPDATE tarefas SET texto='$texto', 
                    id_usuario='$idUsuario' WHERE id='$idTarefa'";
            
            // UPDATE `tarefas` SET `texto` = 'prova2' WHERE `tarefas`.`id` = 7; 
            $banco->query($sql);
        }

    } 

    header("Location: dashboard.php");

?>