<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    <h2>Snack 3</h2>
    <p> 
    Crea un array di 10 array letterali che rappresentano un pomodoro, indicando per ognuna varietà, peso e lunghezza. <br>
    Calcola quanto pesano tutti i pomodori e la media del peso di tutti i pommidori.
    </p>

    <?php 
        $pomodori = [
            "classico" => [
                "varietà" => "normale",
                "peso" => 10,
                "lunghezza" => 10,
            ],

            "basic" => [
                "varietà" => "normale",
                "peso" => 20,
                "lunghezza" => 10,
            ],
            "giallo" => [
                "varietà" => "normale",
                "peso" => 10,
                "lunghezza" => 10,
            ],
            "verde" => [
                "varietà" => "normale",
                "peso" => 10,
                "lunghezza" => 10,
            ],
            "special" => [
                "varietà" => "normale",
                "peso" => 80,
                "lunghezza" => 10,
            ],
            "europeo" => [
                "varietà" => "normale",
                "peso" => 50,
                "lunghezza" => 10,
            ],
            "mostruoso" => [
                "varietà" => "normale",
                "peso" => 100,
                "lunghezza" => 10,
            ],
            "genuino" => [
                "varietà" => "normale",
                "peso" => 10,
                "lunghezza" => 10,
            ],
            "tondo" => [
                "varietà" => "normale",
                "peso" => 10,
                "lunghezza" => 10,
            ],
            "quadrato" => [
                "varietà" => "normale",
                "peso" => 10,
                "lunghezza" => 10,
            ],
        ];

        var_dump($pomodori);

        $somma_peso = 0;
    ?>

    <?php foreach ($pomodori as $pomodoro) {
        $somma_peso += $pomodoro["peso"];
    } 
    
    $media_peso = $somma_peso / count($pomodori); 

    echo "La somma del peso dei pomodori è: " . $somma_peso;
    echo "<br>La media del peso dei pomodori è: " . $media_peso;
    ?>

</body>
</html>