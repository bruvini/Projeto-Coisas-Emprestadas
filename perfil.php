<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon-16x16.png" type="image/x-icon" />

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="perfil.css">
    <title>Coisas Emprestadas - Meu Perfil</title>
</head>

<body>
    <header class="cabecalho">
        <img src="img/logo_sem_letra.png" alt="" class="logo_1">
        <img src="img/logo.png" alt="" class="logo_2">
        <h3 class="mensagem">Bem-vindo(a)<br>
            usuário
            <!--<?php echo $_POST["mail"] ?> -->
        </h3>
    </header>

    <span class="corpo">
        <nav class="navegacao">
            <ul class="lista lista__selecionado">
                <a href="perfil.php" class="lista__link">
                    <li class="itens">Meu Perfil</li>
                </a>
                <a href="itens.php" class="lista__link">
                    <li class="itens">Cadastrar Itens</li>
                </a>
                <a href="emprestar.php" class="lista__link">
                    <li class="itens">Realizar Empréstimos</li>
                </a>
                <a href="relatorio.php" class="lista__link">
                    <li class="itens">Relatórios</li>
                </a>
            </ul>
        </nav>
        <div class="conteudo">
            <h2 class="titulo">MEU PERFIL</h2>
            <div class="dados">
                <h3 class="titulo__principal">
                    Dados Gerais
                </h3>
                <img src="img/icone.png" alt="icone da foto de perfil" class="perfil">
                <form action="recebeitens.php" method="post" class="usuario">
                    <label for="nome" class="rotulo">Nome Completo</label>
                    <input type="text" name="nome" id="nome" class="inputs">
                    <label for="mail" class="rotulo">Seu e-mail</label>
                    <input type="email" name="mail" id="mail" class="inputs">

                    <label for="senhaatual" class="rotulo">Senha Atual</label>
                    <input type="password" name="senhaatual" id="senhaatual" class="inputs">

                    <label for="novasenha" class="rotulo">Nova Senha</label>
                    <input type="password" name="novasenha" id="novasenha" class="inputs" minlength="8" required autocomplete="on">

                    <p class="dica">
                    <ul class="dicas">
                        <li class="dicas__itens">No mínimo 8 caracteres.</li>
                    </ul>
                    </p>

                    <input type="submit" class="bt__enviar" value="SALVAR ALTERAÇÕES">
                </form>
            </div>
        </div>
    </span>

    <footer class="rodape">
        <div class="rodape__conteudo">
            <img src="img/logo_sem_letra.png" alt="logo" class="rodape__logo">
            <p class="sobre__rodape">
                o Projeto Coisas Emprestadas é uma empresa fictícia nascida e criada na internet como parte da
                disciplina de Fundamentos da Programação Web.<br>
                Vivamus hendrerit erat ut massa faucibus posuere. Praesent ullamcorper at mauris eu porta. Nullam
                fringilla luctus scelerisque. Maecenas dictum neque a nibh vehicula, laoreet iaculis turpis dignissim.
                Duis vitae lorem ac nulla consectetur accumsan. Curabitur a accumsan mi. Phasellus elementum vehicula
                nunc, vitae vestibulum magna tincidunt at. Nam est sem, iaculis sed aliquet quis, molestie id tellus.
                Suspendisse mollis tristique pellentesque. Aenean ac arcu mauris. Sed maximus metus tortor, sed suscipit
                leo aliquet et. Proin vel vestibulum libero. Ut in ex ornare, mollis mauris id, pharetra sem. Praesent
                eget cursus lorem. Proin volutpat consectetur condimentum. Mauris gravida gravida scelerisque.
            </p>
        </div>

        <h4 class="descricao">
            Projeto Coisas Emprestadas © 2022<br>
            Todos os direitos reservados a Bruno Vinícius da Silva
        </h4>

    </footer>

</body>

</html>