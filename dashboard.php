<?php
session_start();

if(!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}
?>

<p>Добро пожаловать, <?= htmlspecialchars($_SESSION['user']) ?>. Это личный кабинет.</p>
<a href="logout.php">Выйти</a>