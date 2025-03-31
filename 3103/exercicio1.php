    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>calculadora imc</h2>

        <form action="" method="get">
            altura: <input type="number" step="0.1" name="altura">
            peso: <input type="number" step="0.1" name="peso">
            idade: <input type="number" name="idade">
            <input type="submit" value="calcular">
        </form>

        <?php 
        $altura = $_GET["altura"]??null;
        $peso = $_GET["peso"]??null;
        $idade = $_GET["idade"]??null;

        if(!is_null($altura) && !is_null($peso) && !is_null($idade)){
            if(!empty($altura) && !empty($peso) && !empty($idade)){
                $imc = calcularImc($peso, $altura);
                echo "<br>peso: $peso";
                echo "<br>altura: $altura";
                echo "<br>idade: $idade";
                echo "<br>IMC: " . number_format($imc, 2, ',', ' ');
                echo "<br><h2>" . classificarImc($imc) . "</h2>";
            } else {
                echo "valor em branco";
            }
        } else {
            echo "insira os valores";
        }
        ?>
        <?php 
        function calcularImc(float $peso, float $altura){
            return $peso/ ($altura ** 2);
        }
        function classificarImc(float $imc){
            if($imc < 18.5) return "abaixo do peso";
            elseif($imc <25) return "peso normal";
            elseif($imc < 30) return "sobrepeso";
            else return "obeso";
        }
        ?>
    </body>
    </html>
