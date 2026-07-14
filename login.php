<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form action="login.php" method="POST">

		
		<input type="text" placeholder="Enter mobile no" name="mobile" required=""><br><br>
		<input type="text" placeholder="Enter password" name="pass" required=""><br><br>
		<input type="submit" name="submit" value="login">
		
	</form>


</body>
</html>
<?php
	$con=mysqli_connect('localhost','root','','shruti');

	if (isset($_POST['submit'])) {

		
		$m=$_POST['mobile'];
		$p=$_POST['pass'];

		$query="SELECT * from logoutcome where mobile='$m'and password='$p'";
		$sql=mysqli_query($con,$query);
		if ($sql) {
			echo "login Successfully";
		}else{
			echo "error";
		}
	}

?>