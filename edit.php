<?php
	
	$uid=$_GET['id'];
	$con=mysqli_connect('localhost','root','','shruti');
	$query="SELECT * from userdata where id='$uid'";
			$sql=mysqli_query($con,$query);
			while ($row=mysqli_fetch_array($sql)){
				$i=$row['id'];
				$n=$row['name'];
				$e=$row['email'];
				$m=$row['mobile'];
				$p=$row['password'];


		}
?>








<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<div >
	<center><h1>Welcome to edit.php</h1></center>
	<center><form action="edit.php" method="POST" >
		
		<input type="text"placeholder="Enter Id" name="id" value="<?php echo$uid ?>" required=""><br><br>
		<input type="text" placeholder="Enter Name" name="name" value="<?php echo$n ?>"required=""><br><br>
		<input type="text" placeholder="Enter Email" name="email" value="<?php echo$e ?>" required=""><br><br>
		<input type="text" placeholder="Enter MobileNo" name="mobile"value="<?php echo$m?>" required=""><br><br>
		<input type="text" placeholder="Enter Password" name="password" value="<?php echo$p?>"required=""><br><br>
		<input type="submit" name="update" value="Update">
	</form></center>
</div>

</body>
</html>
<?php
	
	$con=mysqli_connect("localhost","root","","shruti");
	if (isset($_POST['update'])) {
		
		$i=$_POST['id'];
		$n=$_POST['name'];
		$e=$_POST['email'];
		$m=$_POST['mobile'];
		$p=$_POST['password'];
	

	$query="UPDATE userdata SET name='$n',email='$e',mobile='$m',password='$p' where id='$i'";
	$sql=mysqli_query($con,$query);


	if ($sql) {
		
		header('location:display.php');

	}else{

		echo "error";
	}


}


?>