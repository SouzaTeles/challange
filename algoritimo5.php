<?php
/*
5. Um algoritmo deve buscar um sub-texto dentro de um texto fornecido. (Não usar funções de
busca em string).*/
if (!defined("STDIN")) {
    define("STDIN", fopen('php://stdin', 'r'));
}

echo "Insira um pequeno texto:\n";
$input_texto = trim(fgets(STDIN, 1024));
echo "Insira um termo a ser pesquisado:\n";
$input_termo = trim(fgets(STDIN, 1024));


$array_texto = str_split($input_texto);
$array_termo = str_split($input_termo);

$posText = 0;
for ($i = 0; $i < count($array_texto); $i++) {
    if ($array_texto[$i] == $array_termo[$posText]) {
        $posText++;
        echo $array_texto[$i];
    } else {
        $posText = 0;
    }
    if($posText == count($array_termo)){
        echo "Texto encontrado a partir da posição " . ($i - $posText);
        return;
    }
}
echo "Termo não encontrado";