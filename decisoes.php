<?php

$idade = 18;
$nome = 'Anderson';

echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL;

// aqui eu uso o operador de comparação do PHP o ==, como faço 
if ($idade >= 18 and $nome == 'Anderson') {
  echo "Você tem $idade anos." . PHP_EOL;
  echo 'Pode entrar!';
}
