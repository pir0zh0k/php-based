<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        // $phone = ["name" => "IPhone", "price" => 80000, "100Гц"];
        // var_dump($phone);
        // echo $phone["name"];
        // echo "<br/>";
        // echo $phone[0];

        // $friends = [["Alice", "Tom"],["Kate", "Bob"]];
        // var_dump($friends);
        // echo $friends[0][0];

        $car = [
            "name" => "Audi",
            "specifications" => [
                "engine_power" => 150,
                "engine_litre" => 6,
            ]
        ];

        var_dump($car);

        echo $car["specifications"]["engine_power"];
    ?>
</body>
</html>