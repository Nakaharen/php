<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'CPF.php';

$karen = new Titular(new CPF('123.456.789-10'), 'Karen Nakahara');
$primeiraConta = new Conta($karen);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$sophie = new Titular (new CPF('123.456.789-20'), 'Sophie Maria');
$segundaConta = new Conta($sophie);
var_dump($segundaConta);

$terceiraConta = new Conta(new Titular(new CPF('123.456.789-30'), 'Guilherme'));
echo Conta::recuperarNumeroDeContas();