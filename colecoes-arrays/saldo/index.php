<?php

$saldos = [
  2500,
  3000,
  1000,
  3700,
  9000
];

foreach ($saldos as $saldo) {
  echo "<pre>O saldo é $saldo</pre>";
}

sort($saldos);

echo "O menor saldo é $saldos[0]" . PHP_EOL;
