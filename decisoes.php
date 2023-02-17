<?php

$idade = 18;
$nome = 'Anderson';

echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL;

/* aqui eu uso o operador de comparação do PHP o ==, como faço duas verificação aqui nessa condição eu 
faço uso do operador ou o mesmo que “||” podemos também usar o “or” que dá o mesmo resultado assim 
ficaria desta forma ($idade == 18 or $idade > 18), mas podemos fazer as duas verificações diretamente, 
para usar o operador “e” usamos o “and” ou o mais comum de encontrar o “&&” */ 
if ($idade >= 18 and $nome == 'Anderson') {
  echo "Você tem $idade anos." . PHP_EOL;
  echo 'Pode entrar!';
}
