<?php
$conn=mysqli_connect('127.0.0.1','root','');

mysqli_select_db($conn,'alumni');
$sql="DELETE FROM reg WHERE id='$_GET[id]'";
if(mysqli_query($conn,$sql))
     header("refresh:1;url=delete1.php");
else 
     echo"not deleted";
?>