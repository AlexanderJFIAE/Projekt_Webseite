<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBS Bestätigung</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hinzugefügt_style.css">
    <link rel="stylesheet" href="css/navbar_style.css">
    <link rel="stylesheet" href="css/addBtn_style.css">
</head>
<body>
    <?php
require_once 'connection.php';
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
        
        <div class="element1">
    <h1>SNEAKER ERFOLGREICH HINZUGEFÜGT</h1>
       </div>

        <div class="element2">
    <p>Far far away, behind the word mountains, far from the countries Vokalia and<br>
        Consonantia, there live the blind texts. Separated they live in Bookmarks<br>
        grove right at the coast of the Semantics, a large language ocean.
    </p>

  <div class="addContainer">
    <span class="menu"><a href="formular.php">NEUEN SNEAKER HINZUFÜGEN</a></span>
  </div>


    </div>

    <div class = "parentContainer">

    <div class ="element4">
        <h3><a href="impressum.php">IMPRESSUM</a><h3>
    </div>

    <div class ="element5">
    <img src="img/imgVejasBlack.png"   alt="SNEAKER" style="float:right" />
    </div>
     
    </div>

</body>
</html>