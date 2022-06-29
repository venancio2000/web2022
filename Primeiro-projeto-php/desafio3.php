<?php

$peso = 100;
$altura = 1.86;

$IMC  = $peso / ($altura * $altura);

echo "$IMC";

if ($IMC < 18.5){
    echo "Abaixo do Peso" >PHP_EOL;
}elseif ($IMC > 18.50 && $IMC <= 24.9){
    echo "Peso normal" . PHP_EOL;
}elseif ($IMC >= 25 && $IMC <= 29.9){
    echo "Sobrepeso" .PHP_EOL;
}
echo "Seu valor do imc = $IMC";
