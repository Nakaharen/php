<?php

function exibeMensagem($mensagem)
{
  echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
  '123.456.789-10' => [
    'titular' => 'Karen',
    'saldo' => 100
  ],

  '123.456.789-20' => [
    'titular' => 'Guilherme',
    'saldo' => 1000
  ],

  '123.456.789-30' => [
    'titular' => 'Sophie',
    'saldo' => 10000
  ]
];

$contasCorrentes['123.456.789-20']['saldo'] -= 500;
if (500 > $contasCorrentes['123.456.789-10']['saldo']) {
  exibeMensagem("Você não pode sacar este valor");
} else {
  $contasCorrentes['123.456.789-10']['saldo'] -= 500;
}


foreach ($contasCorrentes as $cpf => $conta) {
  exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}