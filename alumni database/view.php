<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <ul>
 <li><a href="home.php">Home</a></li>
 <li><a href="alumni_reg_form.php">Alumni Registration</a></li>
  <li><a href="delete1.php">View</a></li>
  <li><a href="SearchForm.php">Search</a></li>
  <li style="float:right"><a href="searchAllForm.php">Report</a></li>
</ul>
<h1>Alumni Database Management System</h1>
<header>

</header>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM reg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email Address</th><th>Alumni Id</th><th>Last Qualification</th><th>Semester</th><th>Batch Year</th><th>Passing Year</th><th>Organization</th><th>Occupation</th><th>Designation</th><th>Phone</th><th>Present Address</th><th>Parmanent Address</th></tr>";
     
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>"  . $row["firstname"]."</td><td>". $row["lastname"]. "</td><td>" . $row["email"]. " </td><td>" . $row["id"]. "</td><td>" . $row["lastqualification"]. "</td><td>". $row["semester"]. "</td><td>". $row["batchyear"]. "</td><td>". $row["passingyear"]. "</td><td>". $row["organization"]. "</td><td>". $row["occupation"]. "</td><td>". $row["designation"]. "</td><td>". $row["phone"]. "</td><td>". $row["presentaddress"]. "</td><td>". $row["parmanentaddress"]. "</td>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  <br><br><br><br><br><br><br>

<div style="text-align: center;">
    <button type="button" onclick="location.href='home.php'">Back</button>
</div>

 <footer>
  <p>Posted by: Rakibur Rahman</p>
  <p>ID: 14303044</p>
</footer>



</body>
</html>