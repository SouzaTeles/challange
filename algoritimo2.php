<?php
if (!defined("STDIN")) {
    define("STDIN", fopen('php://stdin', 'r'));
}

echo "Digite insira o array a ser ordenado:\n";
$input_array = trim(fgets(STDIN, 1024));
$array = str_split($input_array);
$aux = $array[0];
$arrayPar = [];
$arrayImpar = [];

function ehPar($numero){
    return $numero % 2 == 0 ? true : false;
}
function ordenaPar($arr){
    $auxi = 0;
    $ordened = true;
    for($i = 0; $i < count($arr) -1; $i++){
        if($arr[$i] > $arr[$i + 1]){
            $auxi = $arr[$i];
            $arr[$i] = $arr[$i + 1];
            $arr[$i + 1] = $auxi; 
            $ordened = false;
        }
    }
    if($ordened){
        return $arr;
    } else {
        return ordenaPar($arr);
    }
}
function ordenaImpar($arr){
    $auxi = 0;
    $ordened = true;
    for($i = 0; $i < count($arr) -1; $i++){
        if($arr[$i] < $arr[$i + 1]){
            $auxi = $arr[$i];
            $arr[$i] = $arr[$i + 1];
            $arr[$i + 1] = $auxi; 
            $ordened = false;
        }
    }
    if($ordened){
        return $arr;
    } else {
        return ordenaImpar($arr);
    }
}

// Divide o array entre pares e impares
for($i = 0; $i < count($array); $i++){
    if(ehPar($array[$i])){
        $arrayPar[] =  $array[$i];
    } else {
        $arrayImpar[] =  $array[$i];
    }
}

$ordenedArray = ordenaPar($arrayPar);
$arrayImpar = ordenaImpar($arrayImpar);
foreach($arrayImpar as $value){
    $ordenedArray[] = $value;
}
print_r($ordenedArray);