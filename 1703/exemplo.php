<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loja online:</title>
</head>
<body>
    <?php 
    $produtos = [
        ["nome" => "celular", "preco" => 1234.567, "cat" =>"eletronioco"],
        ["nome" =>"notebook", "preco" => 9876.543, "cat" => "pc"],
        ["nome" =>"fone", "preco" => 1234.654, "cat" => "acessorios"],
        ["nome" =>"celular", "preco" => 1245.789, "cat" => "eletronicos"]
    ];
    $somaValores = 0;
    $quantidadeProdutos = count($produtos);

    ?>

    <table style= "border: 1px solid black">
        <tr>
            <th>nome</th>
            <th>categoria</th>
            <th>valor R$</th>
        </tr>
    
    <?php 
    foreach($produtos as $item){
        $somaValores += $item["preco"];
    ?>
        <tr>
        <th><?=$item["nome"]?></th>
        <th><?=$item["cat"]?></th>
        <th><?=number_format($item["preco"],2 , ",", ".");?></th>
        </tr>
    <?php
    }
    ?>
    </table>
    <h3>total de compra: <?= number_format($somaValores, 2, ",", ".")?></h3>
    <h3>media de valores: <?= number_format($somaValores / $quantidadeProdutos, 2, ",", ".")?></h3>
</body>
<style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
</style>

</html>