<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат отправки:</title>
</head>
<body>
    <h2>Данные формы:</h2>

    <?php
        if($_SERVER['REQUEST_METHOD'] === "POST") {
            $name = $_POST['name'] ?? '';
            $gender = $_POST['gender'] ?? '';
            $city = $_POST['city'] ?? '';
            $agree = $_POST['agree'] ?? '';
            $secret = $_POST['secret'] ?? '';
            $hobbies = $_POST['hobbies'] ?? [];

            echo "<p>Имя: <strong>".htmlspecialchars($name)."</strong></p>";
            echo "<p>Пол: <strong>".htmlspecialchars($gender)."</strong></p>";
            echo "<p>Город: <strong>".htmlspecialchars($city)."</strong></p>";
            echo "<p>Хобби: <strong>";
                if(empty($hobbies)) {
                    echo "Хобби не выбраны";
                } else {
                    echo implode(',', array_map('htmlspecialchars', $hobbies));
                }
            echo "</strong></p>";
            echo "<p>Согласие: <strong>". $agree ? 'Да' : 'Нет' ."</strong></p>";
            echo "<p>Скрытое поле: <strong>".htmlspecialchars($secret)."</strong></p>";
        } else {
            echo "<h2 style='color:red;'>Форма не была отправлена</h2>";
        }
    ?>

    <hr>
    <a href="../">Вернуться на форму</a>
</body>
</html>