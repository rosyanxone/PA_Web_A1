<?php
	include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Tarif</title>
    
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="Stylesheet" href="../styles/Tarif-new.css">
</head>
  
<body>
    <div class="mainTarif">
        <p    class="tarif" align="center">Tambah Tarif</p>
        <form class="formTarif" action="aksi_tambah_tarif.php" method="POST" enctype="multipart/form-data">
            <label class="ket">ID TARIF</label>
            <input class="idTarif"    type="text" name="id" id="id" align="center">

            <label class="ket">ID TARIF</label>
            <input class="idTarif"    type="file" name="foto" id="foto" accept=".jpg, .jpeg, .png, .gif" align="center">

            <label class="ket">DAYA</label>
            <input class="dayaTarif"  type="text" name="daya" id="daya" align="center">

            <label class="ket">TARIF/kWH</label>
            <input class="hargaTarif" type="text" name="tarifperkwh" id="tarifperkwh" align="center">

            <button align="center">Simpan</button>
            <p      class="kembali" align="center"><a href="bacatarif.php">Kembali</p>         
    </div>
</body>
</html>