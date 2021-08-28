<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF, Funcionario};

$umaFuncionaria = new Funcionario(
    'Karen Nakahara',
    new CPF('123.456.789-10'),
    'Desenvolvedora',
    '1000'
);

$umFuncionario = new Funcionario(
    'Guilherme',
    new CPF('123.456.789-20'),
    'Gerente',
    '2000'
);

//$controlador = new ControladorDeBonificacoes();
//$controlador->adicionarBonificacaoDe($umFuncionario);
//$controlador->adicionarBonificacaoDe($umaFuncionaria);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacaoDe($umFuncionario);
$controlador->adicionarBonificacaoDe($umaFuncionaria);

echo $controlador->recuperarTotal();
