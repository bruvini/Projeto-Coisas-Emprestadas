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
    <link rel="stylesheet" href="emprestar.css">
    <title>Coisas Emprestadas - Empréstimo</title>
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
            <h2 class="titulo">EMPRÉSTIMOS</h2>
            <div class="formulario">
                <form action="recebeitens.php" method="post">
                    <label for="item" class="rotulo">Selecione o item a ser emprestado</label>
                    <select name="item" id="item" class="inputs">
                        <option value="novo">AQUI VAI A COMBOBOX COM OS ITENS CADASTRADOS</option>
                    </select>
                    <label for="usuario" class="rotulo">Selecione o usuário</label>
                    <select name="usuario" id="usuario" class="inputs">
                        <option value="novo">AQUI VAI A COMBOBOX COM OS USUÁRIOS CADASTRADOS</option>
                    </select>
                    <label for="fone" class="rotulo">Informe o telefone de contato</label>
                    <input type="tel" name="fone" id="fone" class="inputs">

                    <input type="submit" class="bt__enviar" value="REALIZAR EMPRÉSTIMO">
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