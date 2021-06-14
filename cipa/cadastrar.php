<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Geral</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>

<body>
    <div id="corpo-form-cad">
    <h1>Plataforma de Votação para membros da CIPA</h1>
        <form method="POST">
            <input type="text" name="candidato" placeholder="Nome do Candidato">
            <input type="text" name="cpf" placeholder="CPF">
            <input type="text" name="matricula" placeholder="Numero do candidato">
            
            <input type="text" name="eleitor" placeholder="Nome do Eleitor">
            <input type="text" name="cpf" placeholder="CPF">
            <input type="text" name="matricula" placeholder="Numero do Eleitor">
            <form action="post.php">
          
            <input type="submit" value="CADASTRAR">
            <a href="index.php"> <strong> Já sou cadastrado</strong> </a>
        </form>
    </div>





<?php       
    /* Post - Action do php*/   
    /* ISSET VERIFICA AS VARIAVEIS DO POST*/ 
    /* addslashes melhora a segurança do acesso as variaveis*/
    /* usar o if para verificar se todos os campos estão preenchidos*/
  
    if(isset($_POST['nome'])) 
        $nome = addslashes ($_POST['nome']);
        $telefone = addslashes ($_POST['telefone']);
        $email = addslashes ($_POST['email']);
        $senha = addslashes ($_POST['senha']);
        $confirmarSenha = addslashes ($_POST['confSenha']);
    
    if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
    {
    $u-> conectar("usuarios", "localhost", "root", "");
    /** (BancoDados,host,email,senha) */
  */  
    
  
  /**ANTES DE ENVIAR A SOLICITACAO DE CADASTRO , verificar se a senha e confirmar senha estao iguais. */
   
    if($msgErro == "") /**esta tudo certo */
    {           
        if ($senha == $confirmarSenha)
        # teste para ver se senha e confirmarSenha estao iguais, se sim..continuar
        {
            if($u->cadastrar($nome,$telefone,$email,$senha))
            {
?>
    <div id="msg-Sucesso">
    Cadastrado com Sucesso, Acesse para Entrar.;
    </div>
<?php
        }else{
?>
    <div id="msg-Erro">
    Email já Cadastrado.;
    </div>
<?php    
    }
        }else{
?>
    <div id="msg-Erro">
    Senha e confirmar senha não correspondem.;
    </div>
<?php    
        }
    }else{
?>
    <div id="msg-Erro">
    echo "Erro: ".$u->msgErro;
    echo "Preencha todos os campos";
    </div>
<?php    
    }
    }     
?>

</body>
</html>