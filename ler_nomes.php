<?php

//filesystem
//f(algumacoisa) - file(arquivo)
//read (ler) - r
//resource = recurso

$arquivo = fopen("nomes.txt", "r");

$bytes = filesize('nomes.txt');

//ler o conteúdo do arquivo

while(($linha = fgets($arquivo, $bytes)) !== false) {
            echo "$linha</br>";
        }

fclose($arquivo);