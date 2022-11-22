<?php
    include_once 'dbcon.php';

    $id = $_GET["id"];
    $sql = "DELETE FROM tbUsuarios WHERE idUser = $id";

    $res = mysqli_query($conn, $sql);
    header("Location: listacadastro.php");
?>