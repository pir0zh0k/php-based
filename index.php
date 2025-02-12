<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    $a = 10;
    $b = "20";

    echo is_integer($a);
    echo is_string($a);
    echo is_double($a);
    echo is_numeric($a);
    echo is_bool($a);
    echo is_scalar($a);
    echo is_null($a);
    echo is_array($a);
    echo is_object($a);
    ?>
</body>
</html>