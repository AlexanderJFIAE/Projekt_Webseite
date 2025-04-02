<?php
$servername = "localhost";
$username = "root"; //Standart Xammp username: root
$password = "";
$db_name = "sneakerdb";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>