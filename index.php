<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        $age = 11;

        $result = $age > 12 ? "Вам больше 12" : "Вам меньше 12";

        echo $result;

        // if($age == 18) {
        //     echo "Вам есть 18";
        // } 
        // elseif($age > 12) {
        //     echo "Вам больше 12-ти";
        // }
        // else {
        //     echo "Вам нет 18-ти";
        // }

        // if ($age == 18):
        //     echo "Вам есть 18";
        // elseif($age > 12):
        //     echo "Вам больше 12-ти";
        // else:
        //     echo "Вам нет 18-ти";
        // endif;
    ?>
</body>
</html>