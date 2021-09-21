<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Karen Nakahara',
        new Endereco('São José dos Campos', 'bairro teste', 'rua teste', '123')
    )
);

$conta->depositar(500);

try {
    $conta->sacar(600);
} catch (SaldoInsuficienteException $exception){
    echo "Saldo insuficiente para realizar essa transação." . PHP_EOL;
    echo $exception->getMessage();
}
