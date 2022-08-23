<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Snack  1</title>
</head>
<body>

    
<?php

    $matches=[

        [
            'team_1'=> 'Washington Wizards',
            'team_2'=> 'Golden State Warriors',
            'points_team_1'=> 120,
            'points_team_2'=> 88

        ],

        [
            'team_1'=> 'Chicago Bulls',
            'team_2'=> 'Toronto Raptors',
            'points_team_1'=> 95,
            'points_team_2'=> 79

        ],

        [
            'team_1'=> 'Los Angeles Lakers',
            'team_2'=> 'New York Knicks',
            'points_team_1'=> 123,
            'points_team_2'=> 33

        ],

        [
            'team_1'=> 'Atlanta Hawks',
            'team_2'=> 'Brooklyn Nets',
            'points_team_1'=> 95,
            'points_team_2'=> 22

        ],

        [
            'team_1'=> 'Phoenix Suns',
            'team_2'=> 'Dallas Mavericks',
            'points_team_1'=> 99,
            'points_team_2'=> 106

        ],
    ];

?>

<h2>Snack 1:</h2>
<p>
    Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60
</p>

<?php for ($i=0; $i <count($matches); $i++ ) { ?>
    <h4>
        <?php
        echo $matches[$i]['team_1'] . ' - ' . $matches[$i]['team_2'] . ' | ' . $matches[$i]['points_team_1'] . '-' . $matches[$i]['points_team_2']; 
        ?>

    </h4>      

 <?php } ?>
 
</body>
</html>