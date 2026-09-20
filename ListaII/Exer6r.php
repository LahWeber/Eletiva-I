<?php
if (isset($_POST['numero'])) 
{
    $valor1 = $_POST['numero'];
    $contador = 1;
    $soma = 0;

    while ($contador <= $valor1) {
        $soma = $soma + $contador;
        $contador++;
    }

    echo "Resultado da soma: $soma";
}