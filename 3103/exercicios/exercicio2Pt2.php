<?php 
$produto = $_POST["nome"]??null;
$preco = $_POST["preco"]??null;
$quantidade = $_POST["quantidade"]??null;
echo "<br><h2>resumo do produto</h2>";
echo "<br>produto: $produto";
echo "<br>preço (un)R$: $preco";
echo "<br>quantidade: $quantidade";
echo "<br>quantidade em estoque R$:"
?>