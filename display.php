<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<center>
	<table border="1px solid red" cellpadding="50px" bgcolor="lightyellow">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Password</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>

		<?php
		$con=mysqli_connect('localhost','root','','shruti');
			$query="SELECT * from userdata";
			$sql=mysqli_query($con,$query);
			while ($row=mysqli_fetch_array($sql)){
				$i=$row['id'];
				$n=$row['name'];
				$e=$row['email'];
				$m=$row['mobile'];
				$p=$row['password'];


			?>
			<tr>
				
				<td><?php echo $i?></td>
				<td><?php echo $n?></td>
				<td><?php echo $e?></td>
				<td><?php echo $m?></td>
				<td><?php echo $p?></td>
				<td><a href="edit.php?id=<?php echo $i?>">Edit</a></td>
				<td><a href="delete.php?id=<?php echo $i?>" onclick="return confirm('are you sure you want to delete')">Delete</a></td>

			</tr>

		<?php } ?>
		



		
	</table>

</center>

</body>
</html>