<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <table>
        <?php
        for ($i = 1; $i < 10; $i++):
        ?>
            <tr>
                <?php
                for($j = 1; $j < 10; $j++):
                ?>
                    <td>
                        <?php echo $i * $j;?>
                    </td>
                <?php
                endfor;
                ?>
            </tr>
        <?php
        endfor;
        ?>
    </table>
</body>
</html>