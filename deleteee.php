<!-- delete -->
<?php   

$did=$_GET['id'];

$con=mysqli_connect('localhost','root','','shruti');
$query="DELETE from logoutcome where id='$did'";
$sql=mysqli_query($con,$query);
if ($sql) {
	echo '<script>alert("Are you sure wanted to delete the ac?");</script>';
	header('location:task.php');
}else{
	echo "error";
}


?>