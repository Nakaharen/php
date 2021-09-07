<?php

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

ArrayUtils::remover("Karen", $correntistas_e_compras);

var_dump($correntistas_e_compras);

echo "</pre>";