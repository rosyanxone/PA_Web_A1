<?php
	$host = "localhost";
	$user_name = "root";
	$pass="";
	$database_name ="paweb_kel3";

	$conn = mysqli_connect($host,$user_name,$pass,$database_name);
	if(!$conn){
		echo "Gagal Terhubung";
	}
?> 