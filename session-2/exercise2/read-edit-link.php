<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>php file edit</title>
	<!-- Latest compiled and minified Bootstrap CSS -->
<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="css/main.css" rel="stylesheet" type="text/css">
	<!-- Latest compiled Bootstrap JavaScript -->
<script src="js/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- latest jQuery library -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<style>
	table {
	  border-collapse: collapse;
	  width: 100%;
		margin-bottom: 10px;
	}

	th{
		text-align: center;
		padding: 8px;
	}
	 td {
	  text-align: left;
	  padding: 8px;
	}

	tr:nth-child(even) {background-color: #f2f2f2;}
</style>
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

    $sql = "SELECT * FROM album";
   $result = $conn->query($sql);

    if ($result->num_rows > 0) {
	        // output data of each row
	        echo "<table>
					<th>albumid</th>
					<th>albumname</th>
					<th>time</th>
					<th>introduce</th>
					<th>photo</th>
					<th>Edit</th>";

	         while($row =$result->fetch_assoc()) {
	       echo "<tr>
					 <td> " . $row["albumid"] . "</td>
					 <td> " . $row["albumname"] . "</td>
					 <td> " . $row["time"] . "</td>
					 <td> " . $row["introduce"] . "</td>
					 <td> " . $row["photo"] . "</td>
					 <td><a href='update.php?albumid=".$row["albumid"]."'>Update</a></td>
       				 <td><a href='delete.php?albumid=".$row["albumid"]."'>Delete</a></td>


					 </tr>";

         }
        echo "</table>";

	    } else {
	        echo "0 results";
    }

    $conn->close();
?>



</body>
</html>
