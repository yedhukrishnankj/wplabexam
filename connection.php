<?php
$servername="localhost";
$username="root";
$password="";
$databasename="sample";
$con=mysqli_connect($servername,$username,$password,$databasename);
$result=$con;
if($result==TRUE)
{
	echo "success";
}
else{
	echo"failed";
}
?>