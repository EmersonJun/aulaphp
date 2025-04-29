<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>usuario</h1>
    <form action="" method="post">
        Usuario <input type="text" name="usuario" >
        Senha: <input type="password" name="senha">
        <input type="submit" value="enviar">
    </form>
    <?php 
    if($_SERVER['REQUEST_METHOD']==='POST'){
        echo "fazendo login";
        $user = $_POST["user"]?? null;
        $senha = $_POST["senha"]?? null;

        if(empty($user) || empty($senha)){
            echo "<br>erro, sem usuario ou senha";
        }else{
            require_once "banco.php";
            echo "<br> procurando no banco";
        }
    } else {
        echo "fazer login....";
    }
    ?>
</body>
</html>