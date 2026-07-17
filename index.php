<?php
    $allowed_themes = ['light', 'dark'];

    if(isset($_GET['theme']) && in_array($_GET['theme'], $allowed_themes, true)) {
        $theme = $_GET['theme'];

        setcookie('theme', $theme, [
            'expires' => time() + 60 * 60 *24 * 30,
            'path' => "/",
            'secure' => !empty($_SERVER['HTTPS']),
            'httponly' => true,
            'samesite' => 'lax'
        ]);
    } else {
        $theme = $_COOKIE['theme'] ?? 'light';

        if(!in_array($theme, $allowed_themes, true)) {
            $theme = 'light';
        }
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
<body style="background: <?= $theme === 'dark' ? '#222' : '#fff' ?>; color: <?= $theme === 'dark' ? '#fff' : '#222' ?>;">
    <h2>Тема сайта: <?= htmlspecialchars($theme) ?></h2>

    <a href="?theme=light">Светлая тема</a>
    <a href="?theme=dark">Темная тема</a>
</body>
</html>