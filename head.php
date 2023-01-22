<!DOCTYPE html>

<html>
    <head>
        <title> Curso Warlen</title>
        <link rel="stylesheet" href="css/estilo.css">
        <meta charset="UTF-8">
</head>
<header>

<div class="contanier">

<a href="?pagina=home">
    <img src ="img/cu.png" title="Logo" 
    alt="Logo" width="50" height="50"></a>

<div id="menu">
<a href="?pagina=cursos">Cursos</a>

<a href="?pagina=alunos">Alunos</a>

<a href="?pagina=matricula">Matricula</a>

<?php if (isset($_SESSION['login'])){?>
    <a href="logout.php">
    <?php echo $_SESSION['usuario'];?>
    (SAIR)
</a>

<?php } ?>


</div>
</div>

</header>
<div id="conteudo" class="contanier">