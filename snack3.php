<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack3</title>
</head>

<body>


    <h2>Snack 3:</h2>
    <p>
        Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta 
    </p>

    <?php
        $numbers=[];
        
        while (count($numbers) < 15){
            $randomNumber = rand(1,100);
            if (!in_array($randomNumber, $numbers)){
                $numbers[]= $randomNumber;
            }
        }

        var_dump($numbers);

    ?>

    <ul>
        <?php
            for ($i=0; $i < count($numbers); $i++) { ?>
            <li>
                <?php
                    echo $numbers[$i];
                ?>
            </li>    
        <?php } ?>

    </ul>

    
</body>
</html>




