<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack4</title>
</head>
<body>
    <h2>Snack 4:</h2>
    <p>
        Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
        Ogni punto un nuovo paragrafo.
    </p>
    
    <br>

    <h4>

        <?php
            echo $longParagraph="
            Incipit Frankenstein di Mary Shelley. Ti rallegrerai nell’apprendere che nessun disastro ha accompagnato l’inizio di un’impresa alla quale tu guardavi con tanti cattivi presentimenti. Sono arrivato qui ieri, e la prima preoccupazione è stata di rassicurarti, cara sorella, sul fatto che sto bene e che nutro una fiducia crescente verso quanto ho intrapreso.
            Sono già molto più a nord di Londra, e mentre cammino per le strade di Pietroburgo sento una fredda brezza di settentrione che mi sfiora le guance, mi rinvigorisce i nervi e mi riempie di gioia. Puoi capire questo mio sentimento? Questa brezza, che arriva dalle regioni verso cui sto andando, mi dà un assaggio di quei climi ghiacciati. Incoraggiati da questo vento pieno di promesse, i miei sogni ad occhi aperti diventano più vividi e appassionati. Cerco invano di convincermi che il polo è il regno del gelo e della desolazione: alla mia fantasia si presenta sempre come una regione piena di bellezza e di delizia. Là, Margaret, il sole è sempre visibile: il suo ampio disco sfiora appena l’orizzonte e diffonde uno splendore perpetuo. Là — se mi consenti, sorella mia, di fidarmi dei navigatori che mi hanno preceduto — la neve e gelo sono banditi, e, veleggiando su un mare calmo, si può essere trasportati in una terra che sorpassa per bellezza e meraviglia ogni regione del mondo finora scoperta.
            I suoi prodotti e il suo aspetto potrebbero essere senza uguali, come certo senza uguali sono i fenomeni dei corpi celesti in quelle solitudini mai raggiunte. Cosa non ci si può aspettare in un paese di luce eterna? Potrei scoprire là il meraviglioso potere che attira l’ago della bussola, e dare ordine alle migliaia di osservazioni celesti che attendono solo questo viaggio per essere sottratte alla loro apparente eccezionalità.";

            $splittedParagraph = explode('.', $longParagraph);

            var_dump($splittedParagraph);

            foreach($splittedParagraph as $longParagraph){
                echo $longParagraph . ".<br />";
            }

        ?>

    </h4>

    
</body>
</html>