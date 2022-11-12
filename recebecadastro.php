<?php
    echo "Dados de cadastro recebidos: <br>";

    echo "Nome completo: ". $_POST["nome"]. "<br>";
    echo "E-mail do usuario: ". $_POST["mail"]. "<br>";
    echo "Senha: ". $_POST["senha"]. "<br>";
    if ($_POST["termos"] == "on") {
        echo "Aceitou os termos: SIM <br>";
    } else {
        echo "Aceitou os termos: NÃO <br>";
    }
?>