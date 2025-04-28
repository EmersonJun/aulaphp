<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>usuario</h1>
    <form action="" method="get">
        Usuario <input type="text" name="user" >
        Nome: <input type="text" name="nome">
        Senha: <input type="number" name="senha">
        <input type="submit" value="enviar">
    </form>
    <?php 
    $user = $_GET["user"]?? null;
    $nome = $_GET["nome"]?? null;
    $senha = $_GET["senha"]?? null;
    ?>
</body>
</html>