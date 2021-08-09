<?php

$peso = 70;
$altura = 1.75;

$imc = $peso / ($altura ** 2);

echo "O IMC é $imc. Você está com o IMC ";

if ($imc < 18.5) {
  echo "abaixo";
} else if ($imc < 25){
  echo "dentro";
} else {
  echo "acima";
}

echo " do recomendado" . PHP_EOL;