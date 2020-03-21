<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "omdb";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$sql = "SELECT * FROM films";

	$result = mysqli_query($conn, $sql);

?>
