<?php
$dia = $_POST['valor1'];
$mes = $_POST['valor2'];
$ano = $_POST['valor3'];

if (checkdate($mes, $dia, $ano)) {
    echo "A data $dia/$mes/$ano é válida.";
} else {
    echo "A data $dia/$mes/$ano é inválida.";
}