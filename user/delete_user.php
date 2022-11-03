<?php
	include "../koneksi.php";

	$id = $_GET["id"];
	$sql = "DELETE FROM acun WHERE id = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:bacauser.php');
	}else{
		echo "hapus pelanggan GAGAL";
	}
?>