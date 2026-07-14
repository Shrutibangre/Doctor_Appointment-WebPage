<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form action="registration.php" method="POST">

		<input type="text" placeholder="Enter name" name="name"  required=""><br><br>
		<input type="text" placeholder="Enter email" name="email" required=""><br><br>
		<input type="text" placeholder="Enter mobile no" name="mobile" required=""><br><br>
		<input type="text" placeholder="Enter password" name="pass" required=""><br><br>
		<input type="submit" name="submit" value="Register">
		
	</form>

</body>
</html>
<?php
	$con=mysqli_connect('localhost','root','','shruti');

	// if ($con) {
	// 	echo "connected";
	// }
	// else{
	// 	echo"Error";
	// }

	if (isset($_POST['submit'])) {

		$n=$_POST['name'];
		$e=$_POST['email'];
		$m=$_POST['mobile'];
		$p=$_POST['pass'];

		$query="INSERT into userdata(name,email,mobile,password) values ('$n','$e','$m','$p')";
		$sql=mysqli_query($con,$query);
		if ($sql) {
			echo "Registered Successfully";
		}else{
			echo "Not Registered";
		}
	}

?>