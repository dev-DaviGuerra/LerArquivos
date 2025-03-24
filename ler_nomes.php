<?php

//filesystem
//f(algumacoisa) - file(arquivo)
//read (ler) - r
//resource = recurso

$arquivo = fopen("nomes.txt", "r");

//ler o conteúdo do arquivo
$nomes = fread($arquivo, 5);
print_r($nomes);

fclose($arquivo);