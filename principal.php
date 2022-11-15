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
    <link rel="stylesheet" href="principal.css">

    <title>Coisas Emprestadas - Início</title>
</head>

<body>
    <header class="cabecalho">
        <img src="img/logo_sem_letra.png" alt="" class="logo_1">
        <img src="img/logo.png" alt="" class="logo_2">
        <h3 class="mensagem">Bem-vindo(a)<br>Aqui vai o nome do usuário
        </h3>
    </header>

    <span class="corpo">
        <nav class="navegacao">
            <ul class="lista">
                <a href="principal.php" class="lista__link">
                    <li class="itens">Início</li>
                </a>
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
            <h3 class="titulo">Empréstimos</h3>
            <div class="principal__tabela">
            <table class="tabela">
                <tr class="linha__tabela">
                    <th class="cabecalho__tabela">Item Emprestado</th>
                    <th class="cabecalho__tabela">Nome do Usuário</th>
                    <th class="cabecalho__tabela">Telefone</th>
                    <th class="cabecalho__tabela">Data de Empréstimo</th>
                    <th class="cabecalho__tabela">Data de Devolução</th>
                </tr>
            </table>
            <?php
                require_once 'dbcon.php';

                $i = 0;
                $sql = "SELECT * from emprestimo";
                $query = mysqli_query($conn, $sql);
                while($reg = mysqli_fetch_array($query)) {
                    $prod = $reg['nomeProd'];
                    $user = $reg['nomeUser'];
                    $fone = $reg['fone'];
                    $emprestimo = $reg['dataEmprestimo'];
                    $devolucao = $reg['dataDevolucao'];

                    $arProd[$i] = $prod;
                    $arUser[$i] = $user;
                    $arFone[$i] = $fone;
                    $arEmprestimo[$i] = $emprestimo;
                    $arDevolucao[$i] = $devolucao;

                    $i++;
                }

                $k = $i;
                for ($i=0; $i < $k; $i++) {
                    echo "
                    <table class='tabela'>
                        <tr class='linha__tabela'>
                            <td class='dados__tabela-produto'>
                                ".$arProd[$i]."
                            </td>
                            <td class='dados__tabela-usuario'>
                                ".$arUser[$i]."
                            </td>
                            <td class='dados__tabela-fone'>
                                ".$arFone[$i]."
                            </td>
                            <td class='dados__tabela-empr'>
                                ".$arEmprestimo[$i]."
                            </td>
                            <td class='dados__tabela-dev'>
                                ".$arDevolucao[$i]."
                            </td>
                        </tr>
                    </table>
                    ";
                }
            ?>
            </div>

            <!--
            <table class="tabela">
                <tr class="linha__tabela">
                    <th class="cabecalho__tabela">Item Emprestado</th>
                    <th class="cabecalho__tabela">Nome do Usuário</th>
                    <th class="cabecalho__tabela">Telefone</th>
                    <th class="cabecalho__tabela">Data de Empréstimo</th>
                    <th class="cabecalho__tabela">Data de Devolução</th>
                </tr>
                <tr class="linha__tabela">
                    <td class="dados__tabela">Item Tal</td>
                    <td class="dados__tabela">Fulano Tal</td>
                    <td class="dados__tabela">Telefone Tal</td>
                    <td class="dados__tabela">Data Tal</td>
                    <td class="dados__tabela">Entrega Tal</td>
                </tr>
            </table>
            -->

        </div>
    </span>

    <footer class="rodape">
        <div class="rodape__conteudo">
            <img src="img/logo_sem_letra.png" alt="logo" class="rodape__logo">
            <p class="sobre__rodape">
                o Projeto Coisas Emprestadas é uma empresa fictícia nascida e criada na internet como parte da disciplina de Fundamentos da Programação Web.<br>
                Vivamus hendrerit erat ut massa faucibus posuere. Praesent ullamcorper at mauris eu porta. Nullam fringilla luctus scelerisque. Maecenas dictum neque a nibh vehicula, laoreet iaculis turpis dignissim. Duis vitae lorem ac nulla consectetur accumsan. Curabitur a accumsan mi. Phasellus elementum vehicula nunc, vitae vestibulum magna tincidunt at. Nam est sem, iaculis sed aliquet quis, molestie id tellus. Suspendisse mollis tristique pellentesque. Aenean ac arcu mauris. Sed maximus metus tortor, sed suscipit leo aliquet et. Proin vel vestibulum libero. Ut in ex ornare, mollis mauris id, pharetra sem. Praesent eget cursus lorem. Proin volutpat consectetur condimentum. Mauris gravida gravida scelerisque.
            </p>
        </div>

        <h4 class="descricao">
            Projeto Coisas Emprestadas © 2022<br>
            Todos os direitos reservados a Bruno Vinícius da Silva
        </h4>

    </footer>

</body>

</html>