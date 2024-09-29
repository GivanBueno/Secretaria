<?php

$hostname = "localhost";
$bancodedados = "escola";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno)
    {
        echo "Falha de conexão com o banco de dados "
    }
