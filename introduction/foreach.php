<?php

$contasCorrentes = [
  1234567910 => [
    'titular' => 'Karen',
    'saldo' => 100
  ],

  12345678920 => [
    'titular' => 'Guilherme',
    'saldo' => 1000
  ],

  12345678930 => [
    'titular' => 'Sophie',
    'saldo' => 10000
  ]
];

foreach ($contasCorrentes as $cpf => $conta) {
  echo $cpf . PHP_EOL;
}