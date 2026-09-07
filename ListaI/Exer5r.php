<?php
    $valor1 = $_POST["valor1"];
    $temp = ($valor1 * (9/5)) + 32;

    echo "O valor da conversão de $valor1 °C para Fahrenheit é $temp °F";