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
$numeros = explode(',', $input_array);
$triangulosCriados = [];
$triangulosPossiveis = 0;

function trianguloPossivel($l1, $l2, $l3)
{
    $possivel = true;
    $possivel = $possivel && (($l1 + $l2) > $l3);
    $possivel = $possivel && (($l1 + $l3) > $l2);
    $possivel = $possivel && (($l2 + $l3) > $l1);
    return $possivel;
}
function triangleName($idx1, $idx2, $idx3)
{
    $arestas = ['A', 'B', 'C', 'D', 'E', 'F'];
    return [$arestas[$idx1], $arestas[$idx2], $arestas[$idx3]];
}
function trianguloExiste($triangulos, $arestas){
    if(empty($triangulos)){
        return false;
    }
    foreach($triangulos as $triangulo){
        if(!array_diff($arestas, $triangulo)){
            return true;
        }
    }
    return false;
}
for ($i = 0; $i < count($numeros); $i++) {
    for ($j = 0; $j < count($numeros); $j++) {
        if ($j != $i) {
            for ($k = 0; $k < count($numeros); $k++) {
                if ($k != $j && $k != $i) {
                    if (trianguloPossivel($numeros[$i], $numeros[$j], $numeros[$k])) {
                        $trianguloArestas = triangleName($i, $j, $k);
                        if(!trianguloExiste($triangulosCriados, $trianguloArestas)){
                            $triangulosCriados[] = $trianguloArestas;
                            echo "triangulo " . implode('', $trianguloArestas) . " possivel com os valores $numeros[$i], $numeros[$j], $numeros[$k]\n";
                            $triangulosPossiveis++;
                        }
                    }
                }
            }
        }
    }
}

echo "$triangulosPossiveis triangulos possiveis";