<?php 
//https://www.google.com/search ? q= aula+

//echo $_GET;
var_dump($_GET);

//...aula4php.php?n1=10&n2=20
//echo "<br>" . $_GET["n1"];
//var_dump($_GET["n1"]);

// $n1 = $_GET["n1"];
// $n2 = $_GET["n2"];

// $soma = $n1 + $n2;
// echo "<br>soma = $soma";

//outra forma
$n1 = isset($_GET["n1"]) ? $_GET["n1"] :0; //forma simplificada
//$n1 = $_get["n1] ?? 0;
$n2 = 0;

// if(isset($_GET["n1"])){
//     $n1 = $_GET["n1"];
// }
if(isset($_GET["n2"])){
    $n1 = $_GET["n2"];
}
$soma = $n1 + $n2;
echo "<br>soma = $soma";
?>