<?php 

	if(!isset($_POST['full_name']) && !isset($_POST['nick_name']) && !isset($_POST['phone_number'])
		&& !isset($_POST['address']) && !isset($_POST['date_of_birth']))
		{
			die("All data not recieved!");
		}

	session_start();
//making connections	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "addressbook";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

$string = "insert into contacts (username,full_name,nick_name,phone_number,address,date_of_birth) values ('".$_SESSION["username"]."','".$_POST['full_name']."','".$_POST['nick_name']."','" .$_POST['phone_number']. "','".$_POST['address']."','".$_POST['date_of_birth']."')";


$connection -> query($string);

header("location: home.php");


 ?>