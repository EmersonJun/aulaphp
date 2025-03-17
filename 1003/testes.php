<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula dia 10/03</title>
</head>
<body>
        <!--comentario sem php-->
    <?php 
        //comentario
        echo "<h1>hello world</h1>";
        echo"<strong>nao aguento</strong> mais echo nessa caralha<br>";
        echo "nem pense em usar print<br>";

        $nome = "Emerson";
        $idade = 18;
        $ddd = 55;

        echo "<h3>nome: $nome<br></h3>";
        echo "idade: $idade<br>";
        echo "ddd: $ddd<br>";
        var_dump($ddd);

        $num1 = 67;
        $num2 = 33;

        $soma = $num2 + $num1;
        echo "soma: $soma";
        //echo "$num1 + $num2 =" . $num1 + $num2;

        echo "<hr>";
        echo "<br>" . $num1;
        $num1 += 1;
        echo "num1";
        $num1 ++;

        $num3 = 4;
        $num4 = 9;

        $soma2 = $num3 + $num4;
        echo "$num3 + $num4 = $soma2";
    ?>
</body>
</html>