<?php 

require "valitador.php";
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        $tuite = $_POST['tuite'] ?? "";
        $tuite = trim($tuite);
        $erros = [];

        if(campoObrigatorio($tuite)){
            $erros['tuite'] = "Erro - campo obrigatorio";
        } elseif(limite($tuite)){
            $erros['tuite'] = "Erro - digite entre 5 e 144 caracteres";
        // } elseif(strlen($tuite) > 144){
        //     $erros['tuite'] = "Erro - mais de 144 caracteres";
        }
    } else {
        echo "oi";
    }
?>

<form method="POST">
    tuite: <input type="text" name="tuite">
    <p style="color:red;"><?= $erros['tuite'] ?? "joia"?></p>
    <input type="submit" value="enviar">
</form>


<!-- //melhore isso tudo -->