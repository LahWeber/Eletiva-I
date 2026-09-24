<?php
if (isset($_POST['valor1'])) {
$n = floatval($_POST['valor1']);
echo "Arredondado para cima: " . ceil($n) . "<br>";
echo "Arredondado para baixo: " . floor($n) . "<br>";
echo "Arredondado normal: " . round($n);
}