<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Projeto Login</title>
</head>

<body>
    <div class="backgorund">
        <div class="container">
            <form method="POST">
                <h1>Cadastrar</h1>
                <input class="pessoa" type="text" name="nome" placeholder="Nome Completo" maxlength="30">
                <input class="telefone" type="text" name="telefone" placeholder="Telefone" maxlength="30">
                <input class="email" type="email" name="email" placeholder="Usuário" maxlength="40">
                <input class="password" type="password" name="senha" placeholder="Senha" maxlength="15">
                <input class="password" type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
                <input type="submit" value="CADASTRAR">
            </form>
        </div>
    </div>
</body></html>