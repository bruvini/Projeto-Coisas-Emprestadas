<?php 
    /*
    echo "NOVO ITEM CADASTRADO NO PROJETO COISAS EMPRESTADAS" . "<br><br>";

    echo "Nome do item: ".$_POST["nome"]."<br>";
    echo "Estado do item: ".$_POST["estado"]."<br>";
    switch ($_POST["estado"]){
        case "novo":
            echo "Obrigado por cadastrar um item novo.";
            break;
        case "semi-novo":
            echo "Não é novo mas já está valendo.";
            break;
        default:
            echo "Poderia cadastrar um produto melhor, né?";
        */
        
include_once 'dbcon.php';

//variáveis do formulário de cadastro
$item = $_POST["nome"];
$estado = $_POST["estado"];

$sql = "INSERT INTO cadastroProdutos (nomeProd, estadoProd) VALUES ('$item','$estado')";

if (mysqli_query($conn, $sql)) {
    header("Location: itens.php");
}else {
    echo "erro";
}
mysqli_close($conn);