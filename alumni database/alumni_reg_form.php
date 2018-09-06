

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
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
	
  <div class="center" style="background-color:green;color:black;padding:20px;-webkit-animation: myfirst 5s linear 2s infinite alternate; /* Safari 4.0 - 8.0 */
    animation: myfirst 5s linear 2s infinite alternate;">   
	<form position="center" action="reg_form.php" method="post">
		<input type="text" name="firstname" placeholder="First name"><br>
		<input type="text" name="lastname" placeholder="Last name"><br>
		<input type="email" name="email" placeholder="email" autocomplete="off"><br>
		<input type="text" name="id" placeholder="Your ID"><br>
		<input type="password" name="password" placeholder="Password">


		<p>Last Qualification</p>
		<select name="lastqualification">
    		<option value="HSC">HSC</option>
    		<option value="DIPLOMA">DIPLOMA</option>
    		<option value="BACHELOR">BACHELOR</option>
  		</select><br>

  		<p>Batch</p>
  		<select class="semester" name="semester">
    		<option value="Spring">Spring</option>
    		<option value="Summer">Summer</option>
    		<option value="Fall">Fall</option>
  		</select>

  		<input class="batchyear" type="number" name="batchyear" placeholder="year" min="1991" max="2013"><br>

  		<input type="number" name="passingyear" placeholder="Passing Year"  min="1995" max="2017"><br>
  		<input type="text" name="organization" placeholder="Organization"><br>
  		<input type="text" name="occupation" placeholder="Occupation"><br>
  		<input type="text" name="designation" placeholder="Designation"><br>
  		<input type="text" name="phone" placeholder="Phone Number"><br>
  		<input type="text2" name="presentaddress" placeholder="Present Address"><br>
  		<input type="text2" name="parmanentaddress" placeholder="Parmanent Address"><br>
  		<input type="Submit" name="Register" value="Register">


	</form>
</div>

     <footer>
  <p>Posted by: Rakibur Rahman</p>
  <p>ID: 14303044</p>
</footer>

</body>
</html>

