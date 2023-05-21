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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container mt-5">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <?php 
            foreach ($hotels as $element){
                echo '<th scope="col">' .$element['name'] .'</th>';
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <!-- nome hotel -->
        <tr>
            <th scope="row">descrizione</th>
            <?php 
            foreach ($hotels as $element){
                echo '<td>' .$element['description'].'</td>';
            }
            ?>
        </tr>
        <!-- recensione -->
        <tr>
            <th scope="row">recensione</th>
            <?php 
            foreach ($hotels as $element){
                echo '<td class="text-center">' .$element['vote'].'</td>';
            }
            ?>
        </tr>
        <!-- disponibilità parcheggio -->
        <tr>
            <th scope="row">parcheggio</th>
            <?php 
            foreach ($hotels as $element){
                if($element['parking'] == true){
                    echo '<td class="text-center">'.'il parcheggio è incluso nel prezzo'.'</td>';
                }else{
                    echo '<td class="text-center text-danger">'.'non è disponibile il parcheggio'.'</td>';
                }
            }
            ?>
        </tr>
        <!-- distanza dal centro -->
        <tr>
            <th scope="row">chilometri dal centro</th>
            <?php 
            foreach ($hotels as $element){
                echo '<td class="text-center">' .$element['distance_to_center'].' km'.'</td>';
            }
            ?>
        </tr>
    </tbody>
</table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>