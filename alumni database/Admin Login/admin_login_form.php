

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
	<h1 style="text-align: center;">Admin Login</h1>
	<form position="center" action="reg_form.php" method="post">
		
		<input type="text" name="admin_ssn" placeholder="Admin SSN"><br>
		<input type="password" name="password" placeholder="Password"><br>
  		<input type="Submit" name="Login" value="Login">


	</form>

	</div>

</body>
</html>

