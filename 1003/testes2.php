<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 1</title>
</head>
<body>
    <?php 
        $nome = "maria";
        $idade = 18;
        $salario = 3000;
        $salariobonito = number_format($salario, 2, ",", ".");
        echo "<p>NOME:<strong>$nome</strong></p>";
    ?>
    <p>salario: <strong><?=$salario?></strong></p>
    <p>salario Bonito: <strong><?=$salariobonito?></strong></p>
</body>
</html>