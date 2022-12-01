<?php
    $dag = $_GET['datum'];
    
    $weekDag = date_create($dag)->format('w');

    //var_dump($weekDag);

    $zondag = 0;
    $maandag = 1;
    $dinsdag = 2;
    $woensdag = 3;
    $donderdag = 4;
    $vrijdag = 5;
    $zaterdag = 6;

    if($weekDag == 6 || $weekDag == 0){
        echo '<strong> Jaaaaa, het is weekend! </strong>';
    }
    else if($weekDag == 1 || $weekDag == 2){
        echo '<strong> Nee, nog lang niet. </strong>';
    }
    else if($weekDag == 3 || $weekDag == 4){
        echo '<strong> Nog even wachten. </strong>';
    }
    else if($weekDag == 5){
        echo '<strong> Bijna! </strong>';
    }



?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Is het al weekend?</title>
</head>
<body>    
</body>
</html>