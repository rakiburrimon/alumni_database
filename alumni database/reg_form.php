
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
$fn1=$_POST["firstname"];
$fn2=$_POST["lastname"];
$fn3=$_POST["email"];
$fn4=$_POST["id"];
$fn5=$_POST["password"];
$fn6=$_POST["lastqualification"];
$fn7=$_POST["semester"];
$fn8=$_POST["batchyear"];
$fn9=$_POST["passingyear"];
$fn10=$_POST["organization"];
$fn11=$_POST["occupation"];
$fn12=$_POST["designation"];
$fn13=$_POST["phone"];
$fn14=$_POST["presentaddress"];
$fn15=$_POST["parmanentaddress"];

$sql ="INSERT INTO `reg` (`firstname`, `lastname`, `email`, `id`, `password`, `lastqualification`, `semester`, `batchyear`, `passingyear`, `organization`, `occupation`, `designation`, `phone`, `presentaddress`, `parmanentaddress`) VALUES ('$fn1', '$fn2', '$fn3', '$fn4', '$fn5', '$fn6', '$fn7', '$fn8', '$fn9', '$fn10', '$fn11', '$fn12', '$fn13', '$fn14', '$fn15')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
 <footer>
  <p>Posted by: Rakibur Rahman</p>
  <p>ID: 14303044</p>
</footer><br><br>


<div style="text-align: center;">
    <button type="button" onclick="location.href='home.php'">Back</button>
</div>