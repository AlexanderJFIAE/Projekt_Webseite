<html>
<?php
require_once 'connection.php';

$id = $_GET['toDelete'];
$sql = "delete from sneaker where id=" . $id;
mysqli_query($conn, $sql);

header('Location: ausgabe.php');
exit;
?>