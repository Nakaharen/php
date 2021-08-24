<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'CPF.php';
require_once 'Endereco.php';

$endereco = new Endereco('São José dos Campos', 'meu bairro', 'minha rua', '31A' );
$karen = new Titular(new CPF('123.456.789-10'), 'Karen Nakahara', $endereco);
$primeiraConta = new Conta($karen);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$outroEndereco = new Endereco('a', 'b', 'c', '12A');
$sophie = new Titular (new CPF('123.456.789-20'), 'Sophie Maria', $outroEndereco);
$segundaConta = new Conta($sophie);
var_dump($segundaConta);

$terceiraConta = new Conta(new Titular(new CPF('123.456.789-30'), 'Guilherme', $endereco));
echo Conta::recuperarNumeroDeContas();