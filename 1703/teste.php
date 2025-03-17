<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 3</title>
</head>
<body>
    <?php 
    $nome = "carlos";
    $idade = 19;
    $salario = 1234.56;
    $faculdade = "ads";

    echo"<p><strong>nome: </strong>$nome</p>";

    ?>
    <p><strong>idade: </strong><?= $idade?></p>
    <p><strong>salario: R$</strong><?= number_format($salario, 2, ",", ".");?></p>
    <p><strong>faculdade: </strong><?php echo $faculdade;?></p>

    <?php 
    if($idade >= 18){
            echo "<p style='color:green'>maior de idade</p>";
    }else{
        echo "<p style='color:red'>menor de idade</p>";
    }
    ?>

 
    <?php if($idade >= 18){ ?>
        <p style='color:green'>maior de idade</p>
    <?php }else{ ?>
        <p style='color:red'>menor de idade</p>
    <?php } ?>
</body>
</html>