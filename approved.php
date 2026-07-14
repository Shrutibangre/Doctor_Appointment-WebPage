<?php

	$aid=$_GET['id'];
	  $con=mysqli_connect('localhost','root','','medibuddy');
	  $query="UPDATE appointment SET status='1' WHERE id=$aid";
	  $sql=mysqli_query($con,$query);

	  if ($sql) {
	  	header('location:userdisplay.php');
	  }


?>