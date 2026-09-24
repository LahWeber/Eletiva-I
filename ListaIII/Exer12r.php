<?php
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
$senha = substr(str_shuffle($chars), 0, 8);
echo "Senha gerada: $senha";