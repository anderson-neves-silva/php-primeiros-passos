<?php

/* concatenando usando aspas simples  e o ponto no php, mas uma forma mais fácil e suando aspas duplas 
como segue os exemplos abaixo */
$idade = 29;
echo 'Olá mundo! a minha idade é ' . $idade . ' anos';

/* caracteres especiais, para quebra de linha use o \n mas dentro de aspas duplas, usando aspas simples ele não quebra linha e 
apenas exibe o \n */
echo "\n";
// caracteres especiais, para colar um tab
echo "\t";

echo "Olá mundo! a minha idade é $idade anos \n";

// caracteres especiais, o php tem uma forma própria para quebra de linha
echo "Olá" . PHP_EOL;
echo "Mundo!";
