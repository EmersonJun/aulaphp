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

    echo "<pre>";
    //var_dump($banco);

        $q = "SELECT * FROM usuarios";
        $resp = $banco->query($q);
    var_dump($resp);

    $usu = $resp->fetch_object();
    print_r($usu);
    $usu = $resp->fetch_object();
    print_r($usu);

    echo "<hr>";
    $q = "SELECT * FROM usuarios WHERE usuario='jose'";
    $resp = $banco->query($q);
    var_dump($resp);

    $usu = $resp->fetch_object();
    print_r($usu);

    echo "<br>ID: ".$usu->id;
    echo "<br>USUARIO: ".$usu->usuario;
    echo "<br>NOME: ".$usu->nome;
    echo "<br>SENHA: ".$usu->senha;
    ?>
</body>
</html>