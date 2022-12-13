<?php
require_once "db_connectie.php";
// ==== DATA LAAG ====
// (deze functie hoort in apart bestand in de data-laag)
function getMuziekstukken()
{
    // maak verbinding
    $db = maakVerbinding();

    // stel sql samen
    //$sql = "select stuknr, titel, genrenaam, niveaucode from stuk";
    $sql = "select stuknr, titel, genrenaam, n.omschrijving
  from stuk s left outer join niveau n on s.niveaucode = n.niveaucode";

    // voer query uit
    $data = $db->query($sql);

    return $data;
}
// ==== VIEW LAAG ====
// (deze functie hoort in apart bestand in de view-laag)
function maakMuziekstukkenOverzicht($data)
{
    // verwerk data
    $html = "<table>";
    foreach ($data as $rij) {
        $stuknr = $rij['stuknr'];
        $titel = $rij['titel'];
        $genrenaam = $rij['genrenaam'];
        $omschrijving = $rij['omschrijving'];

        $html .= "<tr>";
        $html .= "<td>$stuknr</td>";
        $html .= "<td>$titel</td>";
        $html .= "<td>$genrenaam</td>";
        $html .= "<td>$omschrijving</td>";
        $html .= "</tr>";
    }
    $html .= "</table>";
    return $html;
}
// === code voor dit bestand ===
$data = getMuziekstukken();
$html = maakMuziekstukkenOverzicht($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Muziekstukken</h1>  
  <?= $html ?>
</body>
</html>