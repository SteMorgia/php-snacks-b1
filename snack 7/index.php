<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $studenti = [
            [
                "nome" => "Mario",
                "cognome" => "Rossi",
                "voti" => [5,7,4,7,2]
            ],
            [
                "nome" => "Giuseppe",
                "cognome" => "Verdi",
                "voti" => [8,7,6,7,9]
            ],
            [
                "nome" => "Antonio",
                "cognome" => "Giocco",
                "voti" => [8,7,5,7,9]
            ],
        ];

        for($i = 0; $i<count($studenti); $i++) {
            $studente = $studenti[$i];

            $somma = 0;

            $voti = $studente["voti"];

            for($j=0; $j<count($studente["voti"]); $j++) {
                $somma += $studente["voti"][$j];
            }

            $media = $somma / count($voti);

            echo $studente["nome"] . ' ' . $studente["cognome"] . ' ' . $media . '<br>';
        }

        

    ?>
</body>
</html>