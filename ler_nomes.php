<?php

//filesystem
//f(algumacoisa) - file(arquivo)
//read (ler) - r
//resource = recurso
//eof = end of file (fim do arquivo)
//fwrite - write (escrever)
//truncar - truncate (truncar) -> "w"
//append - append (acrescentar)

$arquivo = fopen("nomes.txt", "a");

fwrite($arquivo, "\n");
fwrite($arquivo, 'Cristiano');


fclose($arquivo);
