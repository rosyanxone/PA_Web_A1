<?php
	include "../../php/connection.php";

	$id = $_GET["id"];
	$sql = "DELETE FROM user WHERE id = '$id'";
	$query = mysqli_query($conn, $sql);
	if($query) {
		header('location: ../pelanggan.php');
	} else {
		echo "hapus pelanggan GAGAL";
	}
?>