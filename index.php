<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <main>
        <div class="container pt-3">
            <div class="row gap-3">
                <?php 
                    for ($i = 0; $i < count($hotels); $i++){

                    $hotel = $hotels[$i];
                ?>
                        <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            <?php echo $hotel['name']; ?>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo $hotel['description']; ?></li>
                            <li class="list-group-item">
                                <?php 
                                    if ($hotel['parking'] === true){
                                        ?>
                                            <span>Parcheggio disponibile</span>
                                        <?php
                                    }
                                    elseif ($hotel['parking'] === false){
                                        ?>
                                            <span>Senza parcheggio</span>
                                        <?php
                                    }
                                    else {
                                        ?>
                                            <a href="#">Contatta l'hotel</a>
                                        <?php
                                    }
                                ?>
                            </li>
                            <li class="list-group-item"><span>Voto: <?php echo $hotel['vote']; ?>/5</span></li>
                            <li class="list-group-item"><span>Distanza dal centro: <?php echo $hotel['distance_to_center']; ?> km</span></li>
                        </ul>
                        </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
