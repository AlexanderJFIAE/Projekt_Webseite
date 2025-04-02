<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBS Hinzufügen</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formular_style.css">
    <link rel="stylesheet" href="css/navbar_style.css">
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

        <form action="verarbeitung.php" method="POST"  enctype="multipart/form-data">

<div class = "parentContainerRow2"> 

      <div class = "col21">
        <h1>SNEAKER HINZUFÜGEN</h1>
        <p>Deine heiligen Grails verdienen mehr als nur Screenshots auf deinem Handy. Unsere Sneaker-DB ist der digitale Schrein für deine Rotation – von deinen zerschredderten Beaters bis zu den unberührten Deadstock-Schätzen.</p>
        </div> <!-- ende col21 --> 

      <div class = "col22"></div>

       <div class = "col23">   
              
        <label for="marke">Marke</label><br/>
        <input type="text" name="marke" id="marke"><br/>

        <label for="modell">Modell</label><br/>
        <input type="text" name="modell" id="modell" ><br/>

        <label for="preis">Preis</label><br/>
        <input type="text" name="preis" id="preis"><br/>
        </div>  

      <div class = "col24">

      <label for="kaufdatum">Kaufdatum</label><br/>
      <input type="date" name="kaufdatum" id="kaufdatum" ><br/><br/>

      <label for="farbe">Farbe</label>
         <select id="farbe" name="farbe">
         <option value="weiss">Weiss</option>
         <option value="schwarz">Schwarz</option>
         <option value="grau">Grau</option>
         <option value="beige/off-white">Beige/Off-White</option>
         <option value="rot">Rot</option>
         </select><br><br>
         <label for="getragen">getragen?</label><br/>
        <input type="radio" id="ja" name="getragen" value="J" required>
        <label for="ja">Ja</label>
        <input type="radio" id="nein" name="getragen" value="N" required>
        <label for="nein">Nein</label> 

         <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
        
         <button type="submit" name="submit"><span class="menu">SNEAKER HINZUFÜGEN</span></button>
      </div > <!-- ende div22 -->
      </div> <!-- ende parentContainerRow2 -->
      </form>

      <div class = "parentContainerRow3">
        <h3><a href="impressum.php">IMPRESSUM</a><h3>

  <!--      <div class = "col32"><img src="./img/imgBlueVejas.png" alt="Nur Schuh" width="500" >
        <img src="./img/imgVejasLaufen.png" alt="Nur Schuh" width="300" ></div>
        <div class = "col33"></div>-->
      </div>

     
    
</body>
</html>