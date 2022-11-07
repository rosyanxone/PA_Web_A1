<?php
	require('../../php/connection.php');
	require('../../php/randomstr.php');

	$id = $_GET['id'];
	$daya=$_POST['daya'];
	$tarifperkwh=$_POST['tarifperkwh'];
	
	if($_FILES['foto']['size'] != 0) {
		$ft=$_FILES['foto']['name'];
		$file=$_FILES['foto']['tmp_name'];
		move_uploaded_file($file, '../../img/voltase/' . $ft);
		$sql2 = "UPDATE tarif SET foto = '$ft' , daya = '$daya' , tarifperkwh = '$tarifperkwh' WHERE id = '$id'";
	} else {
		$sql2 = "UPDATE tarif SET daya = '$daya' , tarifperkwh = '$tarifperkwh' WHERE id = '$id'";
	}
	
	$query = mysqli_query($conn, $sql2);
	if($query) {
		?>
		<script>
			alert('Loose');
		</script>
		<?php
		header('location: ../../tarif.php');
	} else {
		echo "Edit Tarif Gagal";
	}
?>