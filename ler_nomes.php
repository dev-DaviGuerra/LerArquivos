<?php

//filesystem
//f(algumacoisa) - file(arquivo)
//read (ler) - r
//resource = recurso
//eof = end of file (fim do arquivo)

$arquivo = fopen("nomes.txt", "r");

$bytes = filesize('nomes.txt');

//ler o conteúdo do arquivo

while(!feof($arquivo)){
    $nome = fgets($arquivo);
    echo $nome;
    echo '</br>';
}

fclose($arquivo);