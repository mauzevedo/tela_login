<?php
    require_once 'classes/usuarios.php';
    $u = new Usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Projeto Login</title>
</head>

<body>
    <div class="background">
        <div class="container">
            <h1>Cadastrar</h1>
            <form method="POST">
                <input class="pessoa" type="text" name="nome" placeholder="Nome Completo" maxlength="30">
                <input class="telefone" type="text" name="telefone" placeholder="Telefone" maxlength="30">
                <input class="email" type="email" name="email" placeholder="Usuário" maxlength="40">
                <input class="password" type="password" name="senha" placeholder="Senha" maxlength="15">
                <input class="password" type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
                <input type="submit" value="Cadastrar">
            </form>
        
    
<?php
//verificar se usuario clicou no botao cadastrar
if(isset($_POST['nome']))
{
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confSenha']);
    //verificar se esta preenchido
    if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) 
    {
        $u->conectar("projeto_login","localhost","root","");
        if($u->msgErro == "")//se esta todo ok 
        {
            if($senha == $confirmarSenha) {
            if($u->cadastrar($nome,$telefone,$email,$senha)) {
                ?>
                <div id="msg-sucesso">
                Cadastrado com sucesso! Acesse para entrar!
                </div>
                <?php
            } else {
                ?>
                <div class="msg-erro">
                Email já cadastrado!
                </div>
                <?php           
            }
            } else {
                ?>
                <div class="msg-erro">
                Senha e confirmar senha não correspondem!
                </div>
                <?php   
            }
            } else {
                ?>
                <div class="msg-erro">
                <?php echo "Erro: ".$u->msgErro;?>
                </div>
                <?php   
            }
            } else {
                ?>
                <div class="msg-erro">
                Preencha todos os campos!
                </div>
                <?php   
    }
}
?>
</div>
</div>
</body>
</html>