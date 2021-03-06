<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca};

$endereco = new Endereco('São José dos Campos', 'meu bairro', 'minha rua', '31A' );
$karen = new Titular(new CPF('123.456.789-10'), 'Karen Nakahara', $endereco);
try {
    $primeiraConta = new ContaCorrente($karen);
} catch (Error $e) {
    echo "Erro pego:" . $e->getMessage();
}

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$outroEndereco = new Endereco('a', 'b', 'c', '12A');
$sophie = new Titular (new CPF('123.456.789-20'), 'Sophie Maria', $outroEndereco);
$segundaConta = new ContaCorrente($sophie);
var_dump($segundaConta);

$terceiraConta = new ContaPoupanca(new Titular(new CPF('123.456.789-30'), 'Guilherme', $endereco));
echo Conta::recuperarNumeroDeContas();