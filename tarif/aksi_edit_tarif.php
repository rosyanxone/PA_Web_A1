<?php
	include "../koneksi.php";

	$id=$_POST['id'];
	$daya=$_POST['daya'];
	$tarifperkwh=$_POST['tarifperkwh'];
	
	$sql2 ="UPDATE tarif SET id = '$id' , daya = '$daya' , tarifperkwh = '$tarifperkwh' WHERE id = '$id'";
	
	$query = mysqli_query($db_link,$sql2);
	
	if($query)
	{
		header('location:bacatarif.php');
	}
	else
	{
		echo"Edit Tarif Gagal";
	}
?>