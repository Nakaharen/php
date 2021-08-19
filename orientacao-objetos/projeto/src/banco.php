<?php

require_once 'Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);