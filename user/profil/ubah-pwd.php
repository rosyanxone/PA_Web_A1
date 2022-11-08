<?php
    include '../../php/connection.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Pelanggan</title>
    
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="Stylesheet" href="../../stylesheet/Pengguna.css">
</head>
  
<body>
	<?php
		$id=$_GET['id'];
		$sql = "SELECT * FROM user WHERE id ='$id'";
		$query = mysqli_query($conn,$sql);
		$data = mysqli_fetch_array($query);
	?>
    <div class="mainPenggunaEdit">
        <p    class="pengguna" align="center">Ubah Data Pelanggan</p>
        <form class="formPengguna" method='POST'>
            
            <label class="ket">PASSWORD</label>
            <input class="passPengguna" type="password" id="password" value="<?php echo $data['password'] ?>" readonly align="center">
            
            <label class="ket">PASSWORD BARU</label>
            <input class="passPengguna" type="password" name="password" id="password" placeholder="Password" align="center">
            
            <label class="ket">KONFIRMASI PASSWORD</label>
            <input class="passPengguna" type="password" name="confirm-password" id="password" placeholder="Konfirmasi Password" align="center">

            <button align="center" type="submit" name="update">Simpan</button>
            <p      class="kembali" align="center"><a href="../profil.php">Kembali</p>         
    </div>

    <?php
        if(isset($_POST['update']))  {
            $password=$_POST['password'];
            $confirmPwd=$_POST['confirm-password'];
            
            if($password === $confirmPwd) {
                $sql2 ="UPDATE user SET password = '$password' WHERE id = '$id'";
                $query = mysqli_query($conn,$sql2);
                
                if($query) {
                    header('location: ../profil.php');
                } else {
                    echo"Edit Pelanggan Gagal";
                }
            } else {
                // error
            }
        }   
    ?>
</body>
</html>