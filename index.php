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
                <h1>Entrar</h1>
                <form method="POST">
                    <input class="email" type="email" name="email" placeholder="Usuário" maxlength="40">
                    <input class="password" type="password" name="senha" placeholder="Senha" maxlength="15">
                    <input type="submit" value="ACESSAR">
                    <a href="cadastrar.php">
                        Ainda não é inscrito?
                        <strong>Cadastre-se!</strong>
                    </a>
                </form>

                <?php
                    if(isset($_POST['email'])){
                        $email = addslashes($_POST['email']);
                        $senha = addslashes($_POST['senha']);

                        if(!empty($email) && !empty($senha)) {

                            $u->conectar("projeto_login","localhost","root","");

                            if($u->msgErro == ""){
                                if($u->logar($email, $senha)){
                                    header("location: areaPrivada.php");
                                } else {?>
                                    <div class="msg-erro">
                                        Email e/ou senha estão incorretos
                                    </div><?php
                                }
                            } else {?>
                                <div class="msg-erro">
                                    <?php echo "Erro: ".$u->msgErro; ?>
                                </div><?php
                            }
                        } else {?>
                            <div class="msg-erro">
                                Preencha todos os campos!
                            </div><?php
                        }
                    }
                ?>
            </div>
        </div>    
    </body>
</html>
