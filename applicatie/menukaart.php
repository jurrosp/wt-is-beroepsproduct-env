<?php

$soort;
if (isset($_GET['soort'])) {
  $soort = $_GET['soort'];
}

$menu = [
  "Eten" => [
    "Shoarma" => 6.95,
    "Appels" => 10.95,
    "Tabouleh" => 8.95,
    "Hamburger" => 5.50
  ],
  "Drinken" => [
    "Cola" => 2.00,
    "Ayran" => 2.30,
    "Fernandes" => 2.50,
    "Bier" => 5.50
  ],
  "Toetjes" => [
    "Ijsje" => 4.39,
    "Kaasplank" => 7.42
  ]
];
function genereerMenukaart($menu)
{
  $html = "";
  foreach ($menu as $categorie => $producten) {
    $html .= "<h2>$categorie</h2>";
    $html .= genereerProducten($producten);
  }
  return $html;
}
function genereerProducten($producten)
{
  $html = "<table>";
  if (isset($_GET['soort'])) {
    $titel = $_GET['soort'];
    $html .= "<h2>$titel</h2>";
  }
  foreach ($producten as $product => $prijs) {
    $html .= "<tr>";
    $html .= "<td>$product</td>";
    $html .= "<td>$prijs</td>";
    $html .= "</tr>";
  }
  $html .= "</table>";
  return $html;
}

if (isset($_GET['soort'])) {
  $htmlMenu = genereerProducten($menu[$soort]);
} else {
  $htmlMenu = genereerMenukaart($menu);
}

?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <title>Restaurantmenu</title>
  <style>
    td:first-child {
      width: 8em;
    }

    td:nth-child(2) {
      font-style: italic;
      text-align: right;
      width: 4em;
    }
  </style>
</head>

<body>
  <h1>Menu</h1>

  <?= $htmlMenu ?>
</body>

</html>