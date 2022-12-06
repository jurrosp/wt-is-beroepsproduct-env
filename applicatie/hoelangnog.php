<?php
//header('Refresh:0');

$naam = 'Jurre Peeters';

//var_dump($_GET['omschrijving']);
//var_dump($_GET['datum']);

$holiday = $_GET['omschrijving'];
$datum = $_GET['datum'];

$vandaag = date_create('now');
$event = date_create($datum);
$wachtTijd = date_diff($vandaag, $event);
$timeBetween = $wachtTijd->format('%m maanden %d dagen %H uur %i minuten %s seconden');




?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Hoelang moeten we nog wachten?</title>
</head>
<body>
    <strong>Welkom <?= $naam ?>!</strong><br><br>
    Het duurt nog <i><?= $timeBetween?></i> tot <strong><?= $holiday?>.</strong>
    
</body>
</html>