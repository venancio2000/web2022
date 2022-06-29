<?php

function sacar(array $conta, float $valorAsacar) : array
{
    if($valorAsacar > $conta['saldo']){
        exibeMensagem("ops você não tem esse valor");
    }else{
        $conta['saldo'] -= $valorAsacar;
    }
    return $conta;
}
function depositar(array $conta, float $valorAdepositar) : array
{
    if ($valorAdepositar > 0){
        $conta['saldo'] += $valorAdepositar;
    }else{
        exibeMensagem("valor negativo para desitar");
    }
    return $conta;

}


function exibeMensagem(string $mesagem)
{
     echo $mesagem . PHP_EOL;
}

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
$contasCorrentes['123.456.587-11'] = sacar($contasCorrentes['123.456.587-11'], 500);
$contasCorrentes['123.456.489-12'] = sacar($contasCorrentes['123.456.489-12'], 500);
$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 1000);

foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem($cpf . " " .$conta['titular'] . " " . $conta['saldo']);
}
