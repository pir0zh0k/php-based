<?php
session_start();

if(!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

$user = $_SESSION['user'];
$upload_dir = "uploads/";
$avatar_path = $upload_dir . $user . '.jpeg';

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['avatar'])) {
    $file = $_FILES['avatar'];

    if($file['error'] === UPLOAD_ERR_OK && $file['size'] > 0) {
        if(!is_dir($upload_dir)) mkdir($upload_dir, 0755, true);

        move_uploaded_file($file['tmp_name'], $avatar_path);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <p>Добро пожаловать, <?= htmlspecialchars($_SESSION['user']) ?>. Это личный кабинет.</p>

    <?php if(file_exists($avatar_path)):?>
        <img src="<?= $avatar_path ?>?<?= time()?>" width="150"/><br/>
    <?php else: ?>
        <p>Аватара нет</p>
    <?php endif; ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="avatar" accept="image/*" />

        <button>Загрузить</button>
    </form>

    </br>

    <a href="logout.php">Выйти</a>
</body>
</html>


