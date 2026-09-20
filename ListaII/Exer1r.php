<?php
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $soma = $valor1 + $valor2;

    if($valor1 != $valor2)
    {
        echo "O valor da soma é: $soma";
    }
    else
    {
        $triplo = ($valor1 + $valor2) * 3;
        echo "O triplo do resultado é: $triplo"
    }