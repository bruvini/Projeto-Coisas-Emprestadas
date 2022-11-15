<?php

    $hoje = date('d/m/Y');
    $devolucao = date('d/m/Y', strtotime('+14 days'));

    function formataTelefone($numero){
        if(strlen($numero) == 10){
            $novo = substr_replace($numero, '(', 0, 0);
            $novo = substr_replace($novo, '9', 3, 0);
            $novo = substr_replace($novo, ')', 3, 0);
        }else{
            $novo = substr_replace($numero, '(', 0, 0);
            $novo = substr_replace($novo, ') ', 3, 0);
        }
        return $novo;
    }

    echo "REGISTRO DE EMPRÉSTIMOS <br><br>";
    
    echo 
    "Item emprestado: ".$_POST["item"]."<br>";
    echo
    "Emprestado para: ".$_POST["user"]."<br>";
    echo
    "Data do empréstimo: ".$hoje."<br><br>";

    echo "A data prevista para devolução é para ". $devolucao. ". Em caso de não devolução, contatar ".$_POST["user"]. " pelo telefone " . formataTelefone($_POST["fone"]).".";

?>