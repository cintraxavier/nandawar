<?php
$conexao = mysqli_connect(
    $host = "localhost",
    $username = "root", $password = "Stell@2743", $db = "cadastro"
);


$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];


mysqli_query($conexao, 
"INSERT INTO cursos(nome_curso, carga_horaria)
VALUES('$nome_curso','$carga_horaria')"
);

header('location:index.php?pagina=cursos');