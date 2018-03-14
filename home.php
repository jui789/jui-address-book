<?php 

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "addressbook";

// Creating connection
$connection = new mysqli($servername, $username, $password, $dbname);


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 </head>
 <body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Addressbook</a></li>
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


 <div class="row">
 
                <form class="form-horizontal" action="csv_export_import.php" method="post" name="upload_excel" enctype="multipart/form-data">
 
                        <!-- File Button -->
                        <div class="form-group">
                        	<div class="row">
                            <label class="col-md-4 control-label" for="filebutton">Select CSV file to upload</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>
 
                        <!-- Button -->
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>
                </form>
 
            </div>


 		<div class="row">
            <form class="form-horizontal" action="csv_export_import.php" method="post" name="upload_excel"   
                      enctype="multipart/form-data">
                  <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" name="Export" class="btn btn-success" value="export to excel"/>
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
    <th>Delete</th>
    <th>Edit</th>
 	</thead>
  <tbody>

 	<?php 


 		$string = "select * from contacts where username = '". $_SESSION["username"] . "'";
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



           echo "<a href='delete.php?id=" . $row['id']. "'>Delete</a>";
           echo "</td><td>";
           echo "<a href='edit.php?id=" . $row['id']. "&full_name=". $row['full_name'] . "

                &nick_name=". $row['nick_name'] . "&phone_number=". $row['phone_number'] . 
                "&address=". $row['address'] . "
                &date_of_birth=". $row['date_of_birth'] . "'>Edit</a>";

           

           echo "</td></tr>";


         }

 	 ?>
  </tbody>
 </table>
 </div>
 </body>
 </html>

