<?php
	include "../koneksi.php";

	$id=$_POST['id'];
	$daya=$_POST['daya'];
	$tarifperkwh=$_POST['tarifperkwh'];
	$sql = "INSERT INTO tarif(id,daya,tarifperkwh)
	VALUES('$id','$daya','$tarifperkwh')";

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