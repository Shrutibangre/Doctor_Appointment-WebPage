
<!-- edit.php -->
<?php
	
	$uid=$_GET['id'];
	$con=mysqli_connect('localhost','root','','shruti');
	$query="SELECT * from logoutcome where id='$uid'";
			$sql=mysqli_query($con,$query);
			while ($row=mysqli_fetch_array($sql)){
				$ii=$row['id'];
				$nn=$row['name'];
				$ee=$row['email'];
				$mm=$row['mobile'];
				$pp=$row['password'];


		}
?>
<!--  -->





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
	.regi{

			border:5px solid blueviolet;
			width:30%;
			height:700px;
			float:left;
			font-family:cursive;
			margin:10px;
			background-color: black;
	}

	.dis{
		border: 5px solid blueviolet;;
		width:60%;
		height:450px;
		float:left;
		font-family:cursive;
		margin: 10px;
		 background-color:black;

	}
	.edit{
		border:5px solid blueviolet;;
		width:60%;
		height:220px;
		float:left;
		font-family:cursive;
		margin: 10px;
		background-color:black;	

	}
	.firstno{
			width: 50%;
			height: 30px;
			background-color:lightgray;
			padding: 10px;
		}
	.btn{
			width:30%;
			height:30px;
			background-color:skyblue;
		}

	.edi{
		width: 30%;
		height: 25px;
		background-color:lightgray;
		padding: 1px;
		margin: 3px;

	}
	.btn1{
			width:10%;
			height:20px;
			background-color:skyblue;
		}	

	.table{
		margin:50px;
		border:4px solid white;
	}
.form{
	margin:10px;
}
.res{
	margin:60px;
}


	</style>
	
</head>
<body>

	<!-- registration -->

	<div class="regi">
		<center>
		<form action="task.php" method="POST" class="res"><br><br><br><br>

		<input type="text" placeholder="Enter name" name="name"  required="" class="firstno"><br><br>
		<input type="text" placeholder="Enter email" name="email" required="" class="firstno"><br><br>
		<input type="text" placeholder="Enter mobile no" name="mobile" required="" class="firstno"><br><br>
		<input type="text" placeholder="Enter password" name="pass" required="" class="firstno"><br><br>
		<input type="submit" name="submit" value="Register" class="btn">
		
	</form>
	</center>
	</div>



	<!-- display -->

	<center>
	<div class="dis">
		
		<table border="1px solid red" cellpadding="5px" bgcolor="lightblue"  class="table">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Password</th>
			<th>Delete</th>
		</tr>
		<?php 

			$con=mysqli_connect('localhost','root','','shruti');
			$query="SELECT * from logoutcome";
			$sql=mysqli_query($con,$query);
			while ($row=mysqli_fetch_array($sql)) {
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
				<td><a href="task.php?id=<?php echo $i?>">Edit</a></td>
				<td><a href="deleteee.php?id=<?php echo $i?>" onclick="return confirm('are you sure you want to delete')">Delete</a></td>

			</tr>
		<?php } ?>
	</table>



	</div>
	</center>


<!-- edit -->


	<div class="edit">

	<center><form action="task.php" method="POST" class="form">
		<input type="text"placeholder="Enter Id" name="id" class="edi"   value="<?php echo$uid ?>" required=""><br>
		<input type="text" placeholder="Enter Name" name="name" class="edi" value="<?php echo$nn ?>"required=""><br>
		<input type="text" placeholder="Enter Email" name="email" class="edi" value="<?php echo$ee ?>" required=""><br>
		<input type="text" placeholder="Enter MobileNo" name="mobile" class="edi"value="<?php echo$mm?>" required=""><br>
		<input type="text" placeholder="Enter Password" name="password" class="edi" value="<?php echo$pp?>"required=""><br>
		<input type="submit" name="update" class="btn1" value="Update">
	</form></center>
</div>

	</div>

</body>
</html>

<!-- registration.php -->

<?php
	$con=mysqli_connect('localhost','root','','shruti');

	if (isset($_POST['submit'])) {

		$n=$_POST['name'];
		$e=$_POST['email'];
		$m=$_POST['mobile'];
		$p=$_POST['pass'];

		$query="INSERT into logoutcome(name,email,mobile,password) values ('$n','$e','$m','$p')";
		$sql=mysqli_query($con,$query);
		if ($sql) {
			echo "Registered Successfully";
		}else{
			echo "Not Registered";
		}
	}

?>

<!-- edit.php -->

<?php
	
	$con=mysqli_connect("localhost","root","","shruti");
	if (isset($_POST['update'])) {
		
		$i=$_POST['id'];
		$n=$_POST['name'];
		$e=$_POST['email'];
		$m=$_POST['mobile'];
		$p=$_POST['password'];
	

	$query="UPDATE logoutcome SET name='$n',email='$e',mobile='$m',password='$p' where id='$i'";
	$sql=mysqli_query($con,$query);


	if ($sql) {
		
		header('location:task.php');

	}else{

		echo "error";
	}


}


?>


