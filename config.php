<?php 
	
	$connect = mysqli_connect("localhost","root","","telemedicine")or die(mysqli_error($connect));

	if ($connect)
	 {
		// echo "Datebase connected";

	 }
	else
		{
			// echo "Error Please Check The Connectivity!";
	 		
		 } 


 ?>
