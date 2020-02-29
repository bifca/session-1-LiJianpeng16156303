<html>

<body>

<?php
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

    $albumid   = $_POST['albumid'];
    $albumname =$_POST['albumname'];
    $time      =$_POST['time'];
    $introduce =$_POST['introduce'];
    $photo     =$_POST['photo'];

$sql = "INSERT INTO album (albumid, albumname,time,introduce,photo) VALUES ('$albumid', '$albumname', '$time', '$introduce', '$photo')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
    header('refresh:3; url=http://localhost/github/exercise/session-2/exercise2/read-edit-link.php')
?>

<h1>Enter a new record</h1>


</body>
</html>
