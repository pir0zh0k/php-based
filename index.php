<?php
    session_start();

    if(isset($_SESSION['user'])) {
        echo "Привет";

        echo "<a href='dashboard.php'>Перейти в кабинет</a>";
        echo "<a href='logout.php'>Выйти</a>";

        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body { font-family: Arial; max-width: 400px; margin: 50px auto; }
        input, button { display: block; width: 100%; padding: 8px; margin: 8px 0; }
        .error { color: red; }
    </style>
</head>
<body>
    <form action="login.php" method="POST">
        <input type="text" name="login" placeholder="Имя пользователя" required> 
        <br/>
        <input type="password" name="password" placeholder="Пароль" required>
        <button type="submit">Войти</button>
    </form>

    <?php if(isset($_GET['error'])): ?>
        <p class="error">Неверный логин или пароль</p>
    <?php endif;?>
</body>
</html>