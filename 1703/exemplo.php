<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online</title>
</head>
<body>
    <?php 
    $produtos = [
        ["nome" => "Celular", "preco" => 1234.567, "cat" => "Eletrônicos"],
        ["nome" => "Notebook", "preco" => 9876.543, "cat" => "PC"],
        ["nome" => "Fone", "preco" => 1234.654, "cat" => "Acessórios"],
        ["nome" => "Celular", "preco" => 1245.789, "cat" => "Eletrônicos"]
    ];
    
    $somaValores = 0;
    $quantidadeProdutos = count($produtos);
    $categorias = [];
    ?>

    <table style="border: 1px solid black">
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Valor R$</th>
        </tr>
    
    <?php 
    foreach ($produtos as $item) {
        $somaValores += $item["preco"];
        
        if (!isset($categorias[$item['cat']])) {
            $categorias[$item['cat']] = 0;
        }
        $categorias[$item['cat']]++;
        ?>
        <tr>
            <td><?= $item["nome"] ?></td>
            <td><?= $item["cat"] ?></td>
            <td><?= number_format($item["preco"], 2, ",", ".") ?></td>
        </tr>
        <?php
    }
    
    // Determinar a categoria mais presente
    $categoriaMaisPresente = array_keys($categorias, max($categorias))[0];
    ?>
    </table>
    <h3>Valor do estoque: R$ <?= number_format($somaValores, 2, ",", ".") ?></h3>
    <h3>Média de valores: R$ <?= number_format($somaValores / $quantidadeProdutos, 2, ",", ".") ?></h3>
    <h3>Categoria mais presente: <?= $categoriaMaisPresente ?></h3>
</body>
<style>
    table {
        font-family: Arial, sans-serif;
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
