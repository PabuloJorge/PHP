<?php
//passagem de parâmnetro por referência ('&') é alterado o valor da variável 
function somar (&$numA, $numB){
    $numA += $numB;
}

$numA = 3;

somar($numA, 10);

echo $numA;