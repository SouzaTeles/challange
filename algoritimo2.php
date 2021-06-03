<?php
if (!defined("STDIN")) {
    define("STDIN", fopen('php://stdin', 'r'));
}

echo "Digite insira o array a ser ordenado: (separado por virgulas)\n";
$input_array = trim(fgets(STDIN, 1024));
$array = explode(',', $input_array);
$arrayPar = [];
$arrayImpar = [];

function ehPar($numero)
{
    return $numero % 2 == 0;
}
function ordenaCrescente($arr)
{
    $aux = 0;
    $ordened = true;
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i] > $arr[$i + 1]) {
            $aux = $arr[$i];
            $arr[$i] = $arr[$i + 1];
            $arr[$i + 1] = $aux;
            $ordened = false;
        }
    }
    if ($ordened) {
        return $arr;
    }
    return ordenaCrescente($arr);
}
function ordenaDecrescente($arr)
{
    $aux = 0;
    $ordened = true;
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i] < $arr[$i + 1]) {
            $aux = $arr[$i];
            $arr[$i] = $arr[$i + 1];
            $arr[$i + 1] = $aux;
            $ordened = false;
        }
    }
    if ($ordened) {
        return $arr;
    }
    return ordenaDecrescente($arr);
}

// Divide o array entre pares e impares
for ($i = 0; $i < count($array); $i++) {
    if (ehPar($array[$i])) {
        $arrayPar[] =  $array[$i];
    } else {
        $arrayImpar[] =  $array[$i];
    }
}

$ordenedArray = ordenaCrescente($arrayPar);
$arrayImpar = ordenaDecrescente($arrayImpar);
foreach ($arrayImpar as $value) {
    $ordenedArray[] = $value;
}
print_r($ordenedArray);
