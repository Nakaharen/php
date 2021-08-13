<?php

require 'funcoes-sc.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Karen',
        'saldo' => 100
    ],
    '123.456.789-11' => [
        'titular' => 'Guilherme',
        'saldo' => 1000
    ],
    '123.456.789-12' => [
        'titular' => 'Sophie',
        'saldo' => 10000
    ]
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 50);
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 300);
$contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], 900);

foreach ($contasCorrentes as $cpf => $conta) {
  exibeMensagem(
      "$cpf {$conta['titular']} {$conta['saldo']}"
  );
}
