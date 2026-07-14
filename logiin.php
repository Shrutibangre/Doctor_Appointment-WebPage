<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.log{
			
			height:50px;
			width:40%;
			box-shadow:1px 1px 2px 2px gray;
		}
		.log-btn{
			width:10%;
			height:50px;
			background-color:lightgray;
			box-shadow:1px 1px 2px 2px gray;

		}
		.div-2{
			background-image:url("image/hospi.jpg");
			 background-repeat: no-repeat;
			 background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
			width:100%;
			height:750px;
			float:left;
			font-family:monospace;
		}
		.div3{
			width:80%;
			height:200px;
			float:left;
			margin-left:200px;
			margin-top:200px;
			font-family:monospace;

		}
		
		
	</style>
</head>
<body>
<div class="div-2">
	<div class="div3">

	<center><form action="logiin.php" method="POST">

		<p style="font-size: 35px;">LOGIN HERE</p><br>
		<br>

		
		<input type="text" placeholder="Enter mobile no" name="mobile" class="log" required=""><br><br>
		<input type="text" placeholder="Enter password" name="pass"class="log" required=""><br><br>
		<input type="submit" name="submit" value="login" class="log-btn">
		
	</form><br><br>

 <a href="registrationnnnn.php" style=" font-size:20px;">If You Have An Account Registere Here</a>

</center>
</div>
</div>


</body>
</html>