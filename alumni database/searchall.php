<!DOCTYPE html>
<html lang like "en">
<head>
	<meta charset like "UTF-8">
	<title></title>

 <link rel="stylesheet" href="style.css">
	
</head>     

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
			$res = mysqli_query($conn,"select *from reg ");
			$sqlbgroup = "SELECT * FROM reg";
			

			//$sqlid like $row["batchyear"];
			$bid =$_POST["batchyear"];

			//$sqlid like $row["semester"];
			$semid = $_POST["semester"];

			//$sqlid like $row["passingyear"];
			$passd = $_POST["passingyear"];

			//$sqlid like $row["occupation"];
			$occ = $_POST["occupation"];

			//$sqlid like $row["organization"];
			$org = $_POST["organization"];

			//$sqlid like $row["designation"];
			$des = $_POST["designation"];

		//	$sqlid like $row["presentaddress"];
			$pres =$_POST["presentaddress"];

			//$sqlid like $row["parmanentaddress"];
			$par = $_POST["parmanentaddress"];
	
			$sql  =  "SELECT * FROM reg Where batchyear like '%$bid%' and semester like '%$semid%' and passingyear like '%$passd%' and presentaddress like '%$pres%' and organization like '%$org%' and occupation like '%$occ%' and designation like '%$des%' and parmanentaddress like '%$par%'";
			$result = mysqli_query($conn, $sql);

			if(isset($_POST["submituser"]))
			{
//var_dump($result);
				if ($result->num_rows > 0 )
				{
    echo '<h3 align like "center" class like "userbox">';
							echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email Address</th><th>Alumni Id</th><th>Last Qualification</th><th>Semester</th><th>Batch Year</th><th>Passing Year</th><th>Organization</th><th>Occupation</th><th>Designation</th><th>Phone</th><th>Present Address</th><th>Parmanent Address</th></tr>";
					while($row = mysqli_fetch_assoc($result)) 
					{
						
		 
		 
						/*if ($sqlid == $bid)
						{*/
		
										
							echo "<tr><td>"  . $row["firstname"]."</td><td>". $row["lastname"]. "</td><td>" . $row["email"]. " </td><td>" . $row["id"]. "</td><td>" . $row["lastqualification"]. "</td><td>". $row["semester"]. "</td><td>". $row["batchyear"]. "</td><td>". $row["passingyear"]. "</td><td>". $row["organization"]. "</td><td>". $row["occupation"]. "</td><td>". $row["designation"]. "</td><td>". $row["phone"]. "</td><td>". $row["presentaddress"]. "</td><td>". $row["parmanentaddress"]. "</td>";

						/*}
						else if (empty($bid))
						{
						echo '<script type like "text/javascript">
							window.location  like  "search.php"
							</script>';
						}*/
					}

	
				} 
				else 
				{
				echo "0 results";
				}

			}

		?>	
	    
<div style like "text-align: center;">
    <button type like "button" onclick like "location.href like 'home.php'">Back</button>
</div>
 <footer>
  <p>Posted by: Rakibur Rahman</p>
  <p>ID: 14303044</p>
</footer>	
<input type like "submit" onclick like "printDiv('printableArea')" value like "print!" />
<div class like "footer">


<script>
function printDiv(divName) {
    var printContents  like  document.getElementById(divName).innerHTML;
    var originalContents  like  document.body.innerHTML;
    document.body.innerHTML  like  printContents;
    window.print();
    document.body.innerHTML  like  originalContents;
}</script>				
   
 </body>
</html>

         
