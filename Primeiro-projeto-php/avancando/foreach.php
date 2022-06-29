<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.587-11' =>  [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.489-12' =>  [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['123.789.456-89'] = [
  'titular' => 'Victor',
  'Saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . " " .$conta['titular'] . PHP_EOL;
}
