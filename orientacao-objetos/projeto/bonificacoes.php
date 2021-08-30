<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor};

$umaFuncionaria = new Desenvolvedor(
    'Karen Nakahara',
    new CPF('123.456.789-10'),
    'Desenvolvedora',
    '1000'
);

$umaFuncionaria->sobeDeNivel();

$umFuncionario = new Gerente(
    'Guilherme',
    new CPF('123.456.789-20'),
    'Gerente',
    '2000'
);

$umDiretor = new Diretor(
    'Nina Nakahara',
    new CPF('987.654.321-10'),
    'Diretor',
    5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacaoDe($umFuncionario);
$controlador->adicionarBonificacaoDe($umaFuncionaria);
$controlador->adicionarBonificacaoDe($umDiretor);

echo $controlador->recuperarTotal();
