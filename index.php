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

        switch($a) {
            case "10":
                echo "Вы ввели 10";
                break;
            case 11:
                echo "Вы ввели 11";
                break;
            default:
                echo "";
                break;
        }

        // switch($a):
        //     case 11:
        //         echo "Вы ввели 11";
        //         break;
        //     case 12:
        //         echo "Вы ввели 12";
        //         break;
        //     default:
        //         echo "";
        //         break;
        // endswitch

        $result = match ($a) {
             "10" => "Вы ввели 10",
             11 => "Вы ввели 11",
             default => "Совпадений не найдено"
        };

        echo $result;
    ?>
</body>
</html>