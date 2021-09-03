<?php

require 'Calculadora.php';

$notas = [10, 5, 7, 10, 9];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media) {
  echo "A média é: $media";
} else {
  echo "Não foi possível calcular a média";
}