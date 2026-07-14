<!-- delete -->
<?php   

$did=$_GET['id'];

$con=mysqli_connect('localhost','root','','medibuddy');
$query="DELETE from registration where id='$did'";
$sql=mysqli_query($con,$query);
if ($sql) {
	echo '<script>alert("Are you sure wanted to delete the ac?");</script>';
	header('location:doctordisplay.php');
}else{
	echo "error";
}


?>