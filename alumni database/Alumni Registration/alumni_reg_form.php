

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style>
.center {
    margin: auto;
    width: 50%;
    border: 3px;
    padding: 10px;
}
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;}
input[type=email], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;}
input[type=text2], select {
    width: 70%;
    padding: 52px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
	display: inline;
    width: 47%;
    padding: 12px 20px;
    margin: 8px 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;}

input[type=file], select {
    width: 50%;
    padding: 12px 20px;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=number], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 40%;
    background-color: #336699;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #00ccff;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<div class="center" style="background-color:green;color:black;padding:20px;">
	<h1 style="text-align: center;">Alumni Registration</h1>
	<form position="center" action="reg_form.php" method="post">
		<input type="text" name="firstname" placeholder="First name"><br>
		<input type="text" name="lastname" placeholder="Last name"><br>
		<input type="email" name="email" placeholder="email" autocomplete="off"><br>
		<input type="text" name="ID" placeholder="Your ID"><br>
		<input type="password" name="password" placeholder="Password">
		<input type="password" name="password" placeholder="Rtype Password"><br>
		<input type="file" name="img" multiple><br>


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

</body>
</html>

