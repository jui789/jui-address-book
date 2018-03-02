<html>
<body>

 <?php 

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


$post_username = $_POST['username'];
$post_password = $_POST['password'];

$string= "insert into login (username,password) values ('" . $post_username . "','" . $post_password ."')";

//echo $string;

$connection -> query($string);

if ($post_username=="") {
	echo "please give your username";
	
}
elseif ($post_password=="") {
	echo "please give your password";
}
 
else echo "successfully registered !";


?>

</body>
</html>