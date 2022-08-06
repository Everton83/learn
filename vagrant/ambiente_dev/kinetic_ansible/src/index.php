<?php

$servername = '192.168.56.187';
$username = 'phpuser';
$password = 'pass';

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

echo "Conectado com Sucesso"

?>