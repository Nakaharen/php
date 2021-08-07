<?php

for ($contador = 1; $contador <= 15; $contador ++) {
  echo "#$contador" . PHP_EOL;
}

/* Quando já sabemos o limite do nosso loop (aqui, $contador = 15),
executamos o for. Em condições um pouco mais dinâmicas - por exemplo, "executar
até o usuário encerrar" ou "executar até dar erro" - usamos o while.

Aquilo que pode ser escrito com while também pode ser escrito com for, e
vice-versa. São duas formas diferentes de executar a mesma coisa.*/