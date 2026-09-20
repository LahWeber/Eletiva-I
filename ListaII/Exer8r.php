<?php

if (isset($_POST['numero'])) 
{
    $valor1 = $_POST['numero'];
    $fatorial = 1;

    for ($i = 1; $i <= $valor1; $i++) 
    {
        $fatorial = $fatorial * $i;
    }

    echo "O fatorial de $valor1 é: $fatorial";
}
