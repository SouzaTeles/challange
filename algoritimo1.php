<?php
if (!defined("STDIN")) {
    define("STDIN", fopen('php://stdin', 'r'));
}

echo "Digite insira o array a ser rotacionado:\n";
$input_array = trim(fgets(STDIN, 1024));
echo "Digite o numero de rotações:\n";
$input_times = trim(fgets(STDIN, 8));

$array = explode(',', $input_array);
function rotate($arr, $times)
{
    $aux = $arr[0];
    foreach ($arr as $key => $item) {
        if ($key < count($arr) - 1) {
                $arr[$key] = $arr[$key + 1];
        } else {
            $arr[$key] = $aux;
        }
    }
    $times--;
    if ($times > 0) {
        return rotate($arr, $times);
    }
    return $arr;
}
print_r(rotate($array, $input_times));
