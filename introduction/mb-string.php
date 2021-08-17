<?php

$string = 'Testes de integração com PHP';

echo mb_strlen($string) . PHP_EOL;
// "strlen" conta o número de bytes, não de caracteres.
// "ç" e "ã" contam 2 bytes.
// para trabalhar com string multibyte, usar mb_
// echo mb_strtoupper($string); => deixa tudo em letra maiúscula

echo mb_convert_case($string, MB_CASE_TITLE);
// somente as iniciais em letra maiúscula
