<?php
$conexao = mysqli_connect(
    $host = "localhost",
    $username = "root", $password = "Stell@2743", $db = "cadastro"
);


$id_curso = $_POST['id_cursos'];
$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$query = "UPDATE cursos SET  nome_curso='$nome_curso', 
carga_horaria= '$carga_horaria' WHERE (id_cursos='$id_curso')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cursos');