<?php

//filesystem
//f(algumacoisa) - file(arquivo)
//read (ler) - r
//write (escrever) - w
//resource = recurso
//eof = end of file (fim do arquivo)
//fwrite - write (escrever)
//truncar - truncate
//append - append (acrescentar) - criar o arquivo se ele não existir

$arquivo = fopen("nomes.txt", "a");


fclose($arquivo);
