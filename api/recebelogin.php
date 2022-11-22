<?php

//cria variáveis
$login = $_POST['mail'];
$senha = $_POST['senha'];

//conecta à base de dados
include_once 'dbcon.php';

//cria consulta
$sql = "SELECT * FROM tbUsuarios WHERE mailUser = '$login' AND senhaUser = '$senha'";

//armazena a consulta
$res = mysqli_query($conn, $sql);

//Obter qtd de registros encontrados
$qtd = mysqli_num_rows($res);
if ($qtd == 1) {
    //inicia a sessão
    session_start();

    //obtém dados do usuário
    $row = mysqli_fetch_assoc($res);

    //armazena informações do usuário na sessão
    $_SESSION['idUser'] = $row['idUser'];
    $_SESSION['nomeUser'] = $row['nomeUser'];
    
    //redireciona para a página principal
    header("Location: principal.php");
} else {
    header("Location: index.php?erro=1");
}

?>
