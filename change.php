<!-- 
This file is the formular for changing db-entries.
To update another formular.php into change.php it's important to:
    -> add this:
        require_once 'connection.php';

        $id = $_GET['toChange'];

        $sql = "SELECT id, marke, preis, farbe, modell, getragen, kaufdatum FROM sneaker WHERE id = " . $id;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $marke = $row["marke"];
        $preis = $row["preis"];
        $farbe = $row["farbe"];
        $modell = $row["modell"];
        $getragen = $row["getragen"];
        $kaufdatum = $row["kaufdatum"];
        $getragenJ = "";
        $getragenN = "";

        if ($getragen == J) {
            $getragenJ = 'checked = "checked"';
        } else {
            $getragenN = 'checked = "checked"';
        }

    -> delete unnecessary things like the img-upload (we don't need to change the img)
    -> set the values of every input (except the radio buttons) to the associated variables
    -> update the db query (update instead of create)
    -> insert the $getragenJ and $getragenN as attributes in the associated input fields

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBS Änderung</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formular_style.css">
    <link rel="stylesheet" href="css/navbar_style.css">
</head>

<body>

<?php 
require_once 'connection.php';

$id = $_GET['toChange'];


$sql = "SELECT id, marke, preis, farbe, modell, getragen, kaufdatum FROM sneaker WHERE id = " . $id;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$marke = $row["marke"];
$preis = $row["preis"];
$farbe = $row["farbe"];
$modell = $row["modell"];
$getragen = $row["getragen"];
$kaufdatum = $row["kaufdatum"];
$getragenJ = "";
$getragenN = "";

if ($getragen == "J") {
    $getragenJ = 'checked = "checked"';
} else {
    $getragenN = 'checked = "checked"';
}
?>

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

<!--
// just for testing
echo "<p>" .
    "marke = " . $marke . "\n" .
    "preis = " . $preis . "\n" .
    "farbe = " . $farbe . "\n" .
    "modell = " . $modell . "\n" .
    "getragen = " . $getragen . "\n" .
    "kaufdatum = " . $kaufdatum .
"</p>";
--> 

<?php
echo
'
<form action="changeLogic.php?toChange=' . $id . '" method="POST"  enctype="multipart/form-data">

<div class = "parentContainerRow2"> 

      <div class = "col21">
        <h1>SNEAKER ÄNDERN</h1>
        <p>Deine heiligen Grails verdienen mehr als nur Screenshots auf deinem Handy. Unsere Sneaker-DB ist der digitale Schrein für deine Rotation – von deinen zerschredderten Beaters bis zu den unberührten Deadstock-Schätzen.</p>
          <!--action ist das Ziel der Daten, method ist Art und Weise,
           wie die Daten gesendet werden sollen --> 
        </div> <!-- ende col21 --> 

      <div class = "col22"></div>

       <div class = "col23">   
              
        <label for="marke">Marke</label><br/>
        <input type="text" name="marke" id="marke" value="' . $marke . '"><br/>

        <label for="modell">Modell</label><br/>
        <input type="text" name="modell" id="modell" value="' . $modell . '"><br/>

        <label for="preis">Preis</label><br/>
        <input type="text" name="preis" id="preis" value="' . $preis . '"><br/>
        </div>  

      <div class = "col24">

      <label for="kaufdatum">Kaufdatum</label><br/>
      <input type="date" name="kaufdatum" id="kaufdatum" value="' . $kaufdatum . '"><br/><br/>

      <label for="farbe">Farbe</label>
         <select id="farbe" name="farbe" value="' . $farbe . '">
         <option value="weiss">Weiss</option>
         <option value="schwarz">Schwarz</option>
         <option value="grau">Grau</option>
         <option value="beige/off-white">Beige/Off-White</option>
         <option value="rot">Rot</option>
         </select><br><br>

        <label for="getragen">getragen?</label><br/>
        <input type="radio" id="ja" name="getragen" value="J" required ' . $getragenJ . '>
        <label for="ja">Ja</label>
        <input type="radio" id="nein" name="getragen" value="N" required ' . $getragenN . '>
        <label for="nein">Nein</label>
        
         <button type="submit" name="submit"><span class="menu">SNEAKER ÄNDERN</span></button>
      </div > <!-- ende div22 -->
      </div> <!-- ende parentContainerRow2 -->
      </form>

      <div class = "parentContainerRow3">
        <h3><a href="impressum.php">IMPRESSUM</a><h3>

  <!--      <div class = "col32"><img src="./img/imgBlueVejas.png" alt="Nur Schuh" width="500" >
        <img src="./img/imgVejasLaufen.png" alt="Nur Schuh" width="300" ></div>
        <div class = "col33"></div>-->
      </div>
';
?>
     
    
</body>
</html>