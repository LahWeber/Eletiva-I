PHP
<?php
if (isset($_POST['valor1'])) {
$palavras = explode(" ", $_POST['valor1']);
echo "Total de palavras: " . count($palavras) . "<br>";
echo "Maior palavra: " . max($palavras);
}