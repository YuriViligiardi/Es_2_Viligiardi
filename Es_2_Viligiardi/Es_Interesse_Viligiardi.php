<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interesse</title>
</head>
<body>
    <?php
        $interesse; //risultato, ovvero l'interesse dovuto
        $capitale = 10000; 
        $tassoInteresse = 5; 
        $numGiorni = 10; 
        echo "<h1>Colcolo dell'interesse</h1>";
        echo "<p>Capitale = $capitale euro</p>";
        echo "<p>Tasso di interesse = $tassoInteresse %</p>";
        echo "<p>Numero di giorni = $numGiorni</p>";
        $interesse = ($capitale * $tassoInteresse * $numGiorni) / 36500;
        echo "<h2 style='color: green'>L'interesse calcolato è di $interesse €</h2>"
    ?>
</body>
</html>