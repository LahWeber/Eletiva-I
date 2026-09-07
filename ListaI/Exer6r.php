<?php
    $valor1 = $_POST["valor1"];
    $temp = ($valor1 - 32) * (5/9);

    echo "O valor da conversão de $valor1 °F para Celsius é $temp °C";