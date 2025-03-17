<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    for($i = 0; $i < 5; $i++){
        echo "<p>contador $i</p>\n";
    }
    $valor = 0;
    while($valor <= 5){
        echo "<p>while: $valor</p>";
        $valor ++;
    }
    $valor = 0;
    do{
        echo "<p>Do While: $valor</p>";
        $valor ++;
    }while($valor <= 5);

        echo "<strong><hr></strong>";
        $um_aray = [];
        $outro_aray = array();

        var_dump($um_aray);
        var_dump($outro_aray);
        echo "<br>";

        $frutas = ["Maca", "banana", "laranja", "uva"];
        var_dump($frutas);
        echo "<br>";

        print_r($frutas);
        echo "<br>";

        $numeros = [1, 2, 3, 4, 5, 5.5];
        var_dump($numeros);
        echo "<br>";

        $tudo = [1, "nome", 1.65, true, "ate", 5];
        var_dump($tudo);

        echo "<hr>";
        
        $compras = ["uva", "arroz", "manga", "mamao"];
        echo "<p>lista de compras</p>";
        for($i = 0; $i < 4;$i++){
            $fru = $frutas[$i];
            echo "<br> - item: $fru";
        } 
        foreach($frutas as $item){
            echo "<br> item: $item";
        }
        echo "<hr>";
        $pessoa = [
        "nome" => "joao", 
        "idade" => 18,
        "cidade" => "cwb"];
            var_dump($pessoa);
        echo "<pre>";
        print_r($pessoa);
        echo "</pre>";

        echo "<hr>";
        $turma = [
            ["nome" => "joao", "idade" => 18, "cidade" => "cwb"],
            ["nome" => "paulo", "idade" => 17, "cidade" => "cwb"],
            ["nome" => "joana", "idade" => 19, "cidade" => "cwb"]
        ];
        echo "<pre>";
        print_r($turma);
        echo "</pre>";
        for($i = 0; $i < 3; $i++){
            echo "<br>". $turma[$i]["nome"];
        }
        echo "<br>";
        foreach($turma as $aluno){
            echo "<h3><br>". $aluno["nome"]."</h3>";
            echo "<br>". $aluno["idade"];
            echo "<br>". $aluno["cidade"];
        }
    ?>
</body>
</html>