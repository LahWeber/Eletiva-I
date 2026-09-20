<?php

if (isset($_POST['numero'])) 
{
    $valor1 = $_POST['numero'];

    for ($i = 1; $i <= 10; $i++) 
    {
        echo "$valor1 x $i = " . ($valor1 * $i) . "<br>";
    }
}