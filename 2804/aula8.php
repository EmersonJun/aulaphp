<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // $banco = new mysqli("host", "usuario", "senha", "nome-do-banco");
    // $banco = new mysqli("host", "usuario", "senha", "nome-do-banco");
    $banco = new mysqli("localhost:3307", "root", "", "usuarios");
    // $banco = new mysqli();

    var_dump($banco);
    ?>
</body>
</html>