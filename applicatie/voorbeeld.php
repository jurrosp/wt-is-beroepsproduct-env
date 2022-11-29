<?php
$naam = 'Jurre Peeters';

$vandaag = date_create('now');
$datum = $vandaag->format('d-m-Y');

echo $_GET['voornaam'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PHP voorbeeld</title>
</head>
<body>
    Hallo <?= $naam ?>.<br>
    Het is vandaag <?= $datum ?>.
</body>
</html>