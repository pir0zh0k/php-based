<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        function generatePassword(int $upperCount = 2, int $lowerCount = 5, int $digitCount = 3, int $specialCount = 2) {
            $uppercase = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 
                  'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
            
            $lowercase = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
                  'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    
            $digits = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    
            $special = ['!', '@', '#', '$', '%', '^', '&', '*', '-', '_', '=', '+'];

            $password = [];

            for($i = 0; $i < $upperCount; $i++) {
                $randomIndex = array_rand($uppercase);
                $password[] = $uppercase[$randomIndex];
            }

            for($i = 0; $i < $lowerCount; $i++) {
                $randomIndex = array_rand($lowercase);
                $password[] = $lowercase[$randomIndex];
            }

            for($i = 0; $i < $digitCount; $i++) {
                $randomIndex = array_rand($digits);
                $password[] = $digits[$randomIndex];
            }

            for($i = 0; $i < $specialCount; $i++) {
                $randomIndex = array_rand($special);
                $password[] = $special[$randomIndex];
            }

            shuffle($password);

            return implode('', $password);
        }

        echo generatePassword()
    ?>
</body>
</html>