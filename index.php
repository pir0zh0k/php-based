<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        // $tom = "Tom";
        // $sam = &$tom;

        // $sam = "Sam";

        // echo "Tom = " . $tom;
        // echo "Sam = " . $sam;

        // function square(&$a) {
        //     $a *= $a;
        //     echo "a = " . $a;
        // }

        // $number = 5;

        // square($number);
        // echo "<br/> Number = " . $number;

        function &checkName(&$name) {
            if($name === "admin") $name = "Tom";
            return $name;
        }

        $userName = "admin";
        $checkedName = &checkName($userName);

        echo "<br/> userName = " . $userName;
        echo "<br/> checkedName = " . $checkedName;
    ?>
</body>
</html>