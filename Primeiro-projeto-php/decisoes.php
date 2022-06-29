<?php

$idade = 17;
$numeroDePessoas  = 2;


echo "Você só pode entrar se tiver a partit de 18 anos ou ";
echo "A partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18){
    echo "Você só pode entrar, se tiver mais de 18 anos" . PHP_EOL;
}else if ($idade >= 16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar " . PHP_EOL;
}else{
    echo "você não pode entrar, você so tem $idade" .PHP_EOL;
}

echo "Adeus";