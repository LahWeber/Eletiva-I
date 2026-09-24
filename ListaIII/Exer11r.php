<?php
if (isset($_POST['valor1'])) {
$v = floatval($_POST['valor1']);
echo "Valor formatado: R$ " . number_format($v, 2, ',', '.');
}