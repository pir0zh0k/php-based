<?php
    session_start();

    if(isset($_SESSION['user'])) {
        header('Location: index.php');
        exit;
    }

    $users = [
        "admin" => "123",
        "user" => "456"
    ];

    if($_POST['login'] && $_POST['password']) {
        $login = $_POST['login'];
        $pass = $_POST['password'];

        if(isset($users[$login]) && $users[$login] === $pass) {
            $_SESSION['user'] = $login;
            header("Location: dashboard.php");
            exit;
        }
    }

    header("Location: index.php?error=1");
    exit;
?>