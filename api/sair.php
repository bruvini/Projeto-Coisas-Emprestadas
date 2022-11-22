<?php
session_start();

unset($_SESSION["idUser"]);
unset($_SESSION["nomeUser"]);

header("Location: index.php");
?>