<?php
    $email = $_POST["valor1"];
    $partes = explode("@", $email);

echo "Domínio: " . $partes[1];
