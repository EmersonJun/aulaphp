<?php 
function varValida($var) : bool{
    return !is_null($var) && !empty($var);
}
function calcularEstoque(string $nome, float $preco, float $quantidade) {
    $total = $preco * $quantidade;
    return [
        'nome' => ucwords($nome),
        'preco' => number_format($preco, 2, ',', '.'),
        'quantidade' => $quantidade,
        'total' => number_format($total, 2, ',', '.')
    ];
}

?>