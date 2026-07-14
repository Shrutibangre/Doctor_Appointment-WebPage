
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<style type="text/css">

 	.regi{
 		border: 0px sodlid black;
 		width:40%;
 		height:600px;
 		float: left;

 		margin-top:70px;
 		margin-left:500px;
 		font-family:sans-serif;

 	}	
 	.firstno{
			width: 40%;
			height: 33px;
/*			background-color:lightgray;*/
			padding: 10px;
			box-shadow:1px 1px 2px 2px gray;
			border-radius:20px;
			margin-right:250px;

		}
	.btn{
			width:15%;
			height:55px;
			background-color:#04AA6D;
/*			border:3px solid #00008d;*/
			box-shadow:1px 1px 2px 2px gray;
			color: white;
			font-family: sans-serif;
			margin-right:200px;
		}
		.main-reg{
			width: 100%;
			height:750px;
			border: 0px solid black;
			background-image:url("image/hospi.jpg");
			 background-repeat: no-repeat;
			 background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
		}

		.img{
			border:0px solid black;
			width:20%;
			height:100px;
			float: left;
		}
		.img-pic{
			width: 100%;
			height:750px;
			border: 0px solid black;
		   
		}
		.img-pic{
		background-color: rgba(0, 0, 10, 0.5);
			z-index: 2;
			position:unset;
			width: 100%;
			height:750px;
		}

		.logo{
			height:70px;
			border:0px solid white;
			width:10%;
			float: left;
			border-radius:100px;
			margin-left:10px;
			margin-top:-5px;
		}
 	</style>
 </head>
 <body>


 	<div class="img"><img src="image/medibuddyWithName.svg" width="100%" ></div>

 	 
 	<div class="main-reg">
 	 <center><div class="regi">
	
		<p style="color: #0097FF; font-size:30px; font-family:sans-serif;padding-inline:100px;margin-right:200px;">Medi<span style="color:red;">Buddy<span style="color:#E2B226;">GOLD <span style="color:white;"> REGISTRATION FORM</p>
		<form action="registrationnnnn.php" method="POST" class="res"><br><br><br><br>

	<div class="logo"><center><img src="image/user-solid.svg" width="80%"></center></div><input type="text" placeholder="Enter name" name="name"  required="" class="firstno"><br><br>
	<div class="logo"><center><img src="image/msg.svg	" width="80%"></center></div><input type="text" placeholder="Enter email" name="email" required="" class="firstno"><br><br>
	<div class="logo"><center><img src="image/mobile-retro-solid.svg	" width="60%"></center></div><input type="text" placeholder="Enter mobile no" name="mobile" required="" class="firstno"><br><br>
	<div class="logo"><center><img src="image/lock-solid.svg	" width="80%"></center></div><input type="text" placeholder="Enter password" name="pass" required="" class="firstno"><br><br>
		<input type="submit" name="submit" value="Register" class="btn">
		
	</form>
	<br><br>

	  <a href="doctor2.php" style=" font-size:14px; color:white; margin-right:200px;">If You Have An Account Return to home Page For Login </a>
	
	</div>
   
 	</center>
 	<div class="img-pic"></div>
 
 </body>
 </html>

 <iframe width="560" height="315" src="https://www.youtube.com/embed/KSD3bLpO_mo?si=dPdgAEp5SO_iWcYA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

 <?php

    $con=mysqli_connect('localhost','root','','medibuddy');

	if (isset($_POST['submit'])) {

		$n=$_POST['name'];
		$e=$_POST['email'];
		$m=$_POST['mobile'];
		$p=$_POST['pass'];

		$query="INSERT into registration(name,email,mobile,password) values ('$n','$e','$m','$p')";
		$sql=mysqli_query($con,$query);
		if ($sql) {
			echo "Registered Successfully";
		}else{
			echo "Not Registered";
		}
	}



?>