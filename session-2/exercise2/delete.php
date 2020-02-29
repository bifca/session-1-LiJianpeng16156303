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

// Get genreid from URL to delete that genre
$albumid = $_GET['albumid'];

// Delete genre row from table based on given genreid
$sql = ("DELETE FROM album WHERE albumid=$albumid");
 if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
// After delete redirect to Home, so that latest genre list will be displayed.
header("Location:read-edit-link.php");
?>
