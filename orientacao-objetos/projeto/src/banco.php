<?php

require_once 'Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);
$primeiraConta->definirCpfTitular('123.456.789-10');

echo $primeiraConta->recuperarSaldo();
echo $primeiraConta->recuperarCpfTitular();