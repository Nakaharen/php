<?php

$notas = [10, 5, 7, 10, 9];

echo "<p>A nota de Português é: $notas[0]</p>";
echo "<p>A nota de Matemática é: $notas[1]</p>";
echo "<p>A nota de Geografia é: $notas[2]</p>";
echo "<p>A nota de Biologia é: $notas[3]</p>";
echo "<p>A nota de História é: $notas[4]</p>";

$quantidadeNotas = sizeof($notas);

$soma = 0;
for ($i = 0; $i < $quantidadeNotas; $i ++) {
  $soma = $soma + $notas [$i];
}

$media = $soma / $quantidadeNotas;

echo "<p>A média é: $media</p>";