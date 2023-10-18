<?php
require "koneksi.php";

$id = $_GET['id'];

if (isset($_POST['edit'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama']; 
    $jabatan = $_POST['jabatan'];
    $tanggal = $_POST['tanggal'];
    $divisi = $_POST['divisi'];
    $formattedDate = date('Y-m-d', strtotime($tanggal));
    $result = mysqli_query($conn, "UPDATE datakaryawan SET Nik = '$nik', Nama_Karyawan = '$nama', Jabatan = '$jabatan', Tanggal_Masuk = '$formattedDate', Divisi = '$divisi' WHERE id = '$id' ");

    if ($result) {
        echo "
        <script>
            alert('Data berhasil Diubah!');
            document.location.href = 'Landing.php'
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah!');
            document.location.href = 'edit.php?id=$id'
        </script>";
    }
}

$result = mysqli_query($conn, "SELECT * FROM datakaryawan where id=$id");
$datakaryawan = [];

while ($row = mysqli_fetch_assoc($result)) {
    $datakaryawan[] = $row;
}

$datakaryawan = $datakaryawan[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Edit Data</h1><hr><br>
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="nik">Nik</label>
                <input type="number" name="nik" value="<?php echo $datakaryawan['Nik']?>" class="textfield" required>
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="<?php echo $datakaryawan['Nama_Karyawan']?>" class="textfield" required>
                <label for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" value="<?php echo $datakaryawan['Jabatan']?>" class="textfield" required>
                <label for="tanggal">Tanggal Masuk</label>
                <input type="date" name="tanggal" value="<?php echo $datakaryawan['Tanggal_Masuk']?>" class="textfield" required>
                <label for="divisi">Divisi</label>
                <input type="text" name="divisi" value="<?php echo $datakaryawan['Divisi']?>" class="textfield" required>
                <input type="submit" name="edit" value="Edit Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>
