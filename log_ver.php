 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";
$unm=$_POST["uname"];
$ps=$_POST["psw"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT type FROM login where uname='$unm' and password='$ps' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($row["type"] == "stud")
{
include("student_home.php");
}
 if($row["type"] == "admin")
{
include("admin_home.php");
}


    }
} else {
include("login.php");
}

mysqli_close($conn);
?> 