<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="alumni"; // Database name 
$tbl_name="reg"; // Table name 

// Connect to server and select databse.
$link=mysqli_connect($host, $username, $password, $db_name)or die("cannot connect"); 

$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($link,$sql);
//var_dump();
$count=$result->num_rows;
 
// Count table rows 
//$count=mysqli_num_rows($result);

if($_SERVER["REQUEST_METHOD"]==="POST"){
for($i=0;$i<$count;$i++){

	$a1 = $_POST["firstname$i"];
	$a2 = $_POST["lastname$i"];
	$a3 = $_POST["email$i"];
	$a4 = $_POST["id$i"];
	$a5 = $_POST["lastqualification$i"];
	$a6 = $_POST["semester$i"];
	$a7 = $_POST["batchyear$i"];
	$a8 = $_POST["passingyear$i"];
	$a9 = $_POST["organization$i"];
	$a10 = $_POST["occupation$i"];
	$a11 = $_POST["designation$i"];
	$a12 = $_POST["phone$i"];
	$a13 = $_POST["presentaddress$i"];
	$a14 = $_POST["parmanentaddress$i"];

$sql1="UPDATE `reg` SET `firstname`='$a1',`lastname`='$a2',`email`='$a3',`id`='$a4',
`lastqualification`='$a5',`semester`='$a6',`batchyear`='$a7',`passingyear`='$a8',
`organization`='$a9',`occupation`='$a10',`designation`='$a11',`phone`='$a12',
`presentaddress`='$a13',`parmanentaddress`='$a14' WHERE `id`='$a4'";
//var_dump($sql1);
$result1=mysqli_query($link,$sql1);
}
}
$result=mysqli_query($link,$sql);
?>

<table>
<link rel="stylesheet" href="style.css">
<form name="form1" method="post" action="">

 <ul>
 <li><a href="home.php">Home</a></li>
 <li><a href="alumni_reg_form.php">Alumni Registration</a></li>
  <li><a href="delete1.php">View</a></li>
  <li><a href="SearchForm.php">Search</a></li>
  <li style="float:right"><a href="searchAllForm.php">Report</a></li>
</ul>
<h1>Alumni Database Management System</h1>
<tr>

<th align="center"><strong>First Name</strong></th>
<th align="center"><strong>Last Name</strong></th>
<th align="center"><strong>Alumni Id</strong></th>
<th align="center"><strong>Email Address</strong></th>
<th align="center"><strong>Last Qualification</strong></th>
<th align="center"><strong>Semester</strong></th>
<th align="center"><strong>Batch Year</strong></th>
<th align="center"><strong>Passing Year</strong></th>
<th align="center"><strong>Occupation</strong></th>
<th align="center"><strong>Organization</strong></th>
<th align="center"><strong>Designation</strong></th>
<th align="center"><strong>Phone Number</strong></th>
<th align="center"><strong>Present Address</strong></th>
<th align="center"><strong>Parmanent Address</strong></th>
</tr>

<?php
$n=0;
//var_dump($result);
while($rows=mysqli_fetch_assoc($result)){
	
?>


<tr>
<td align="center">
<input name="firstname<?=$n?>" type="text"  value="<?=$rows['firstname']; ?>">
</td>
<td align="center">
<input name="lastname<?=$n?>" type="text"  value="<?=$rows['lastname']; ?>">
</td>
<td align="center">
<input name="id<?=$n?>" readonly type="text"  value="<?=$rows['id'];?>">
</td>
<td align="center">
<input name="email<?=$n?>" type="text"  value="<?=$rows['email']; ?>">
</td>
<td align="center">
<input name="lastqualification<?=$n?>" type="text"  value="<?=$rows['lastqualification']; ?>">
</td>
<td align="center">
<input name="semester<?=$n?>" type="text"  value="<?=$rows['semester']; ?>">
</td>
<td align="center">
<input name="batchyear<?=$n?>" type="text"  value="<?=$rows['batchyear']; ?>">
</td>
<td align="center">
<input name="passingyear<?=$n?>" type="text"  value="<?=$rows['passingyear']; ?>">
</td>
<td align="center">
<input name="occupation<?=$n?>" type="text"  value="<?=$rows['occupation']; ?>">
</td>
<td align="center">
<input name="organization<?=$n?>" type="text"  value="<?=$rows['organization']; ?>">
</td>
<td align="center">
<input name="designation<?=$n?>" type="text"  value="<?=$rows['designation']; ?>">
</td>
<td align="center">
<input name="phone<?=$n?>" type="text"  value="<?=$rows['phone']; ?>">
</td>
<td align="center">
<input name="presentaddress<?=$n?>" type="text"  value="<?=$rows['presentaddress']; ?>">
</td>
<td align="center">
<input name="parmanentaddress<?=$n?>" type="text"  value="<?=$rows['parmanentaddress']; ?>">
</td>
</tr>


<?php
$n++;
}
?>
</table>
<tr>
<td align="center"><input type="submit" name="submit" value="submit"></td>
</tr>

<br><br><br><br><br><br><br>
<div style="text-align: center;">
    <button type="button" onclick="location.href='home.php'">Back</button>
</div>


</td>
</tr>
</form>


<?php

// Check if button name "Submit" is active, do this 



?>
		