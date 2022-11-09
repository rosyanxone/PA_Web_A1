<?php
	include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Tarif</title>
    
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="Stylesheet" href="../styles/Tarif-new.css">
</head>
  
<body>
	<?php
		$id=$_GET['id'];
		$sql = "SELECT * FROM tarif WHERE id ='$id'";
		$query = mysqli_query($db_link,$sql);
		$data = mysqli_fetch_array($query);
	?>
    <div class="mainTarif">
        <p    class="tarif" align="center">Ubah Tarif</p>
        <form class="formTarif" action='aksi_edit_tarif.php?id=<?php echo "$id"; ?>' method='POST' enctype="multipart/form-data">
            <label class="ket">ID TARIF</label>
            <input class="idTarif"    type="text" name="id" value="<?php echo $data['id'] ?>" align="center">

            <label class="ket">FOTO</label>
            <input class="idTarif"    type="file" name="foto" id="foto" accept=".jpg, .jpeg, .png, .gif" value="<?php echo $data['foto'] ?>" align="center">

            <label class="ket">DAYA</label>
            <input class="dayaTarif"  type="text" name="daya" value="<?php echo $data['daya'] ?>" align="center">

            <label class="ket">TARIF/kWH</label>
            <input class="hargaTarif" type="text" name="tarifperkwh" value="<?php echo $data['tarifperkwh'] ?>" align="center">

            <button align="center">Simpan</button>
            <p      class="kembali" align="center"><a href="bacatarif">Kembali</p>         
    </div>
</body>
</html>