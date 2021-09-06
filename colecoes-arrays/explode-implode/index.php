<?php

$nomes = "Saori, Nina, Guilherme, Karen";

/* Para conseguir transformar a string em array podemos usar a função explode().
Essa função precisará de um delimitador como primeiro argumento. Para explicar o
que seria um delimitador, a função explode verifica a string. Assim que ela
encontrar o delimitador, ela separará partes da string e retornará um array com
cada uma delas. */
$array_nomes = explode (",", $nomes);

foreach ($array_nomes as $nome) {
  echo "<p>Olá $nome</p>";
}

/* Vamos transformá-lo novamente em uma string utilizando a função implode().
Criaremos a variável $nomesJuntos e chamaremos essa função. O uso de implode é
bem parecido com o da função explode(). Mas em vez de um delimitador, ela
aceitará um parâmetro chamado glue, em inglês, cola. Será representado por ","
no código. Isso juntará cada um dos elementos do array como uma string novamente. */
$nomesJuntos = implode (",", $array_nomes);

echo $nomesJuntos;