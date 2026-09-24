<?php
if (isset($_POST['valor1'])) {
$p = strtolower($_POST['valor1']);
if ($p == strrev($p)) {
echo "$p é palíndromo";
} else {
echo "$p não é palíndromo";
}
}