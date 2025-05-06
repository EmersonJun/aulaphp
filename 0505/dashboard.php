<?php 
    require "banco.php";

    echo "<pre>";
    session_start();
    // $resp = $banco->query("SELECT * FROM tarefas");
    $idUsuario = $_SESSION['id_usuario']?? null;
    $usuario = $_SESSION['usuario']?? null;

    if(is_null($idUsuario)){
        //header("Location: login.php");
    }

    $sql = "SELECT * FROM tarefas WHERE id_usuario='$idUsuario'";
    $resp = $banco->query($sql);
    // var_dump($resp);

    // $tarefa = $resp->fetch_object();
    // print_r($tarefa);
    // $tarefa = $resp->fetch_object();
    // print_r($tarefa);
    echo "<h3>tarefas $usuario</h3>";
    while($tarefa = $resp->fetch_object()){
        echo "<br> - " . $tarefa->texto;
    }
?>

<hr>
<form action="addTarefa.php" method="post">
    nova tarefa <input type="text" name="tarefa">
    <input type="submit" value="enviar">
</form>

