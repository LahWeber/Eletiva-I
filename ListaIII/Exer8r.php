<?php
if (isset($_POST['valor1'])) {
$frase = strtolower($_POST['valor1']);
$vogais = preg_match_all('/[aeiou]/', $frase);
echo "Quantidade de vogais: $vogais";
}