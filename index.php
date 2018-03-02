<?php 

session_start();


if(isset($_SESSION["username"]))
header("location: home.php");

else


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<center>
<p style="margin-top: 50px"> Please  <a href="login.html">LOGIN</a> Or <a href="registration.html">REGISTER</a> 
</center>
</div>
</body>
</html>