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
  ],
  'Toetjes' => [
    'IJsje' => 4.50, 
    'Kaasplank' => 7.41
  ]
];
// invoer controle
$soort = '';
if (isset($_GET['soort'])) {
  $soort = $_GET['soort'];
  if (!isset($menu[$soort])) {
    $soort = '';
  }
}
function genereerMenukaart($menu, $soort = '') {
  $html = "";
  if ($soort) {
    $html .= "<h2>$soort</h2>";
    $html .= genereerProducten($menu[$soort]);
  } else {
    foreach ($menu as $categorie => $producten) {
      $html .= "<h2>$categorie</h2>";
      $html .= genereerProducten($producten);
    }
  }
  return $html;
}
function genereerProducten($producten) {
  $html = "<table>\n";
  foreach ($producten as $product => $prijs) {
    $html .= "<tr>\n";
    $html .= "<td>$product</td>\n";
    $html .= "<td>$prijs</td>\n";
    $html .= "</tr>\n";
  }
  $html .= "</table>\n";
  return $html;
}
$htmlMenu = genereerMenukaart($menu, $soort);
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
    <form action="#" method="GET">
      <select name="soort">
        <option value="">Alles</option>
        <option value="Eten">Lekker eten</option>
        <option value="Drinken">Zuip wat</option>
        <option value="Toetjes">Nagerecht</option>
      </select>
      <button type="submit">Verstuur</button>
    </form>
    <h1>Menu</h1>
    
    <?= $htmlMenu ?>
  </body>
</html>