<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "addressbook";

// Creating connection
$connection = new mysqli($servername, $username, $password, $dbname);

$string = "update contacts set full_name = '" . $_POST['full_name'] . "', nick_name = '".$_POST['nick_name']."', phone_number = '" . $_POST['phone_number'] . "', address = '". $_POST['address'] . "', date_of_birth = '" . $_POST['date_of_birth']."' WHERE id='".$_POST["id"]."'";

//echo $string;

$connection->query($string);

header("location: home.php");


 ?>