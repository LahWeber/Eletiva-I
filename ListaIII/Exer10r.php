<?php
if (isset($_POST['valor1'])) {
$partes = explode(" ", $_POST['valor1']);
$iniciais = "";
foreach ($partes as $p) {
$iniciais .= strtoupper($p[0]) . ".";
}
echo "Iniciais: $iniciais";
}