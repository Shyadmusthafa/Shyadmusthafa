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
  padding: 100px;
}

body {font-family: Arial, Helvetica, sans-serif;}
form {border: 7px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 95%;
  padding: 12px 20px;
  margin: 8px 60;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: block;
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
  background-color: red;
  color: white;
  padding: 106px 10px;
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

<h2><center><h3>AVAILABLE BOOKS</h2>
<h2><center></h2>

<table align="center">
<tr>
  <th>S.NO</th><th>BOOKS NAME</th><th>BOOK ID</th><th>TOTAL BOOKS</th>
</tr>
<tr>
<td>1.</td><td>Data Structure</td><td>10001</td><td>125</td>
</tr>
<tr>
<td>2.</td><td>Data Design</td><td>10002</td><td>325</td>
</tr>
<tr>
<td>3.</td>         <td>DSP</td>      <td>10003</td>             <td>170</td>
</tr>
<tr>
<td>4.</td>         <td>Computer Design</td>      <td>10004</td>             <td>156</td>
</tr>
<tr>
<td>5.</td>         <td>Data Loss</td>      <td>10005</td>             <td>200</td>
</tr>
<tr>
<td>6.</td>         <td>Java</td>      <td>10006</td>             <td>147</td>
</tr>
<tr>
<td>7.</td>         <td>Web Programming</td>      <td>10007</td>             <td>321</td>
</tr>
<tr>
<td>8.</td>         <td>Operating System</td>      <td>10008</td>             <td>121</td>
</tr>
<tr>
<td>9.</td>         <td>B-EEE</td>      <td>10009</td>             <td>126</td>
</tr>
<tr>
<td>10.</td>         <td>C-Programming</td>      <td>10010</td>             <td>100</td>
</tr>
<tr>
<td>11.</td>         <td>Computer Application</td>      <td>10011</td>             <td>212</td>
</tr>
<tr>
<td>12.</td>         <td>Computer Architecture</td>      <td>10012</td>             <td>111</td>
</tr>
<tr>
<td>13.</td>         <td>Computer Networks and Security</td>      <td>10013</td>             <td>55</td>
</tr>
<tr>
<td>14.</td>         <td>RDBMS</td>      <td>10014</td>             <td>122</td>
</tr>
<tr>
<td>15.</td>         <td>Component Based Tech</td>      <td>10015</td>             <td>155</td>
</tr>
<tr>
<td>16.</td>         <td>Cloud Computing</td>      <td>10016</td>             <td>121</td>
</tr>
<tr>
<td>17.</td>         <td>Software Engineering</td>      <td>10017</td>             <td>213</td>
</tr>
<tr>
<td>18.</td>         <td>Computer Hardware and Servicing</td>      <td>10018</td>             <td>113</td>
</tr>
<tr>
<td>19.</td>         <td>Mobile Computing</td>      <td>10019</td>             <td>123</td>
</tr>
<tr>
<td>20.</td>         <td>Multimedia</td>      <td>10020</td>             <td>155</td>
</tr>
<tr>
<td>21.</td>         <td>Digital System</td>      <td>10021</td>             <td>212</td>
</tr>
<tr>
<td>22.</td>         <td>Wave Communication</td>      <td>10022</td>             <td>76</td>
</tr>
<tr>
<td>23.</td>         <td>Accounts</td>      <td>10023</td>             <td>33</td>
</tr>
<tr>
<td>24.</td>         <td>Buisness Methoud</td>      <td>10024</td>             <td>56</td>
</tr>
<tr>
<td>25.</td>         <td>Program</td>      <td>10025</td>             <td>97</td>
</tr>
<tr>
<td>26.</td>         <td>Tamil</td>      <td>10026</td>             <td>127</td>
</tr>
<tr>
<td>27.</td>         <td>Mathematics</td>      <td>10027</td>             <td>342</td>
</tr>
<tr>
<td>28.</td>         <td>Discrete Mathematics</td>      <td>10028</td>             <td>188</td>
</tr>
<tr>
<td>29.</td>         <td>Manegement Office</td>      <td>10029</td>             <td>67</td>
</tr>
<tr>
<td>30.</td>         <td>Servicing Laptop</td>      <td>10030</td>             <td>30</td>
</tr>
<tr>
<td>31.</td>         <td>Bank Services</td>      <td>10031</td>             <td>57</td>
</tr>
<tr>
<td>32.</td>         <td>Hacking</td>      <td>10032</td>             <td>45</td>
</tr>
<tr>
<td>33.</td>         <td>Social Networking</td>      <td>10033</td>             <td>45</td>
</tr>
<tr>
<td>34.</td>         <td>Social India</td>      <td>10034</td>             <td>87</td>
</tr>
<tr>
<td>35.</td>         <td>College Management</td>      <td>10036</td>             <td>90</td>
</tr>
<tr>
<td>36.</td>         <td>problem Of Mathametics</td>      <td>10037</td>             <td>100</td>
</tr>
<tr>
<td>37.</td>         <td>Agriculture History of Times</td>      <td>10037</td>             <td>100</td>
</tr>
<td>38.</td>         <td>Wings of Fire</td>      <td>10038</td>             <td>150</td>
</tr>
<td>39.</td>         <td>Problem solving python programming</td>      <td>10039</td>             <td>150</td>
</tr>
<td>40.</td>         <td>Engineering Mathematics 1</td>      <td>10040</td>             <td>150</td>
</tr>
<td>41.</td>         <td>Engineering Mathematics 2</td>      <td>10041</td>             <td>150</td>
</tr>
<td>42.</td>         <td>Oracle Database Management System</td>      <td>10042</td>             <td>150</td>
</tr>
<td>43.</td>         <td>Engineering Graphics</td>      <td>10043</td>             <td>150</td>
</tr>
<td>44.</td>         <td>Fluid Mechanics</td>      <td>10044</td>             <td>150</td>
</tr>
<td>45.</td>         <td>Geo thermal energy</td>      <td>10045</td>             <td>150</td>
</tr>
<td>46.</td>         <td>geology</td>      <td>10046</td>             <td>150</td>
</tr>
<td>47.</td>         <td>Cloud computing2 </td>      <td>10047</td>             <td>150</td>
</tr>
<td>48.</td>         <td>Basics of Data science </td>      <td>10048</td>             <td>150</td>
</tr>
<td>49.</td>         <td>Book of Autism </td>     <td>10049</td>             <td>150</td>
</tr>
<td>50.</td>         <td>Hydroloic energy</td>     <td>10050</td>             <td>150</td>
</tr>
</table>
</body>
<html>