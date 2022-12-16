<?php
session_start();

if (!isset($_SESSION['pagecount'])) {
    $_SESSION['pagecount'] = 1;
} else {
    $_SESSION['pagecount']++;
}
// $pagecount = 1;

?>

<html>

<head></head>

<body>

    <h1>Hallo Allemaal</h1>


    Aantal bezoeken: <?= $_SESSION['pagecount'] ?><br><br>
        <form action="" method="post">
            <input type="text" name="username">
            <input type="password" name="pass">
            <input type="submit" value="login">
        </form>
        <a href="logout.php">Log uit</a>

</body>

</html>