<?php 

$post_username = $_POST['username'];
$post_password = $_POST['password'];

$string = "select * from login where username  = '" . $post_username ."' and password = '" .$post_password. "'";


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "addressbook";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

$result = $connection -> query($string);

if( $result &&  mysqli_num_rows($result) == 1){
	session_start();
	$_SESSION["username"] = $post_username;
	header("location: home.php");
}
else
echo "invalid username and password";



 ?>