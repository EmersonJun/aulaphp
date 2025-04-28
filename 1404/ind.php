<?php 
    echo "123";
    echo '123';

    $str = "abc";
    echo $str;
    var_dump($str);

    $str[1] = 2;
    echo $str[0];
    echo $str[1];
    echo $str[2];

    echo "<hr>";
    $tam = strlen($str);
    echo $tam;

    for($i = 0; $i < $tam; $i++){
        echo "<br>";
        echo $str[$i];
    }


    echo "<br>texto teste";
    echo '<br>texto teste';

    echo "<br>outro texto \teste";
    echo '<br>outro texto \teste';

    echo "<br>";
    echo "<br>outro texto \n teste";
    echo '<br>outro texto \n teste';

    echo "<br>";
    $var = "um texto";
    echo "<br>mostrando var: $var";
    echo '<br>mostrando var: $var';

    echo "<br>";
    echo "<br>deletar c:\\usuario\teste\nicole\php";
    echo "<br>deletar c:\\usuario\\teste\nicole\php";
    echo '<br>deletar c:\\usuario\\teste\nicole\php';
    echo "<br>https://google.com./";

    echo "<hr>";
    echo "<br>this isn't";
    echo '<br>this isn\'t';

    $num = 22;
    $final = "<br> o valor de num é $num";
    $final = '<br> o valor de num é $num';
    $final = "<br> o valor de num é" .$num;
    echo "$final";

    $array = ['azul', 'amaelo', 'vermelho', 'nome' => 'maria'];
    echo "<br> a cor da bola e $array[1]";
    echo '<br> a cor da bola e' .$array[2];
    // echo"<br> meu nome é {$array['maria']}";
    // echo"<br> meu nome é " .$array['maria'];

    $a = "oi";
    $oi = "legal";
    $$a = "teste";
    echo "<br> valor de a" .$$a;


    echo "<hr>";
    //heredoc
    //nowdoc

    //MAIS ELEGANTE
    //MAS USE O HTML NORMAL, MUITO MELHOR
    $texto = <<<nomeLegal
        <div class ="container" style="">
        <p>o valor de x é: $num</p>
        </div>
    nomeLegal;

    echo "$texto";

    //nowdoc
    $outrotexto = <<<'Nome'
        <div class ="container" style="">
        <p>o valor de x é: $num</p>
        </div>
    Nome;

    echo "$outrotexto";

    echo "<hr>";
    $str = "aaabbbbccc";
    $tam = strlen($str);

    echo "<br>String ".$str;
    echo "<br>quantidade de caracteres ".$str;

    $str = "abc123";
    $pedaco = substr($str, 3, 3);
    $pedaco2 = substr($str, 1, 5);
    echo "<br> pedaco: ".$pedaco;
    echo "<br> pedaco: ".$pedaco2;

    $texto = "uM MOntE De pecOAs";
    $up = strtoupper($texto);
    $ub = strtolower($texto);
    $uc = ucfirst($texto);
    $uw = ucwords($texto);

    echo "<br> String: ".$texto;
    echo "<br> toupper: ".$up;
    echo "<br> tolower: ".$ub;
    echo "<br> ucfirst: ".$uc;
    echo "<br> ucworlds: ".$uw;

    $uc_lo = ucfirst($ub);
    $ucw_lo = ucwords($ub);
    echo "<br> ucfirst 2: ".$uc_lo;
    echo "<br> ucworlds 2: ".$ucw_lo;
?>