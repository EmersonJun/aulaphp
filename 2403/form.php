<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <h1>formulariio get</h1>
    <form action="" method="get">
        Numero 1: <input type="number" name = "n1">
        Numero 2: <input type="number" name = "n2"><!-- google usa 1 -->
        <button type="submit">enviar</button>
    </form>
    <?php 
    $n1 = $_GET["n1"] ?? 0;
    $n2 = $_GET["n2"] ?? 0;

    $soma = $n1 + $n2;
    echo "<br> $n1 + $n2 = $soma";
    ?>
</body>
</html>