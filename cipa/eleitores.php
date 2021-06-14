<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CIPA</title>
        <link rel="stylesheet" href="CSS/estilo.css">
    </head>

    <body>
    <div id="corpo-form">
        <h1>CADASTRO DE ELEITORES</h1>
        <form method="POST" >
            <input type="text" name="eleitor" placeholder="Nome do Eleitor">
            <input type="text" name="cpf" placeholder="CPF">
            <input type="text" name="matricula" placeholder="Numero do Eleitor">
            <form action="post.php">
            <input type="submit" value="CADASTRAR">
            <input type="submit" value="PESQUISAR">
            </form>
            <a href="cadastrar.php"> Ainda não é cadastrado? <strong> Cadastre-se aqui!!!</strong> </a>
        </form>
    </div>
<?php
       
    ?>

</body>
</html>