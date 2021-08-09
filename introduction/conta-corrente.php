<?php

$conta1 = [
  'titular' => 'Karen',
  'saldo' => 100
];

$conta2 = [
  'titular' => 'Guilherme',
  'saldo' => 1000
];

$conta3 = [
  'titular' => 'Sophie',
  'saldo' => 10000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
  echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}