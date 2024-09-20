<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>es2</title>
</head>
<body>
    <?php
    $capitale = 1000;
    $tasso = 5;
    $numGiorni = 200;
    $ris = ($capitale * $tasso * $numGiorni) / 36500;
    echo "<p>Il Capitale è pari a $capitale €</p><br>
         <p>Il Tasso è pari a $tasso%</p><br>
         <p>Il numero di giorni è pari a $numGiorni</p><br>
         <h1 style='color:green;'>Interesse calcolato è di $ris €</h1>";
    ?>
</body>
</html>