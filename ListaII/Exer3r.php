<?php
    $valor1 = $_POST["valor1"];

    if($valor1 > 100)
    {
        $desconto = $valor1 * 0.15;
        $valorfinal = $valor1 - $desconto;
        echo "O valor final com desconto é: $valorfinal";
    }
    else
    {
        echo "O valor final é: $valor1";
    }
