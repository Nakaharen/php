<?php declare(strict_types=1);

require 'ArrayUtils.php';

$correntistas_e_compras = [
  "Karen",
  26,
  "Saori",
  04,
  "Nina",
  30,
  "Guilherme",
  21
];

echo "<pre>";

var_dump($correntistas_e_compras);

ArrayUtils::remover(21, $correntistas_e_compras);

var_dump($correntistas_e_compras);

echo "</pre>";