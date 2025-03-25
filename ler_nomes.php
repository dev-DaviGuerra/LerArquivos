<?php

//filesystem
 //f(algumacoisa) - file(arquivo)
 //read (ler) - r
 //write (escrever) - w
 //resource = recurso
 //eof = end of file (fim do arquivo)
 //fwrite - write (escrever)
 //truncar - truncate (truncar) -> "w"
 //append - append (acrescentar)
 //truncar - truncate
 //append - append (acrescentar) - criar o arquivo se ele não existir

$relativePath = 'dados/nomes.txt';
$absolutePath = realpath($relativePath);

if(file_exists($absolutePathabs)) {
    echo 'Arquivo existe';
}
echo $absolutePath;
 