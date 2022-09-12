<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack#4</title>
</head>
<body>
    
    <?php

        function getArrayOfNumbers($min, $max, $nItems) {

            $newArray = [];

            while(count($newArray) < 15) {
                $number = rand(1, 100);
                if(!in_array($number, $newArray)) {
                    $newArray[] = $number;
                }
            }
            //return $newArray;

            var_dump($newArray);
        }

    ?>
</body>
</html>