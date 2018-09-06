<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>     
<style>

table, th, td {
     border: 1px solid black;
	 height:40px;
	 width:900px;
	 text-align:center;
}
</style>
	<div>

		<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "alumni";

// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$res = mysqli_query($conn,"select *from reg");
			$sqlbgroup ="SELECT id FROM reg ";
	
			$sql = "SELECT * FROM reg";
			$result = mysqli_query($conn, $sql);

			if(isset($_POST["submituser"]))
			{
//var_dump($result);
				if ($result->num_rows > 0 )
				{
    // output data of each row
					while($row = mysqli_fetch_assoc($result)) 
					{
						$sqlid=$row["id"];
						$bid=$_POST["id"];
		 
		 
						if ($sqlid == $bid)
						{
							echo "<h2 style='color:blue;background:mistyrose; text-align:center;'><td> ID : " . $row['id'] . " </h2>"; 
		
							echo '<h3 align="center" class="userbox">';
							echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email Address</th><th>Alumni Id</th><th>Last Qualification</th><th>Semester</th><th>Batch Year</th><th>Passing Year</th><th>Organization</th><th>Occupation</th><th>Designation</th><th>Phone</th><th>Present Address</th><th>Parmanent Address</th></tr>";
				
							echo "<tr><td>"  . $row["firstname"]."</td><td>". $row["lastname"]. "</td><td>" . $row["email"]. " </td><td>" . $row["id"]. "</td><td>" . $row["lastqualification"]. "</td><td>". $row["semester"]. "</td><td>". $row["batchyear"]. "</td><td>". $row["passingyear"]. "</td><td>". $row["organization"]. "</td><td>". $row["occupation"]. "</td><td>". $row["designation"]. "</td><td>". $row["phone"]. "</td><td>". $row["presentaddress"]. "</td><td>". $row["parmanentaddress"]. "</td>";

						}
						else if (empty($bid))
						{
						echo '<script type="text/javascript">
							window.location = "search.php"
							</script>';
						}
					}

	
				} 
				else 
				{
				echo "0 results";
				}

			}

		mysqli_close($conn);
	
		?>	
	    
<div style="text-align: center;">
    <button type="button" onclick="location.href='home.php'">Back</button>
</div>
 <footer>
  <p>Posted by: Rakibur Rahman</p>
  <p>ID: 14303044</p>
</footer>					
   
 </body>
</html>

         
