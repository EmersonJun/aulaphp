<?php 
    function campoObrigatorio(string $valor) : bool{
        return is_null($valor) || empty(trim($valor));
    }



    function limite($valor) : bool{
        $tam = strlen($valor);
        return($tam < 5 || $tam > 144);
    }
?>