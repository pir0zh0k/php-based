<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        $arr1 = [1, 2, 3, 4, 5];
        $arr2 = ["Tom", "Jhon", "Daniel", "Bobby"];
        $arr3 = ["name" => "Jhon", "age" => 25, "weight" => 45];
        $os = ["Windows 10", "Windows 7", "Windows 8"];

        // var_dump(is_array($arr1));

        // var_dump(count($arr1));
        // var_dump(sizeof($arr2));

        // var_dump(shuffle($arr2));
        // var_dump($arr2);

        // $a = 1;
        // $b = 2;
        // $c = 3;

        // $data = compact("a", "b", "c");
        // var_dump($data);

        // SORT_REGULAR
        // SORT_NUMERIC
        // SORT_STRING

        // var_dump(asort($arr1, SORT_NUMERIC));
        // var_dump(asort($arr2, SORT_STRING));

        // var_dump($arr1);
        // var_dump($arr2);

        // arsort($arr1);

        // var_dump($arr1);

        // krsort($arr3);

        // var_dump($arr3);

        natsort($os);

        var_dump($os);
    ?>
</body>
</html>