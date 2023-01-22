<?php

$conexao = mysqli_connect(
 $host = "localhost",
    $username = "root", $password = "Stell@2743", $db = "cadastro"
);

$id_cursos = $_GET['id_cursos'];

mysqli_query($conexao, "DELETE FROM cursos WHERE id_cursos = $id_cursos");

header('location:index.php?pagina=cursos');