<?php
    $palavra = $_POST["valor1"];
    $maiusculas = strtoupper($palavra);
    $minusculas = strtolower($palavra);
    echo "A palavra '$palavra' em maiúsculas é '$maiusculas' e em minusculas é '$minusculas'.";
?>