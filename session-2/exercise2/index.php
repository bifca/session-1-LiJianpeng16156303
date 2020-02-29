<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image Gallery</title>
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
<?php

   $servername = "localhost"; //Create a varible contains the database name
   $username   = "root"; //Create a varible contains the database username
   $password   = ""; //Create a varible contains the database password
   $dbname     = "albumdb"; //Create a varible contains the database dbname

  // Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
  // Perform a database sql
      $sql = "SELECT * FROM album";

      //The below code then queries the database using the information from $conn and $sql.
      $result = mysqli_query($conn, $sql);

      if(mysqli_num_rows($result)>0){
		  echo "<div class='container'><h1>Album</h1><div class='row'>";
		$count = 0;
		  while($row = mysqli_fetch_assoc($result)){
			  $count = $count + 2;
			  echo "<div class='col-xs-12 col-sm-6 col-lg-4'>";
			  echo "<img src='".$row["photo"]."'alt=''><h3>".$row["albumname"]."</h3><p>".$row["introduce"]."</p>";
			  echo "</div>";
			  if($count == 12){
				  echo "</div><div class = 'row'>";
				  $count = 0;
			  }
           }
		  echo "</div>";
      }
?>
<footer>
	  <p>Copyright © 2020 Li Jianpeng. All rights reserved</p>
</footer>
</body>
</html>
