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
$nome = $_POST["nome"];
$mail = $_POST["mail"];
$senha = $_POST["senha"];
$sexo = $_POST["sexo"];

//a conexão com o banco de dados foi realizada no arquivo dbcon.php com a variável $conn

//inserindo no banco de dados
$sql = "INSERT INTO tbUsuarios (nomeUser, mailUser, senhaUser, sexoUser) VALUES ('$nome','$mail','$senha','$sexo')";

if (mysqli_query($conn, $sql)) {
    echo "Novo registro adicionado";
}else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
    
//Utilização de sessão
session_start();
$_SESSION["nome"] = $_POST["nome"];
$_SESSION["mail"] = $_POST["mail"];
$_SESSION["senha"] = $_POST["senha"];
$_SESSION["sexo"] = $_POST["sexo"];
?>

<a href="principal.php"><button>Entrar no site</button></a>