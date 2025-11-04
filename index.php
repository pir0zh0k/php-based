<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        // $a = 10;
        // $b = 8;

        // $sum = fn($c) => $a + $b + $c;

        // $result = $sum(10);

        // echo $result;

        function sum($numbers, $condition) {
            $result = 0;

            foreach($numbers as $number) {
                if($condition($number)) {
                    $result += $number;
                }
            }

            return $result;
        }

        $myNumbers = [-2, -1, 0, 1, 2, 3, 4];

        $positiveSum = sum($myNumbers, fn($n) => $n > 0);

        $eventSum = sum($myNumbers, fn($n) => $n % 2 === 0);

        echo "Сумма положительных чисел: " . $positiveSum . "<br/>" . "Сумма четных чисел: " . $eventSum;
    ?>
</body>
</html>