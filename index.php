<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        // function myGenerator() {
        //     yield 1;
        //     yield from [2, 3, 4];
        //     yield 5;
        // }

        // foreach(myGenerator() as $number) {
        //     echo $number;
        // }

        function generateNumbers($start, $end) {
            for($i = $start; $i < $end; $i++) {
                yield $i;
            }
        }

        foreach(generateNumbers(4, 10) as $number) {
            echo $number;
        }
    ?>
</body>
</html>