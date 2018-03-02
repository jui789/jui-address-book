<?php 

if(!isset($_GET["id"]))
header("location: home.php");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "addressbook";

// Creating connection
$connection = new mysqli($servername, $username, $password, $dbname);

$string = "DELETE FROM contacts where id='" .$_GET["id"]."'";

$connection->query($string);

header("location: home.php");


 ?>