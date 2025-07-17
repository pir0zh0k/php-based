<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        for($i = 0; $i < 10; $i++){
            for($j = 0; $j < 10; $j++) {
                echo '$j + $i: ' . $j + $i . "<br>";
            }

            echo $i . "<br>";
        }

        // $i = 0;

        // while($i < 10)  echo $i++ . "<br>";

        // do {
        //     echo $i . "<br/>";
        //     $i++;
        // } while($i < 10);
    ?>
</body>
</html>