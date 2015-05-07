<?php

$servername = "0.0.0.0";
$username = "girgalicious";
$password = "";
$dbname = "videos";

$bd = mysql_connect($servername, $username, $password) or die("Could not connect database");
mysql_select_db($dbname, $bd) or die("Could not select database");

$title = $_POST['title'];


$isAvailable = true; 

$qry="SELECT * FROM movies WHERE name='$title';";
$result=mysql_query($qry);
$count = mysql_num_rows($result);

if($count > 0)
{
    $isAvailable = false;

}

echo json_encode(array('valid' => $isAvailable,));