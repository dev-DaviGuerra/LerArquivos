<?php

//caminho absoluto: $arquivo = fopen("./pasta/nomes.txt", "r")
 
//caminho relativo: $arquivo = fopen("nomes.txt", "r");

$relativePath = 'pasta/nomes.txt';
$absolutePath = realpath($relativePath);

fclose($arquivo);
