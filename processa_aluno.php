<?php
$conexao = mysqli_connect(
    $host = "localhost",
    $username = "root", $password = "Stell@2743", $db = "cadastro"
);

$nome_carro = $_POST['nome_carro'];
$nome_marca = $_POST['nome_marca'];


mysqli_query($conexao, 
"INSERT INTO carro(marca, nome)
VALUES('$nome_marca','$nome_carro')"
);


header('location:index.php?pagina=alunos');