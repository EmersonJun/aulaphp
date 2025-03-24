<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php 24/03</title>
</head>
<body>
    <?php 
    //declare(scrict_types=1);
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
        //var_dump($numeros);
        for($i = 0; $i < count($numeros[$i]);$i++){
            //$soma += $numeros[$i];
        }
    }
    //somarNumeros(2, 2, 2, 2, 2, 2);
    
    function algumCoisa($nome, $numro, $texto, ...$coisas){
        var_dump($coisas);
    }
    algumCoisa("jose", 99, "oi", 1, 7, 9, "ola", true);
    tituloBonito("outras funcoes");

    function calcularIdade($nome, $ano){
        $idade = 2025 - $ano;
        echo "<p>$nome tem $idade anos</p>";
    }
    calcularIdade("pedro", 2006);

    function calcularTriangulo(){
        echo "<br> ^";
        function funcional(){
            echo "<br> ta pago";
        }
    }

    function somaCinco(&$num){// foco no &
        $num += 5;
        echo "<br> numero = $num";
    }
    $idade = 20;
    echo "idade 1 = $idade";
    somaCinco($idade);
    echo "idade 2 = $idade";

    function conta($a , $b, &$resposta){
        $resposta = $a + $b;
    }
    $resultadoSoma = 0;
    conta (0, 5, $resultadoSoma);
    echo "<br>$resultadoSoma";

    function subtracao($a, $b=5){
        $sub = $a-$b;
        echo "<br>subtracao = $sub";
    }
    subtracao(2);
    
    function divisao(float $a, float $b) : float{
        $div = $a / $b;
        return $div;
    }
    divisao("10", 10);

    ?>  
</body>
</html>