
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 
        include_once "funcoes.php";

    if($_SERVER ["REQUEST_METHOD"] == "POST"){
     $produto = $_POST["nome"]??null;
     $preco = $_POST["preco"]??null;
     $quantidade = $_POST["quantidade"]??null;

     if(varValida($produto) && varValida($preco) && varValida($quantidade)){

        $info = calcularEstoque($produto, $preco, $quantidade);
        echo "<pre>";
        print_r($info);
        echo "</pre>";

    include_once "formacoesProduto.php";
    } else {
        echo "erro digite os valores";
        include_once "formulario.php";
    }
    } 
    ?>
    </form>
</body>
</html>