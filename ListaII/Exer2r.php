<?php
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    if ($valor1 == $valor2)
    {
        echo "Os valores são iguais";
    }

    else if ($valor1 < $valor2)
    {
        echo "A ordem crescente é: $valor1, $valor2";
    }
    
    else
    {
        echo "A ordem crescente é: $valor2, $valor1";
    }