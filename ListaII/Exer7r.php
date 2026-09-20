<?php

if (isset($_POST['numero'])) 
{
    $valor1 = $_POST['numero'];

    do 
    {
        echo $valor1 . "<br>";
        $valor1--;
    } while ($valor1 >= 1);
}