<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php 24/03</title>
</head>
<body>
    <?php 
    function titulo(){
    echo "<h2>titulo 2</h2>";
    }
    titulo();
    function criarTitulo($texto){
        echo "<h2>$texto</h2>";
    }
    criarTitulo("aula4");
    criarTitulo("blabla");

    function tituloBonito($texto){
        echo "<h2>##############################</h2>";
        echo "<h2>##$texto##</h2>";
        echo "<h2>##############################</h2>";
    }
    tituloBonito("aura");
    tituloBonito("jarvis");

    function calcularMeddia($nome, $n1, $n2){
        $media = ($n1 + $n2) / 2;
        if($media >=6){
            echo "<p>aluno $nome passou com media: $media</p>";
        }else{
            echo "<p>aluno $nome reprovou com media: $media</p>";
        }
    }
    calcularMeddia("joao", 6, 9);

    function somar($a, $b){
        $soma = $a + $b;
        echo "<li><p>$a + $b = $soma</p></li>";
    }
    echo "lista de somas";
    somar(2, 3);
    somar(9, 9);
    somar(34, 26);

    function somarNumeros(...$numeros){
        var_dump($numeros);
    }
    somarNumeros(2, 2, 2, 2, 2, 2);

    
    ?>
</body>
</html>