<?php
require_once 'db_connectie.php';
$db = maakVerbinding();
$sql = 'select stuknr, titel, genrenaam, n.omschrijving, c.naam
        from stuk s 
        left outer join niveau n on s.niveaucode = n.niveaucode
        inner join componist c on s.componistId = c.componistId
        where genrenaam = \'jazz\''; // een qoute escape je met \'
$data = $db->query($sql);
$muziekstukken = '<table>';
foreach($data as $rij)
{
    $stuknr = $rij['stuknr'];
    $titel = $rij['titel'];
    $genrenaam = $rij['genrenaam'];
    $omschrijving = $rij['omschrijving'];
    $naam = $rij['naam'];
    $muziekstukken .= "<tr><td>$stuknr</td><td>$titel</td><td>$naam</td><td>$genrenaam</td><td>$omschrijving</td></tr>";
}
$muziekstukken .= '</table>';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Muziekstukken</title>
</head>
<body>
    <h1>Muziekstukken</h1>
    <?= $muziekstukken ?>
</body>
</html>