<?php 
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

echo "<h2>bem vindo, " . $_SESSION['nome'] . "!</h2>";

echo "<a href='logout.php'>sair</a>";




?>