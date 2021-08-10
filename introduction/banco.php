<?php

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
  echo "Você não pode sacar este valor" . PHP_EOL;
} else {
  $contasCorrentes['123.456.789-10']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta) {
  echo $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}