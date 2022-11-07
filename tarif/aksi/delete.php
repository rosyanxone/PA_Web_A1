<?php
	require('../../php/connection.php');

	$id = $_GET["id"];
	$sql = "DELETE FROM tarif WHERE id = '$id'";
	$query = mysqli_query($conn, $sql);
	
	if($query) {
		header('location: ../../tarif.php');
	} else{
		echo "hapus tarif GAGAL";
	}
?>