<?php
    $valor1 = $_POST["valor1"];
    $area = pi() * pow($valor1, 2);
    
    echo "O valor da área do círculo é: $area";