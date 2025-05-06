<?php
session_start();
$id_usuario = $_SESSION['id_usuario'] ?? null;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "banco.php";
    $tarefa = $_POST["tarefa"] ?? null;
    if(!empty($tarefa) && !is_null($id_usuario)){
        $sql = "INSERT INTO tarefas (id, id_usuario, texto) values (null, $id_usuario, '$tarefa')";
        $resp = $banco ->query($sql);
        var_dump($resp);
    } 

  }
  header("location: dashboard.php");
?>