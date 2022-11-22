<?php
    include_once 'dbcon.php';

    $id = $_GET["id"];
    $sql = "DELETE FROM emprestimo WHERE idEmprestimo = $id";

    $res = mysqli_query($conn, $sql);
    header("Location: principal.php");
?>