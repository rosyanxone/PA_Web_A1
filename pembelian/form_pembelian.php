<?php
	include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pembelian</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="Stylesheet" href="../styles/PembelianCustomer.css">
</head>

<body>
    <div class="mainPembelian">
        <div class="bungkus1">
            <form class="formPembelian" action="aksi_tambah_pembelian.php" method="POST">
                <h3    class="judul">Pembelian</h3>
                <label class="ket">TANGGAL PEMBELIAN</label>
                <input class="tglPembelian"    type="text"  name="tanggal" id="tanggal" value="<?php echo date('d/m/y'); ?>" readonly>
    
                <label class="ket">JUMLAH PEMBELIAN</label>
                <input class="jumlahPembelian" name="jumlahbeli" id="jumlahbeli" type="text" >
    
                <label class="ket">NOMOR METER</label>
                <input class="nomorMeter"      name="nometer" id="nometer" type="text" >
    
                <label  class ="ket">PILIH ID TARIF</label>
                <select class = "idTarif" name="idtarif" id="idtarif">
                    <?php
                        $kodetarif = mysqli_query($db_link, "select * from tarif");
                        while ($p = mysqli_fetch_array($kodetarif)){
                            echo "<option value='$p[id]'>($p[id])</option>";
                        }
                    ?>
                </select>
    
                <button align="center" >Simpan</button>
                <p class="kembali" align="center" ><a href="#">Kembali</a></p>
            </form>

            <div class="bungkus2">
                <h3 class="judul" \>Informasi Tarif</h3>
                
                <div class="infoTarif">
                    <div class="boxTarif">
                        <div class="isiBoxTarif">
                            <h5>T1</h5>
                            <span class="material-icons">bolt</span>
                            <ul class="isi">
                                <li>Daya <strong> 900 VA</strong></li>
                                <li>Tarif/Kwh <strong> 1352</strong></li>
                            </ul>
                        </div>

                        <div class="isiBoxTarif">
                            <h5>T2</h5>
                            <span class="material-icons">bolt</span>
                            <ul class="isi">
                                <li>Daya <strong> 1500 VA</strong></li>
                                <li>Tarif/Kwh <strong> 1444</strong></li>
                            </ul>
                        </div>
                    </div>

                    <div class="boxTarif">
                        <div class="isiBoxTarif">
                            <h5>T3</h5>
                            <span class="material-icons">bolt</span>
                            <ul class="isi">
                                <li>Daya <strong> 2200 VA</strong></li>
                                <li>Tarif/Kwh <strong> 1444</strong></li>
                            </ul>
                        </div>

                        <div class="isiBoxTarif">
                            <h5>T4</h5>
                            <span class="material-icons">bolt</span>
                            <ul class="isi">
                                <li>Daya <strong> 5500 VA</strong></li>
                                <li>Tarif/Kwh<strong> 1444</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>