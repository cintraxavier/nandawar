<?php

$conexao = mysqli_connect(
    $host = "localhost",
    $username = "root", $password = "Stell@2743", $db = "cadastro"
);

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "SELECT * FROM usuario WHERE usuario = '$usuario' and senha= '$senha'";

$consulta = mysqli_query($conexao, $query);

if (mysqli_num_rows($consulta) == 1){


    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;
    header('location:index.php');
    

    
} 

else {
    echo 'erro de lougar';
    
}



