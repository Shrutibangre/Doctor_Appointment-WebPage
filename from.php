<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		#firstno{
			width: 20%;
			height: 30px;
			background-color:lightgray;
		}
		#btn{
			width:7%;
			height:30px;
			background-color:skyblue;
		}
		
	</style>
</head>
<body>

	<center><form action="from.php" method="POST" >
		
		<input type="text" placeholder="Enter any no" name="fn" id="firstno" required=""><br><br>
		<input type="text" placeholder="Enter any no" name="sn" id="firstno" required=""><br><br>
		<input type="submit" name="submit" value="submit" id="btn">
	</form></center>

</body>
</html>

<?php
	
	 

	if(isset($_POST['submit'])){
		$fn=$_POST['fn'] ;
		$sn=$_POST['sn'] ;
		$per=$fn*100/$sn;
	

	if ($per>=75 && $per<=100) {

		echo"Grade A+";
	}
	else if ($per>=60 && $per<=75) {
		echo"<b>Grade A";
		
	}
	else if ($per>=45 && $per<=60) {
		echo"Grade B";
		
	}
	else if ($per>=35 && $per<=45) {
		echo"Grade C";
		
	}
	else if ($per<=35){
		echo"Fail";
		
	}
	else{

		echo"Invalid";
	}
}

	

?>