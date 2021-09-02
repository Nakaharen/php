<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor(
    'Luiza',
    new CPF('123.654.789-10'),
    10000
);

$autenticador->tentarLogin($diretor, '1234');
