<?php 
$conn = new mysqli("localhost", "root", "", "alumni");
class db_con{
	
	public function __construct(){

		$conn = new mysqli("localhost", "root", "", "alumni");
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
	
	
	}	
	}
	public function insert($sql)
	{	global $conn;
		$result= $conn->query($sql) or die(mysqli_connect_errno()." Data cannot inserted");
		return $result;
	}
	public function select($sql)
	{
		global $conn;
		$result= $conn->query($sql) or die(mysqli_connect_errno()." Data cannot inserted");
		return $result;
	}
	public function uodate($sql)
	{
		global $conn;
		$result= $conn->query($sql) or die(mysqli_connect_errno()." Data cannot inserted");
		return $result;
	}

	
}

?>