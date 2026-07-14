<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style type="text/css">
		.firstno{
			width: 30%;
			height: 33px;
			background-color:gainsboro;
			padding: 10px;
			box-shadow:1px 1px 2px 2px #60B0CB;
			border-radius:20px;
			margin-right:250px;
			font-family: sans-serif;

		}
		.btn{
			width:8%;
			height:50px;
			background-color:black;
			box-shadow:1px 1px 2px 2px #60B0CB;
			font-family: sans-serif;
			margin-right:200px;
			border-radius: 10px;
			color:#60B0CB;

		}
		.div1{
			border: 1px solid black;
			width:100%;
			height: 800px;
			float: left;
			font-family: sans-serif;
			background-image:url("image/wave1.png");
			 background-repeat: no-repeat;
			 background-size: cover;
            background-repeat: no-repeat;
            background-position: center;


		}
	</style>
</head>
<body>


	<center><div class="div1"><<br><br><br><br>

		<form action="appointment.php" method="POST" class="res"><br><br><br><br>
		
		<input type="text" placeholder="Enter Name" name="name"  required="" class="firstno"><br><br>
		<input type="text" placeholder="Enter Mobile" name="mobile"  required="" class="firstno"><br><br>
		<input type="date" placeholder="Enter Date" name="ddate"  required="" class="firstno"><br><br>
		<input type="time" placeholder="Enter Time" name="ttime"  required="" class="firstno"><br><br>
		<input type="text" placeholder="Enter Purpose" name="purpose"  required="" class="firstno"><br><br>
		<input type="submit" name="submit"  value="BookAppointment" class="btn">


	</form>

	</div></center>

</body>
</html>
<?php

    $con=mysqli_connect('localhost','root','','medibuddy');

	if (isset($_POST['submit'])) {

		$nn=$_POST['name'];
		$mm=$_POST['mobile'];
		$dd=$_POST['ddate'];
		$tt=$_POST['ttime'];
		$pp=$_POST['purpose'];

		$query="INSERT into appointment(name,mobile,ddate,ttime,purpose) values ('$nn','$mm','$dd','$tt','$pp')";
		$sql=mysqli_query($con,$query);
		if ($sql) {
			echo "Appointment Booked";
		}else{
			echo "Something went wrong";
		}
	}



?>