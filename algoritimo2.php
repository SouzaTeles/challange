<?php
if (!defined("STDIN")) {
    define("STDIN", fopen('php://stdin', 'r'));
}

echo "Digite insira o array a ser ordenado:\n";
$input_array = trim(fgets(STDIN, 1024));
// echo "Digite o numero de rotações:\n";
// $input_times = fgets(STDIN, 1);
// readline();

// echo $input_times;
$array = str_split($input_array);
$aux = $array[0];
$arrayPar = [];
$arrayImpar = [];

function ehPar($numero){
    return $numero % 2 == 0 ? true : false;
}
function ordenaArray($arr){
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
        return ordenaArray($arr);
    }
}
for($i = 0; $i < count($array); $i++){
    if(ehPar($array[$i])){
        $arrayPar[] =  $array[$i];
    } else {
        $arrayImpar[] =  $array[$i];
    }
}
print_r(ordenaArray($arrayImpar));
print_r(ordenaArray($arrayPar));
// foreach ($array as $key => $item) {
//     if ($key != count($array) - 1) {
//         if ($key != 0) {
//             $array[$key - 1] = $item;
//         }
//     } else {
//         $array[$key] = $aux;
//     }
// }
// print_r($arrayPar);
// print_r($arrayImpar);
