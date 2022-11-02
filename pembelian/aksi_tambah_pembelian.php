<?php
	include "../koneksi.php";

	$id=$_POST['id'];
	$tanggal=date('y/m/d');
	$jumlahbeli=$_POST['jumlahbeli'];
	$nometer=$_POST['nometer'];
	$totalkwh=$_POST['totalkwh'];
	$idtarif=$_POST['idtarif'];

	$sql = "INSERT INTO pembelian(id,tanggal,jumlahbeli,nometer,totalkwh,idtarif)
	VALUES('$id','$tanggal','$jumlahbeli','$nometer','$totalkwh','$idtarif')";

	$query =mysqli_query($db_link,$sql);
	if ($query) 
	{
		header('location:bacapembelian.php');
	}
	else
	{
		echo "Gagal Disimpan";
	}
?>