<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste3</title>
</head>
<body>
    <h2>verificar asseco</h2>
    <?php 
        $idade = 18 ;
        $tem_ingresso = true;

        if($idade >= 18 && $tem_ingresso){
        echo "<p>acesso liberado</p>";
        }else{
            echo "acesso negado";
        }
    ?>
</body>
</html>