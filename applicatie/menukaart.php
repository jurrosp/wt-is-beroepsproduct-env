<?php
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
  ]
];
function genereerMenukaart($menu) {
  $html = "";
  foreach ($menu as $categorie => $producten) {
    $html .= "<h2>$categorie</h2>";
    $html .= genereerProducten($producten);
  }
  return $html;
}
function genereerProducten($producten) {
  $html = "<table>";
  foreach ($producten as $product => $prijs) {
    $html .= "<tr>";
    $html .= "<td>$product</td>";
    $html .= "<td>$prijs</td>";
    $html .= "</tr>";
  }
  $html .= "</table>";
  return $html;
}
$htmlMenu = genereerMenukaart($menu);
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