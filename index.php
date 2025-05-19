<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        $fruits = ['apple', 'banana', 'cherry'];
        $user = ['name' => 'Jhon'];

        // $fruits[] = 'orange';
        // array_push($fruits, 'orange', 'melon');
        // $user['age'] = 21;

        // unset($user['name']);
        // $fruits = array_values($fruits);

        // array_pop($fruits);

        array_shift($fruits);

        var_dump($fruits);
        echo '<br/>';
        var_dump($user);
    ?>
</body>
</html>