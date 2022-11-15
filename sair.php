<?php 
session_start(); 
unset($_SESSION["nome"]);
unset($_SESSION["mail"]); 
session_destroy(); 
?>