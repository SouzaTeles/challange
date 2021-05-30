<?php
/*
4. Receba 6 números representando medidas a,b,c,d,e e f e relacionar quantos e quais
triângulos é possível formar usando estas medidas. Exemplo [abc], [abd] .

Referencia:
Dados três segmentos de reta distintos, se a soma das medidas de dois deles é sempre maior que a medida do terceiro, então, eles podem formar um triângulo. 
*/
if (!defined("STDIN")) {
    define("STDIN", fopen('php://stdin', 'r'));
}

echo "Insira 6 números (separados por virgula):\n";

$input_array = trim(fgets(STDIN, 1024));
$array = explode(',', $input_array);

function trianguloPossivel($l1, $l2, $l3)
{
    $possivel = true;
    $possivel = $possivel && (($l1 + $l2) > $l3) ? true : false;
    $possivel = $possivel && (($l1 + $l3) > $l2) ? true : false;
    $possivel = $possivel && (($l2 + $l3) > $l1) ? true : false;
    return $possivel;
}
if (trianguloPossivel($array[0], $array[1], $array[2])) {
    echo "Possivel";
} else {
    echo "impossivel";
}
