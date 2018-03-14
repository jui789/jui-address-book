
<?php 
if(isset($_POST['data'])){
  $value = $_POST['data'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "addressbook";

// Creating connection
$connection = new mysqli($servername, $username, $password, $dbname);
}
  
else
  header("location: home.php");

 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Search Results</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Addressbook</a></li>
      <li><a href="add_contact.html">Add contact</a></li>
      <li><a href="logout.php">Logout</a></li>
      
    </ul>
  </div>
</nav>

<div class="container">


<div class="row">
  <form class="form-horizontal" action="search.php" method="POST">
  <div class="form-group">
    <div class="row">
      <div class="col-sm-offset-4 col-sm-4">
        <input type="text" class="form-control" name="data">
      </div>
      <div class="col-sm-4">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
  </div>
  </div>
  

    
</form>
</div>


<table class="table table-striped">
  <thead>
    <th>Full Name</th>
    <th>Nick Name</th>
    <th>Phone Number</th>
    <th>Address</th>
    <th>Date of Birth</th>
  </thead>
  <tbody>

  <?php 


    $string = "select * from contacts where  full_name like '%$value%' or nick_name like '%$value%' or 
              phone_number like '%$value%' or address like '%$value%' or date_of_birth like '%$value%'";
    $contact_list = $connection -> query($string);

    while($row=$contact_list->fetch_assoc())
         {

           echo "<tr><td>";
           echo $row['full_name'];
           echo "</td><td>";
           echo $row['nick_name'];
           echo "</td>";

           echo "</td><td>";
           echo $row['phone_number'];
           echo "</td>";

           echo "</td><td>";
           echo $row['address'];
           echo "</td>";

           echo "</td><td>";
           echo $row['date_of_birth'];
           echo "</td><td>";

           

           echo "</td></tr>";


         }

   ?>

</div>

</body>
</html>