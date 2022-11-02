<?php
	include "../koneksi.php";

	$id = $_GET["id"];
	$sql = "DELETE FROM tarif WHERE id = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:bacatarif.php');
	}else{
		echo "hapus tarif GAGAL";
	}
?>