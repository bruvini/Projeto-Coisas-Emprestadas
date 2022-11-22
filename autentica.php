<?php

    //reiniciar a sessão
    session_start();

    //se não existe o valor de id do usuário guardado na sessão
    if (!isset($_SESSION['idUser'])){
        header("Location: index.php?auth=1");
    }


?>