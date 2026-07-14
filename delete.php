<?php   

$did=$_GET['id'];

$con=mysqli_connect('localhost','root','','shruti');
$query="DELETE from userdata where id='$did'";
$sql=mysqli_query($con,$query);
if ($sql) {
	echo '<script>alert("Are you sure wanted to delete the ac?");</script>';
	header('location:display.php');
}else{
	echo "error";
}


?>