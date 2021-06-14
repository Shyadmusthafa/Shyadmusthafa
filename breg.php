<?php
echo $_POST["bname"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$qry="INSERT INTO book(title,id,author,edition,cost) VALUES ('". $_POST["bname"]."','".$_POST["bid"]."','".$_POST["baname"]."','".$_POST["bedion"]."','".$_POST["bcost"]."')" ;
if($conn->query($qry)==True)
{
echo " New record created successfully";
include("bookentry.php");
} else {
    echo "Error: " . $qry . "<br>" . $conn->error;
}

$conn->close();



?>