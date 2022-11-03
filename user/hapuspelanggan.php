<?php
	include "../koneksi.php";

	$id = $_GET["id"];
	$sql = "DELETE FROM user WHERE id = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:bacapelanggan.php');
	}else{
		echo "hapus pelanggan GAGAL";
	}
?>