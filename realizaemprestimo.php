<?php

include_once 'dbcon.php';

$hoje = date('d/m/Y');
$devolucao = date('d/m/Y', strtotime('+14 days'));

function formataTelefone($numero)
{
    if (strlen($numero) == 10) {
        $novo = substr_replace($numero, '(', 0, 0);
        $novo = substr_replace($novo, '9', 3, 0);
        $novo = substr_replace($novo, ')', 3, 0);
    } else {
        $novo = substr_replace($numero, '(', 0, 0);
        $novo = substr_replace($novo, ') ', 3, 0);
    }
    return $novo;
}

$item = $_POST['item'];
$nome = $_POST['user'];


$sqlNome = "SELECT * FROM tbUsuarios WHERE nomeUser LIKE '%$nome%'";
$sqlItem = "SELECT * FROM cadastroProdutos WHERE nomeProd LIKE '%$item%'";

$resNome = mysqli_query($conn, $sqlNome);
$resItem = mysqli_query($conn, $sqlItem);

$rowNome = mysqli_fetch_assoc($resNome);
$rowItem = mysqli_fetch_assoc($resItem);


//variáveis do formulário de cadastro
$hoje;
$devolucao;
$nome = $rowNome['nomeUser'];
$fone = $rowNome['foneUser'];
$item = $rowItem['nomeProd'];

$sql = "INSERT INTO emprestimo (nomeProd, nomeUser, fone, dataEmprestimo, dataDevolucao) VALUES ('$item','$nome','$fone','$hoje','$devolucao')";

if (mysqli_query($conn, $sql)) {
    header("Location: principal.php");
} else {
    header("Location: emprestar.php");
}
mysqli_close($conn);
