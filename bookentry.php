<html>

<?php
include("admin_header.php");
?>

<head>
<style>
.div1 {
  display:block;
margin-left:500px;
margin-right:500px; 
 padding: 16px;
 
  border: 3px solid #73AD21;
  padding: 10px;
}

body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 95%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: block;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  background-color: #f44336;
  color: white;
  padding: 10px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;						
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {

  border-radius: 50%;
}

.container {
display:block;
margin-left:400px;
margin-right:400px; 
 padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<h2><center>NEW BOOK ENTRY</h2>

<form action="breg.php"method="POST">
 

  <div class="container">
    <label for="uname"><b>BOOK TITLE:</b></label>
    <input type="text" placeholder="Enter book name" name="bname" required>

    <label for="uname"><b>BOOK ID:</b></label>
    <input type="text" placeholder="Enter book id" name="bid" required>

    

    <label for="uname"><b>AUTHOR NAME</b></label>
    <input type="text" placeholder="Enter Author Name" name="baname" required>

    <label for="uname"><b>EDITION</b></label>
    <input type="text" placeholder="Enter Edition" name="bedion" required>

<label for="uname"><b>COST:</b></label>
    <input type="text" placeholder="Cost" name="bcost" required>

    
        
    <button type="submit">SAVE</button>
    
  </div>
 <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    
  </div>
  
</form>

</body>
</html>
