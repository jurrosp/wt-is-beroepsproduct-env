<?php
header('Refresh:0');
$naam = 'Jurre Peeters';

$vandaag = date_create('now');
//$datum = $vandaag->format('d F Y');
$event = date_create('2022/12/25');
$wachtTijd = date_diff($vandaag, $event);
$timeBetween = $wachtTijd->format('%m maanden %d dagen %H uur %i minuten %s seconden');

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PHP voorbeeld</title>
</head>
<body>
    Welkom <?= $naam ?>!<br>
    Het duurt nog <?= $timeBetween?> tot kerst.
</body>
</html>