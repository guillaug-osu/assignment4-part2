<?php
$servername = "0.0.0.0";
$username = "girgalicious";
$password = "";
$dbname = "videos";

$title = $_POST['title'];
$check = $_POST['check'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($check == 0)
{
    $sql = "UPDATE movies SET rented='1' WHERE name='$title';";
}
else
{
    $sql = "UPDATE movies SET rented='0' WHERE name='$title';";
}


if ($conn->query($sql) === TRUE) {
    echo "1";
} else {
    echo "0";
}

$conn->close();
?>