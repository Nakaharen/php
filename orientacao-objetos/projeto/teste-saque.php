<?php

use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Karen Nakahara',
        new Endereco('São José dos Campos', 'bairro teste', 'rua teste', '123')
    )
);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperarSaldo();