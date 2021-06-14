<?php

if(isset($_POST['dep'])){
    $dept = $_POST['dep'];
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$qry="INSERT INTO student(name,rollno,dep) VALUES ('". $_POST["sname"]."','".$_POST["srno"]."','".$dept."')" ;
$qry1="INSERT INTO user(uname,password,type) VALUES('".$_POST["sname"]. "','". $_POST["spass"]."','stud')";


if(($conn->query($qry)==True) && ($conn->query($qry1)==True))
{
 
echo "Student Entry is Successfully";
 
include("studententry.php");
} else {
    echo "Error: " . $qry . "<br>" . $conn->error;
}

$conn->close();



?>