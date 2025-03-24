<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <?php 
    $numeros = [1, 2, 5, 90, 76, 34, 7, 87, 129, 56, 11, 35, 46, 78, 99];
    $pares = [];
    $impares = [];
    $primos = [];
    $fatoriais = [];

    // Função para verificar se um número é primo
    function ehPrimo($num) {
        if ($num < 2) return false;
        for ($j = 2; $j <= sqrt($num); $j++) {
            if ($num % $j == 0) return false;
        }
        return true;
    }

    // Função para calcular o fatorial de um número
    function fatorial($num) {
        $resultado = 1;
        for ($i = $num; $i > 1; $i--) {
            $resultado *= $i;
        }
        return $resultado;
    }

    // Separação dos números
    foreach ($numeros as $num) {
        if ($num % 2 == 0) {
            $pares[] = $num;
        } else {
            $impares[] = $num;
        }

        if (ehPrimo($num)) {
            $primos[] = $num;
            $fatoriais[$num] = fatorial($num); // Armazena o fatorial do primo
        }
    }

    // Exibir resultados
    echo "<h3>Números Pares</h3>" . implode(", ", $pares);
    echo "<h3>Números Ímpares</h3>" . implode(", ", $impares);
    echo "<h3>Números Primos</h3>" . implode(", ", $primos);
    
    echo "<h3>Fatorial dos Números Primos</h3>";
    foreach ($fatoriais as $primo => $fatorial) {
        echo "$primo! = $fatorial<br>";
    }
    ?>
</body>
</html>
