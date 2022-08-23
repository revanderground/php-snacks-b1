<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack7</title>
</head>
<body>
    <h2>Snack7</h2>
    <p>
        Creare un array contenente qualche alunno di un'ipotetica classe. 
        Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
        Stampare Nome, Cognome e la media dei voti di ogni alunno.
    </p>
    
    <?php
        $ClasseXXX=[

            [
                'Nome'=> 'Son',
                'Cognome'=> 'Goku',
                'voti'=> [8,9,7,6,6,2,4],
    
            ],

            [
                'Nome'=> 'Monkey D',
                'Cognome'=> 'Rufy',
                'voti'=> [9,9,7,6,8,2,7],
    
            ],

            [
                'Nome'=> 'Majin',
                'Cognome'=> 'Bu',
                'voti'=> [8,9,7,6,6,2,1],
    
            ],

            [
                'Nome'=> 'Roberto',
                'Cognome'=> 'Baggio',
                'voti'=> [6,9,10,5,7,7,4],
    
            ],

            [
                'Nome'=> 'Michael',
                'Cognome'=> 'Jackson',
                'voti'=> [3,1,2,6,6,2,4],
    
            ],

            [
                'Nome'=> 'Avril',
                'Cognome'=> 'Lavigne',
                'voti'=> [8,9,7,9,6,1,5],
    
            ],

            [
                'Nome'=> 'Leonardo',
                'Cognome'=> 'Di Caprio',
                'voti' => array(10,9,10,6,2,2,9),
    
            ],

        ]

    ?>

    <?php for ($i=0; $i <count($ClasseXXX); $i++ ) { ?>
        <h4>
            <?php
                echo $ClasseXXX[$i]['Nome']  . ' ' . $ClasseXXX[$i]['Cognome'] . ' | ' .  $ClasseXXX[$i][$voti] ;
                $media = array_sum ($voti) / count ($voti);
                echo "$media";
            
            ?>

        </h4> 

    <?php } 

    ?>

    <p>
        <?php
        var_dump($ClasseXXX);
        ?>
    </p>

</body>
</html>