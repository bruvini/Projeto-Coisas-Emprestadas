<?php

    echo "O usuário ".$_POST["nome"]." realizou alterações em seu perfil <br><br>";

    echo "NOME DO USUÁRIO: ".$_POST["nome"]."<br>";
    echo "E-MAIL: ".$_POST["mail"]."<br>";
    echo "SENHA ATUAL: ".$_POST["senhaatual"]."<br>";
    echo "SENHA NOVA: ".$_POST["novasenha"]."<br><br>";

    if($_POST) {
        $senha          = $_POST['senhaatual'];
        $senhaConfirma  = $_POST['novasenha'];
        if ($senha == "") {
            $mensagem = "Aviso</b>: Senha não foi alterada pois não foi informada a senha antiga!<br>";

        } elseif ($senha <> $senhaConfirma) {
            $mensagem = "Sucesso</b>: As senhas não são iguais então a alteração foi confirmada. A nova senha é ".$senhaConfirma."<br>";

        } else {
            $mensagem = "ERRO</b>: As senhas são iguais então a alteração não foi realizada. A senha digitada é ".$senhaConfirma."<br>";
        }
        echo $mensagem."<br>";
    }
?>