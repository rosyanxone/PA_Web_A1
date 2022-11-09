<?php
	include "../koneksi.php";

	$id=$_POST['id'];
	$ft=$_FILES['foto']['name'];
	$file=$_FILES['foto']['tmp_name'];
	$daya=$_POST['daya'];
	$tarifperkwh=$_POST['tarifperkwh'];
	
	$sql2 ="UPDATE tarif SET id = '$id' ,  foto = '$ft' , daya = '$daya' , tarifperkwh = '$tarifperkwh' WHERE id = '$id'";
	move_uploaded_file($file, "../foto/".$ft);
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