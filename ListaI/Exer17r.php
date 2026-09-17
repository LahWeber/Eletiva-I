<?php
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $valor3 = $_POST["valor3"];

    $resultado = ($valor1 * ((1 + $valor2) ** $valor3));

    echo "O valor de $valor1 com juros compostos é: $resultado";