<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon-16x16.png" type="image/x-icon" />

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="login.css">

    <title>Coisas Emprestadas - Login</title>
</head>

<body>
    <!-- AQUI É A PARTE QUE VAI FICAR O LOGO -->
    <header class="cabecalho">
        <img src="img/logo.png" alt="Logo do Projeto Coisas Emprestadas" class="logo">
    </header>
    <!-- AQUI É A PARTE QUE VAI FICAR textos -->
    <section class="principal">
        <div class="texto">
            <!-- AQUI É A PARTE QUE VAI FICAR O título -->
            <h1 class="titulo__principal">Projeto Coisas Emprestadas</h1>
            <!-- AQUI É A PARTE QUE VAI FICAR O texto principal -->
            <p class="texto__principal">
                Este projeto foi desenvolvido pelo aluno <strong>Bruno Vinícius da Silva</strong> para a disciplina de
                Fundamentos de Programação Web,
                ministrado pelo <strong>Professor Lucas Emanuel Silva E Oliveira</strong> no curso de Tecnologia em
                Análise e
                Desenvolvimento de Sistemas da PUCPR.
            </p>
            <!-- AQUI É A PARTE QUE VAI FICAR O texto de atualização -->
            <p class="texto__secundario">
                Última atualização: 22/11/2022
            </p>
        </div>
        <div class="login">
            <h2 class="login__titulo">Faça seu login no <br> <strong>PROJETO COISAS EMPRESTADAS</strong></h2>
            <form action="recebelogin.php" method="post">
                <div class="login__form">
                    <label for="mail" class="login__rotulo">E-mail</label><br>
                    <input type="email" name="mail" id="mail" class="login__input"><br>

                    <label for="senha" class="login__rotulo">Senha</label><br>
                    <input type="password" name="senha" id="senha" class="login__input">

                    <?php
                        if (isset($_GET['erro'])){
                            echo "<p style = 'text-align: center; color: red; font-size: 12px'>Usuário e/ou senha incorretos. Tente novamente!</p>";
                        }
                        if (isset($_GET['auth'])){
                            echo "<p style = 'text-align: center; color: red; font-size: 12px'>Usuário sem permissão de acesso</p>";
                        }
                    ?>
                    

                    <input type="submit" class="login__enviar" value="Entrar">
                </div>
            </form>
            <div class="cadastro__link">
                <h3 class="cadastro">
                    Novo(a) aqui? <br>
                    <a href="cadastro.php" class="login__link">Faça seu cadastro</a>
                </h3>
            </div>
        </div>
    </section>
</body>

</html>