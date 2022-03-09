<?php
include 'connection.php';
$sql="SELECT * FROM usernew";
$result=$con->query($sql);
?>
<html>
<body>
<table>
<tr>
<th>id</th>
<th>registernumber</th>
<th>name</th>
<th>coursecode</th>
<th>coursename</th>
<th>mark</th>
</tr>
<?php

	while($rows=$result->fetch_assoc())
	{
		?>
	
		<tr>
	<td><?php echo $rows['registernumber']?></td>
	<td><?php echo $rows['name']?></td>
	<td><?php echo $rows['coursecode']?></td>
	<td><?php echo $rows['coursename']?></td>
	<td><?php echo $rows['mark']?></td></tr>
<?php	
}
?>
</table>
</body>
</html>

