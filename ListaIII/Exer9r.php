<?php
if (isset($_POST['valor1'])) {
$f = $_POST['valor1'];
echo "Original: $f<br>";
echo "Sem espaços extras: " . trim($f) . "<br>";
echo "Sem espaços: " . str_replace(" ", "", $f);
}