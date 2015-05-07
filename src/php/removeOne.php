<?php
$servername = "0.0.0.0";
$username = "girgalicious";
$password = "";
$dbname = "videos";

$title = $_POST['title'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM movies WHERE name='$title'";

if ($conn->query($sql) === TRUE) {
    echo "1";
} else {
    echo "0";
}

$conn->close();
?>