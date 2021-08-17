<?php
// funções - strings complexas

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

function titularComLetrasMaiusculas(array &$conta)
{
  $conta['titular'] = mb_strtoupper($conta['titular']);
}

/*
    Referência -> Modifica o original.
    Usar muitas referências pode bagunçar o código, pois isso dá acesso total
    à variável.

    Valor -> Modifica a cópia, sem alterar o original.
    Por valor se garante a segurança dos dados.
*/