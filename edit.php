
<!DOCTYPE html>
<html>
<head>
	<title>Edit Contact</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Addressbook</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="home.php">Home</a></li>
      <li><a href="add_contact.html">Add contact</a></li>
     
    </ul>
  </div>
</nav>

	<div class="container">
<form class="form-horizontal" action="Update.php" method="POST">
	<div class="form-group">
		<label class="control-label col-sm-2" for="full_name">Full name : </label>
		<div class="col-sm-4">
			<input type="text" class="form-control" name="full_name" value= "<?= (isset($_GET["full_name"])) ? $_GET["full_name"] : '';?>">
		</div>
	</div>
	<div class="form-group">
	<label class="control-label col-sm-2" for="email">Nick name : </label>
		<div class="col-sm-4">
			<input type="text"  class="form-control" name="nick_name"
			value= "<?= (isset($_GET["nick_name"])) ? $_GET["nick_name"] : '';?>">
		</div>
	</div>

	<div class="form-group">
	<label class="control-label col-sm-2" for="phone_number">Phone Number : </label>
		<div class="col-sm-4">
			<input type="text"  class="form-control" id="phone_number" name="phone_number"
			value= "<?= (isset($_GET["phone_number"])) ? $_GET["phone_number"] : '';?>">
		</div>
	</div>

	<div class="form-group">
	<label class="control-label col-sm-2" for="address">Address : </label>
		<div class="col-sm-4">
			<input type="text"  class="form-control" name="address"
			value= "<?= (isset($_GET["address"])) ? $_GET["address"] : '';?>">
		</div>
	</div>


	<div class="form-group">
	<label class="control-label col-sm-2" for="date_of_birth">Date of Birth : </label>
		<div class="col-sm-4">
			<input type="date"  class="form-control" name="date_of_birth"
			value= "<?= (isset($_GET["date_of_birth"])) ? $_GET["date_of_birth"] : '';?>">
		</div>
	</div>

	<input type="hidden" name="id" value= "<?= (isset($_GET["id"])) ? $_GET["id"] : '';?>">
	<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
</div>
</body>
</html>