<?php

  $idade = 17;

  echo "Você pode entrar a partir de 18 anos." . PHP_EOL;

  if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar';
  } else {
    echo "Você só tem $idade anos. Você não pode entrar.";
  }

  echo PHP_EOL;
  echo "Adeus!";

  // || = or => OU

  // && = and => E

