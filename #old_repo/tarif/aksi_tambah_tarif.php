<?php
	include "../koneksi.php";

	$id=$_POST['id'];
	$ft=$_FILES['foto']['name'];
	$file=$_FILES['foto']['tmp_name'];
	$daya=$_POST['daya'];
	$tarifperkwh=$_POST['tarifperkwh'];

	$sql = "INSERT INTO tarif(id,foto,daya,tarifperkwh)
	VALUES('$id','$ft','$daya','$tarifperkwh')";
	move_uploaded_file($file, "../foto/".$ft);
	$query =mysqli_query($db_link,$sql);
	if ($query) 
	{
		header('location:bacatarif.php');
	}
	else
	{
		//echo $sql;
		echo "Gagal Disimpan";
	}
?>