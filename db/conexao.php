<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

$conn = new mysqli($servername, $username, $password, $dbname);
$conexaoOk;

if ($conn->connect_error) 
{
    die("Conexão falhou: " . $conn->connect_error);
    $conexaoOk = false;
}
else
{
    $conexaoOk = true;
}

?>