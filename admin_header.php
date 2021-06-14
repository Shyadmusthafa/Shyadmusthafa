<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
 
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
font-size:10px;
  text-align: center;
  padding: 18px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<hr>

<body background="images\smcse.png"> 
<ul>
  <li><a class="active" href="admin_home.php">GALLERY</a></li>
  <li><a href="studententry.php">STUDENT</a></li>
  <li><a href="bookentry.php">NEW BOOK ENTRY</a></li> 
  <li><a href="book_issue.php">RETURN BOOKS</a></li>
  <li><a href="available.php">AVAILABLE BOOKS</a></li>


</ul>

</body>
<hr>
</html>
