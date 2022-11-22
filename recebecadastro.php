<?php

include_once 'dbcon.php';

/*echo "Dados de cadastro recebidos: <br>";
    echo "Nome completo: ". $_POST["nome"]. "<br>";
    echo "E-mail do usuario: ". $_POST["mail"]. "<br>";
    echo "Senha: ". $_POST["senha"]. "<br>";
    if ($_POST["termos"] == "on") {
        echo "Aceitou os termos: SIM <br>";
    } else {
        echo "Aceitou os termos: NÃO <br>";
    }
*/

//variáveis do formulário de cadastro
$id = $_POST["id"];
$nome = $_POST["nome"];
$mail = $_POST["mail"];
$fone = $_POST["fone"];
$senha = $_POST["senha"];
$sexo = $_POST["sexo"];

//a conexão com o banco de dados foi realizada no arquivo dbcon.php com a variável $conn

if (empty($id)) {
    $sql = "INSERT INTO tbUsuarios (nomeUser, mailUser, foneUser, senhaUser, sexoUser) VALUES ('$nome','$mail','$fone','$senha','$sexo')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("Location: index.php");
    }
}else {
    $sql = "UPDATE tbUsuarios SET nomeUser = '$nome', mailUser = '$mail', foneUser = '$fone', sexoUser = '$sexo' WHERE idUser = '$id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("Location: listacadastro.php");
    }
}


//Utilização de sessão
/*
session_start();
$_SESSION["nome"] = $_POST["nome"];
$_SESSION["mail"] = $_POST["mail"];
$_SESSION["senha"] = $_POST["senha"];
$_SESSION["sexo"] = $_POST["sexo"];
*/
