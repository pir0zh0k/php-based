<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        $a = 8;
        $b = 10;

        $showNumber = function($c) use($a, $b) {
            return $a + $b +$c;
        };

        $result = $showNumber(20);
        echo $result;
    ?>
</body>
</html>