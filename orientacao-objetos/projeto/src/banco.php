<?php

require_once 'Modelo/Pessoa.php';
require_once 'Modelo/Conta/Conta.php';
require_once 'Modelo/Conta/Titular.php';
require_once 'Modelo/CPF.php';
require_once 'Modelo/Endereco.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

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