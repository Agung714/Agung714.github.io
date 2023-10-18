<?php
// require "Koneksi.php";
require 'Koneksi.php';

if (isset($_POST['tambah'])) {
    $user  = $_POST['username'];
    $pass = $_POST['password'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $tanggal = $_POST['tgl_msk'];
    $divisi = $_POST['divisi'];

    // Cek apakah username sudah ada di tabel 'datakaryawan'
    $duplicate = mysqli_query($conn, "SELECT * FROM datakaryawan WHERE username = '$user'");
    
    if (mysqli_num_rows($duplicate) > 0){
        echo "<script>alert('Username Sudah Ada'); </script>";
    } 
    elseif ($user =='admin'){
        echo "<script>alert('Username Sudah Ada'); </script>";
    } 
    else {
        $formattedDate = date('Y-m-d', strtotime($tanggal));
        $query = "INSERT INTO datakaryawan VALUES ('', '$user', '$pass', '$nik', '$nama', '$jabatan', '$formattedDate', '$divisi')";
        if (mysqli_query($conn, $query)) {
            echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'Landing.php'
            </script>";
        } else {
            echo "
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'Landing.php'
            </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Tambah Data</h1><hr><br>
            <form action="" method="POST" name="tambah" enctype="multipart/form-data">
                <label for="nik">Username</label>
                <input type="text" name="username" class="textfield" required>
                <label for="nik">Password</label>
                <input type="password" name="password" class="textfield" required>
                <label for="nik">Nik</label>
                <input type="number" name="nik" class="textfield" required>
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="textfield" required>
                <label for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" class="textfield" required>
                <label for="tanggal">Tanggal Masuk</label>
                <input type="date" name="tgl_msk" class="textfield" required>
                <label for="divisi">Divisi</label>
                <input type="text" name="divisi" class="textfield" required>
                <input type="submit" name="tambah" name="spn" value="Tambah Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>