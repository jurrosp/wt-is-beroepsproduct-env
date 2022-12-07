<?php

include 'db_connectie.php'

 function haalAlleFilmsOp() {
    $data = $verbinding->query("SELECT stuknr, titel, genrenaam, n.omschrijving FROM stuk s LEFT OUTER JOIN niveau n ON s.niveaucode = n.niveaucode");
    return $data;
};

function filmsNaarHTML($films){
    $html = '';
    foreach($films as $film){

    }
    return $html;
}

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alle films</title>
</head>

<body>
    <h1>Dit is een overzicht van alle films</h1>
</body>

</html>