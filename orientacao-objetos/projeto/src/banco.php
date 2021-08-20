<?php

require_once 'Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Karen Nakahara');
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$segundaConta = new Conta('123.456.789-20', 'Sophie Maria');
var_dump($segundaConta);