<?php
	include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pembelian</title>
    
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="Stylesheet" href="../styles/Pembelian.css">
</head>
  
<body>
    <div class="mainPembelian">
        <p    class="pembelian" align="center">Tambah Data Pembelian</p>
        <form class="formPembelian" action="aksi_tambah_pembelian.php" method="POST">
            <label class="ket">TANGGAL PEMBELIAN</label>
            <input class="tglPembelian"    type="text" align="center" name="tanggal" id="tanggal" value="<?php echo date('d/m/y'); ?>" readonly>

            <label class="ket">JUMLAH PEMBELIAN</label>
            <input class="jumlahPembelian" type="text" align="center" name="jumlahbeli" id="jumlahbeli">

            <label class="ket">NOMOR METER</label>
            <input class="nomorMeter" name="nometer" type="text" align="center">

            <label  class ="ket">PILIH ID TARIF</label>
			<select class = "idTarif" name="idtarif" class="select">
				<?php
					$kodetarif = mysqli_query($db_link, "select * from tarif");
					while ($p = mysqli_fetch_array($kodetarif)){
						echo "<option value='$p[id]'>($p[id])</option>";
					}
				?>
			</select>

            <button align="center">Simpan</button>
            <p      class="kembali" align="center"><a href="bacapembelian.php">Kembali</p>         
    </div>
</body>
</html>