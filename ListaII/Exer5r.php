<?php
if (isset($_POST['numero'])) 
{
    $valor1 = $_POST['numero'];

    for ($i = 1; $i <= $valor1; $i++) 
    {
        echo $i . "<br>";
    }
}