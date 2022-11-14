<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon-16x16.png" type="image/x-icon" />
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/cadastro.css">

    <title>Coisas Emprestadas - Cadastro</title>
</head>

<body>
    <!-- AQUI É A PARTE QUE VAI FICAR O LOGO -->
    <header class="cabecalho">
        <img src="img/logo.png" alt="Logo do Projeto Coisas Emprestadas" class="logo">
    </header>
    <section class="principal">
        <div class="cadastrar">
            <h2 class="login__titulo">Faça seu cadastro no <br> <strong>PROJETO COISAS EMPRESTADAS</strong></h2>
            <form action="recebecadastro.php" method="post" class="login__form">
                <div>
                    <label for="nome" class="login__rotulo">Digite seu nome completo:</label>
                    <input type="text" name="nome" id="nome" class="login__input">
                    <label for="mail" class="login__rotulo">Insira seu e-mail:</label>
                    <input type="email" name="mail" id="mail" class="login__input">
                    <label for="senha" class="login__rotulo">Crie uma senha:</label>
                    <input type="password" name="senha" id="senha" class="login__input">
                    <div class="login__adicionais">
                        <div class="continuar__conectado">
                            <input type="checkbox" name="termos" id="termos" class="login__checkbox">
                            <label for="termos" class="login__rotulo_conectado">Estou de acordo com os <a href="#">termos de serviço</a> e a <a href="#">política de privacidade</a> do Projeto Coisas Emprestadas</label>
                        </div>
                    </div>
                    <input type="submit" value="Cadastrar" class="login__enviar">
                </div>
            </form>
            <div class="cadastro__link">
                <h3 class="cadastro">
                    Já tem seu cadastro? <br>
                    <a href="index.html" class="login__link">Volte para a página inicial</a>
                </h3>
            </div>
        </div>  
    </section>
</body>

</html>