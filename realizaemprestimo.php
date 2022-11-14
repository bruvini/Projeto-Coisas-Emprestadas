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
    
    echo "Está sendo realizado o empréstimo de ".$_POST["item"]. " para o usuário chamado ".$_POST["usuario"]. " na data de ". $hoje. "<br><br>";



    echo "A data prevista para devolução é para ". $devolucao. ". Em caso de não devolução, contatar ".$_POST["usuario"]. " pelo telefone " . formataTelefone($_POST["fone"]).".";
?>