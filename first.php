<?php
	
	 


	$obt=480;
	$total=500;
	$per=$obt*100/$total;
	echo $per,"%";

	// $p=70;
	// $t=500;
	// $o=$p*$t/100;
	// echo $o;

	if ($per>=75 && $per<=100) {

		echo"Grade A+";
	}
	elseif ($per>=60 && $per<=75) {
		echo"<b>Grade A";
		
	}
	elseif ($per>=45 && $per<=60) {
		echo"Grade B";
		
	}
	elseif ($per>=35 && $per<=45) {
		echo"Grade C";
		
	}
	elseif ($per<=35){
		echo"Fail";
		
	}
	else{

		echo"Invalid";
	}

	

?>