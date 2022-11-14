<?php 
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
    }
