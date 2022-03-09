<?php
include 'connection.php';
if(isset($_POST['submit']));
{
	$registernumber=$_POST["registernumber"];
	$name=$_POST["name"];
	$coursecode=$_POST["coursecode"];
	$coursename=$_POST["coursename"];
	$mark=$_POST["mark"];
$sql="insert into usernew(registernumber,name,coursecode,coursename,mark)values('$registernumber','$name','$coursecode','$coursename','$mark')";
$result=$con->query($sql);
if($result==TRUE)
{
	echo "success";
}
else
{
	echo "failed".$sql."<br>".$con->error();
}
}
?>
<html>
<head>
<title>insert</title>
</head>
<body>
<form method="POST" name="f1">
<table>
<tr>
<td><label>registernumber</label></td>
<td><input type="text" name="registernumber" id="registernumber"></td>
</tr>
<tr>
<td><label>name</label></td>
<td><input type="text" name="name" id="name"></td>
</tr>
<tr>
<td><label>coursecode</label></td>
<td><input type="text" name="coursecode" id="coursecode"></td>
</tr>
<tr>
<td><label>coursename</label></td>
<td><input type="text" name="coursename" id="coursename"></td>
</tr>
<tr>
<td><label>mark</label></td>
<td><input type="text" name="mark" id="mark"></td>
</tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="submit"></td>
</tr>
</table>
</form>
</body>
</html>
