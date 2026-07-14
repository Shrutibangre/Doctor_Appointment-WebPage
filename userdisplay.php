<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<center>
	<table border="5px solid red" cellpadding="50px" bgcolor="skyblue"  >
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Mobile</th>
			<th>Date</th>
			<th>Time</th>
			<th>Purpose</th>
			<th>Status</th>
		
		</tr>

		<?php
		$con=mysqli_connect('localhost','root','','medibuddy');
			$query="SELECT * from appointment";
			$sql=mysqli_query($con,$query);
			while ($row=mysqli_fetch_array($sql)){
				$i=$row['id'];
				$nn=$row['name'];
				$mm=$row['mobile'];
				$dd=$row['ddate'];
				$tt=$row['ttime'];
				$pp=$row['purpose'];
				$ss=$row['status'];


			?>
			<tr>
				
				<td><?php echo $i?></td>
				<td><?php echo $nn?></td>
				<td><?php echo $mm?></td>
				<td><?php echo $dd?></td>
				<td><?php echo $tt?></td>
				<td><?php echo $pp?></td>

				<?php
				if($ss==0){
				echo"<td>Pending</td>";
			} else if($ss==1){
				echo"<td>Approved</td>";
			}else{
				echo"<td>Cancle</td>";
			}
				?>

			</tr>

		<?php } ?>
		



		
	</table>

</center>

</body>
</html>