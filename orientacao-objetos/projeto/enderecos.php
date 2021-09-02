<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('São José dos Campos', 'bairro qualquer', 'minha rua', '31');

$outroEndereco = new Endereco('São Paulo', 'Centro', 'uma rua aí', '12');

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;