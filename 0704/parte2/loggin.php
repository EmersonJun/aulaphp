<h2>site muito seguro</h2>

<form action="" method="post">
usuario: <input type="text" name="usuario">
senha: <input type="password" name="senha">
<input type="submit" value="enviar">
</form>

<?php 
    session_start();
    $usuario = $_SESSION["usuario"] ?? null;
    if(!is_null($usuario)){
        header("locatio: dashboard.php");
    } 

    $usuario = $_POST["usuario"] ?? null;
    $senha = $_POST["senha"] ?? null;

    if(!is_null($usuario) && !is_null($senha)){
        
        }if($usuario === "admin" && $senha === "123"){
            echo "bem vindo";
            
            $_SESSION["usuario"] =  'usuario';
            header("locatio: dashboard.php");

    }else{
        echo "erro no loggin";
    }
?>