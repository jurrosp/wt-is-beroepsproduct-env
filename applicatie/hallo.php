<?php
    $voornaam = $_GET['voornaam'];
    $age = $_GET['leeftijd'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Hallo</title>
</head>
<body>
    <h1>hall</h1>

    Hoi <?= $voornaam ?>. Je bent <?= $age ?> jaar.
</body>
</html>