<?php
if (!defined("STDIN")) {
    define("STDIN", fopen('php://stdin', 'r'));
}

echo "Digite insira o array a ser rotacionado:\n";
$input_array = trim(fgets(STDIN, 1024));

$array = str_split($input_array);
$aux = $array[0];
foreach ($array as $key => $item) {
    if ($key != count($array) - 1) {
        if ($key != 0) {
            $array[$key - 1] = $item;
        }
    } else {
        $array[$key] = $aux;
    }
}
print_r($array);
