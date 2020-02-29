<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit file Data</title>
  <!-- Latest compiled and minified Bootstrap CSS -->
<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="css/main.css" rel="stylesheet" type="text/css">
	<!-- Latest compiled Bootstrap JavaScript -->
<script src="js/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- latest jQuery library -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</head>

<body>

  <?php
  // include database connection file
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "albumdb";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  // Check if form is submitted for update, then redirect to homepage after update
  if(isset($_POST['update']))
  {
  	$albumid   = $_POST['albumid'];
  	$albumname =$_POST['albumname'];
  	$time      =$_POST['time'];
    $introduce =$_POST['introduce'];
    $photo     =$_POST['photo'];
  	// update genre data
  	$sql = ("UPDATE album SET albumname='$albumname' WHERE albumid=$albumid");
  	$result = $conn->query($sql);
  	// Redirect to homepage to display updated genre in list
  	header("Location: read-edit-link.php");
  }

  // Display selected album data based on $albumid
  // Getting $albumid from url
  $albumid = $_GET['albumid'];

  // Fetch album data based on $albumid
  $sql = "SELECT * FROM album WHERE albumid=$albumid";
  $result = $conn->query($sql);
  while($row =$result->fetch_assoc())
  {
  	$albumname   = $row['albumname'];
    $time        = $row["time"];
    $introduce   = $row["introduce"];
    $photo       = $row["photo"];
  }
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
	      <li class="nav-item"> <a class="nav-link" href="create.php">create</a> </li>
	      <li class="nav-item"> <a class="nav-link" href="read.php">read</a> </li>
	    </ul>
	  </div>
	</nav>
  <div class="container">
      <h1>Update file Data</h1>
    <div class="row">

	<form name="update_user" method="post" action="update.php">
		<table border="0">
			<tr>
				<td>albumname</td>
				<td><input type="text" name="albumname" value=<?php echo $albumname;?>></td>
			</tr>

      <tr>
				<td>time</td>
				<td><input type="text" name="time" value=<?php echo $time;?>></td>
			</tr>

      <tr>
				<td>introduce</td>
				<td><input type="text" name="introduce" value=<?php echo $introduce;?>></td>
			</tr>

      <tr>
				<td>photo</td>
				<td><input type="text" name="photo" value=<?php echo $photo;?>></td>
			</tr>

			<tr>
				<td><input type="hidden" name="albumid" value= <?php echo $_GET['albumid'];?> ></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</div>
</div>
</body>
</html>
