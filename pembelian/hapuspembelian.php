<?php
	include "../koneksi.php";

	$id = $_GET["id"];
	$sql = "DELETE FROM pembelian WHERE id = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:bacapembelian.php');
	}else{
		echo "Hapus GAGAL";
	}
?>