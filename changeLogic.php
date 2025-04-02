<?php

require_once 'connection.php';

$id = $_GET["toChange"];
$marke= $_POST["marke"];
$preis= $_POST["preis"];
$farbe= $_POST["farbe"];
$modell= $_POST["modell"];
$getragen= $_POST["getragen"];
$kaufdatum= $_POST["kaufdatum"];

$sql = 'UPDATE sneaker SET ' .
    'marke = "' . $marke . '", ' .
    'preis = "' . $preis . '", ' .
    'farbe = "' . $farbe . '", ' .
    'modell = "' . $modell . '", ' .
    'getragen = "' . $getragen . '", ' .
    'kaufdatum = "' . $kaufdatum . '" ' .
    'WHERE id = ' . $id;

mysqli_query($conn, $sql);
header("Location: ausgabe.php");

$conn->close();

?>
