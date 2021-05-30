<?php
/* 3. Escreva um algoritmo que calcule o tempo em dias a partir de uma data inicial e final
recebidos no formato dd/mm/aaaa. Não deve usar funções de data e hora. */

if (!defined("STDIN")) {
    define("STDIN", fopen('php://stdin', 'r'));
}

echo "Digite a data inicial:\n";
$input_initial_date = trim(fgets(STDIN, 1024));
echo "Digite a data final:\n";
$input_final_date = trim(fgets(STDIN, 1024));


function getdays($date){
    $dateArray = explode('/', $date);
    return $dateArray[0];
}
function getMonth($date){
    $dateArray = explode('/', $date);
    return $dateArray[1];
}
function getYear($date){
    $dateArray = explode('/', $date);
    return $dateArray[2];
}
$initialDays = getdays($input_initial_date);
$initialDays += getMonth($input_initial_date) * 30; //Aproximado

$finalDays = getdays($input_final_date);
$finalDays += getMonth($input_final_date) * 30;

echo ($finalDays - $initialDays) . " dias";
