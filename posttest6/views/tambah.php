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
    $img = $_FILES["file"]["name"];
    $tempName = $_FILES["file"]["tmp_name"];

    $file_type = strtolower(pathinfo($img, PATHINFO_EXTENSION));

    $valid_image = true;

  // validation
  $image_size = getimagesize($_FILES["file"]["tmp_name"]);

  if ($image_size === false) {
    echo "<script>alert('Bukan image!')</script>";
    $valid_image = false;
  }

  if ($_FILES["file"]["size"] > 5000000) {
    echo "<script>alert('File terlalu besar!')</script>";
    $valid_image = false;
  }

  if (
    $file_type != "jpg" && $file_type != "png" && $file_type != "jpeg"
    && $file_type != "gif"
  ) {
    echo "<script>alert('File format tidak disupport.')</script>";
    $valid_image = false;
  }

  if (!$valid_image) {
    echo "<script>window.location = window.location.href</script>";
    return;
  }


  $target_file_dir =  "image/";
    $file_format_name = date("Y-m-d") . " " . $nama . "." . $img;
    $target_file_name = $target_file_dir . $file_format_name;
    // move_uploaded_file($tempName, "image/" . $file_format_name);
    move_uploaded_file($tempName, $target_file_name);

    // $target_file_name = $target_file_dir . $file_format_name;

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
        $query = "INSERT INTO datakaryawan VALUES ('', '$user', '$pass', '$nik', '$nama', '$jabatan', '$formattedDate', '$divisi','$target_file_name')";
        // $query = "INSERT INTO datakaryawan VALUES ('', '$user', '$pass', '$nik', '$nama', '$jabatan', '$formattedDate', '$divisi','$file_format_name')";
        // $query = "INSERT INTO datakaryawan VALUES ('', '$user', '$pass', '$nik', '$nama', '$jabatan', '$formattedDate', '$divisi','$img')";
        if (mysqli_query($conn, $query)) {
            echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'dashboard.php'
            </script>";
        } else {
            echo "
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'dashboard.php'
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
                <p>add image : <input type="file" name="file" required> </p>
                <input type="submit" name="tambah" name="spn" value="Tambah Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>