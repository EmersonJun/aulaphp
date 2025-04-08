<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //cookie
        //setcookie("idioma", "pt-BT", time() + 60);
        // setcookie("usuario", "jose", time() +120);
        // var_dump($_COOKIE);

        // echo $_COOKIE("usuario");








    //session

        session_start();
        //session_destroy();
        //$_SESSION["usuario"] = 'maria';
        $_SESSION["n1"] = 10;
        $_SESSION["n2"] = 20;
        var_dump($_SESSION);
    ?>
</body>
</html>