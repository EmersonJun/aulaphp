<?php 
    session_start();
    $usuario = $_SESSION["usuario"] ?? null;

    if(!is_null($usuario)){
        // echo "fazer loggin";
        header("location: loggin.php");
    }else{
        echo "bem vindo $usuario";
    }
?>

<form action="" method="post">
    item: <input type="text" name="item">
    <input type="submit" value="enviar">
</form>
<?php 
    $item = $_POST["item"] ?? null;
    if(!is_null($item) && !empty($item)){
        $_SESSION["compras"][] = "item";
    }

    echo "lista de compras";
    $lista = $_SESSION["compras"] ?? null;

    foreach($lista as $key => $value){
        echo "";
    }
?>