<?php
$eenTMTien = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$zesTMVijftien = [6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
$samengevoegd = array_merge($eenTMTien, $zesTMVijftien);
$samengevoegdZonderDuplicaten = array_unique(array_merge($eenTMTien, $zesTMVijftien));

$film = [
    'titel' => 'The Lord of The Rings',
    'jaar' => 2012,
    'regisseur' => 'Peter Jackson',
    'hoofdrolspelers' => 'Ian McKellen, Martin Freeman, Richard Armitage, James Nesbitt, Ken Stott, Ian Holm, Christopher Lee, Hugo Weaving, Elijah Wood, Andy Serkins'
];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Hallo</title>
</head>
<body>
    <h1><strong>Welkom!</strong></h1><br>
    <?= print_r($samengevoegd); ?> <br>
    <?= print_r($samengevoegdZonderDuplicaten); ?> <br>
    <?= print_r($film); ?>
</body>
</html>