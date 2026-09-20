<?php
if (isset($_POST['valor1'], $_POST['valor2'])) 
{
    if (strpos($_POST['valor1'], $_POST['valor2']) !== false) 
    {
        echo "A segunda palavra está contida na primeira.";
    } 

    else 
    {
        echo "Não está contida.";
    }
}