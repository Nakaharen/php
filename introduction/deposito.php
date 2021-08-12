<?php

function sacar(array $conta, float $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar)
{
  if($valorADepositar > 0) {
    $conta['saldo'] += $valorADepositar;
  } else {
    exibeMensagem("O valor de depósito precisa ser maior que 0.");
  }

  $conta['saldo'] += $valorADepositar;
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
    '123.456.789-12' => [
        'titular' => 'Sophie',
        'saldo' => 10000
    ]
];


$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 50);
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 300);
$contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], 900);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
