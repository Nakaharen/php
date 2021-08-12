<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Karen',
        'saldo' => 100
    ],
    '123.456.789-11' => [
        'titular' => 'Guilherme',
        'saldo' => 1000
    ],
    '123.256.789-12' => [
        'titular' => 'Sophie',
        'saldo' => 10000
    ]
];


$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
