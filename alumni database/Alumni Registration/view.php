<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
     border-collapse:collapse;
     text-align: center;
     margin: auto;
     width: 860px;
}
</style>
</head>
<body>
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
     echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Id</th><th>Last Qualification</th><th>Semester</th><th>Batch Year</th><th>Passing Year</th><th>Organization</th><th>Occupation</th><th>Designation</th><th>Phone</th><th>Present Address</th><th>Parmanent Address</th></tr>";
     
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


 </footer>


</body>
</html>