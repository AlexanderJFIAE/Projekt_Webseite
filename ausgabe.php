<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MBS Sammlung</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/ausgabe_style.css">
  <link rel="stylesheet" href="css/navbar_style.css">
  <link rel="stylesheet" href="css/addBtn_style.css">
</head>

<body>
<div class="topnav" id="mytopnav">
    <a href="index.html" id="home">HOME</a>
    <a href="ausgabe.php" id="Sammelung">SAMMLUNG</a>
    <a href="formular.php" id="add">HINZUFÜGEN</a>
    <form action="formular.php">
        <input type="text" id="myinput" name="search" method="POST"> 
        <input type="submit" hidden>
    </form>
    <img src="svg/logoSneakers.svg" id="sneakersammelung">
</div>

<div id="content-wrap">
<?php
require_once 'connection.php';

$sql = "SELECT id, marke, preis, farbe, modell, getragen, kaufdatum, bild FROM sneaker";
$result = mysqli_query($conn, $sql);
?>

<h1>SNEAKER SAMMLUNG</h1>
<p>Far far away, behind the word mountains, far from the countries Vokalia and<br>
Consonantia, there live the blind texts. Separated they live in Bookmarks<br>
grove right at the coast of the Semantics, a large language ocean.</p>
<?php
if (mysqli_num_rows($result) > 0) {
  // html-table header
  echo 
  "
  <div class='grid-container' id='first-grid-container'>
    <div class='grid-header label'><label>ID</label></div>
    <div class='grid-header label'></div>
    <div class='grid-header label'><label>Marke</label></div>
    <div class='grid-header label'><label>Modell</label></div>
    <div class='grid-header label'><label>Preis</label></div>
    <div class='grid-header label'><label>Kaufdatum</label></div>
    <div class='grid-header label'><label>Farbe</label></div>
    <div class='grid-header label'><label>Neu</label></div>
    <div class='grid-header label'></div>
    <div class='grid-header label'></div>
  </div>
  <div class='grid-container' id='second-grid-container'>
  ";

  // output every db entry
  // TODO FUNCTIONALITY OF CHANGE BUTTON
  while($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    echo 
    "
    <div class='grid-item tableA'><h2>" . htmlspecialchars($id) . "</h2></div>
    <div class='grid-item img-container  tableA'><img src='" . htmlspecialchars($row["bild"]) . "' alt='" . htmlspecialchars($row["bild"]) . "' height=auto width='100'></div>
    <div class='grid-item tableA'><h2 class='bold'>" . htmlspecialchars($row["marke"]) . "</h2></div>
    <div class='grid-item tableA'><h2 class='bold'>" . htmlspecialchars($row["modell"]) . "</h2></div>
    <div class='grid-item tableA'><h2>" . htmlspecialchars($row["preis"]) . " €</h2></div>
    <div class='grid-item tableA'><h2>";
    $source = $row["kaufdatum"];
    $date = new DateTime($source);
    echo $date->format('d.m.Y');
    echo
    "</h2></div>
    <div class='grid-item tableA'><h2>" . htmlspecialchars($row["farbe"]) . "</h2></div>
    <div class='grid-item img-container tableA'>";
    if ($row['getragen'] == 'J') {
      echo "<img class='little-icon' src='svg/trueIcon.svg' alt='Ja'>";
    }
    echo "</div>";
    echo "
    <div class='grid-item img-container tableB small-column'><a href='change.php?toChange=" . $id . "'><img class='little-icon' src='svg/editIcon.svg' alt='Ändern'></a></div>
    <div class='grid-item img-container tableB'><a href='delete.php?toDelete=" . $id . "'><img class='little-icon' src='svg/deleteIcon.svg' alt='Löschen'></a></div>
    ";
  }
  
  // close grid container
  echo "</div>";

} else {
  echo "Keine Ergebnisse gefunden.";
}
?>

</div> <!-- content-wrap end -->
<footer>
  <h3><a href="impressum.php">IMPRESSUM</a><h3>
  <h3>
    <div class="addBtnContainer">            
        <a href="formular.php">
            <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31 3.5C31 1.56702 29.433 0 27.5 0C25.567 0 24 1.56702 24 3.5V24H3.5C1.56702 24 0 25.567 0 27.5C0 29.433 1.56702 31 3.5 31H24V51.5C24 53.433 25.567 55 27.5 55C29.433 55 31 53.433 31 51.5V31H51.5C53.433 31 55 29.433 55 27.5C55 25.567 53.433 24 51.5 24H31V3.5Z" fill="#555555"/>
            </svg>
        </a>
    </div>
  </h3>
</footer>
</body>
</html>