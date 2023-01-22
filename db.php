<?php

$conexao = mysqli_connect(
    $host = "localhost",
    $username = "root", $password = "Stell@2743", $db = "cadastro"
);

$query = "SELECT * FROM cursos";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "SELECT * FROM quem";
$consulta_quem = mysqli_query($conexao, $query);


$query = "SELECT * FROM carro";
$consulta_carro = mysqli_query($conexao, $query);
