<?php
require 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM datakaryawan");

$datakaryawan = [];

while ($row = mysqli_fetch_assoc($result)){
    $datakaryawan[] = $row;
}

$result2 = mysqli_query($conn, "SELECT * FROM komentar");

$komentar = [];
while ($row = mysqli_fetch_assoc($result2)){
    $komentar[] = $row;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/styling2.css">
</head>
<body>
<header class="header">
        <a href="index.php" class="logo">BOSQ</a>
        <nav class="navbar">
            <a href="index.php" class="logo">Logout</a>
        </nav>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
            <table border="1" cellpadding="5" width="95%" height="auto" style="margin-left: auto; margin-right: auto;">
    <caption style="font-size: 50px;"><b>Data Karyawan</b>     
    <div class="row gy-4"><a id="button-feature1" href="tambah.php" class="btn-buy"><h4 class="tulisan">+ Tambah</h4></a>
     <br>
    </div></caption>
    <tr class="table-cadangan">
        <td width="auto"><h3 class="tulisan-tabel">No</h3></td>
        <td width="auto"><h3 class="tulisan-tabel">Nik</h3></td>
        <td width="auto"><h3 class="tulisan-tabel">Username</h3></td>
        <td width="auto"> <h3 class="tulisan-tabel">Nama Karyawan</h3></td>
        <td width="auto"><h3 class="tulisan-tabel">Jabatan</h3></td>
        <td width="auto"><h3 class="tulisan-tabel">Tanggal Masuk</h3></td>
        <td width="auto"><h3 class="tulisan-tabel">Divisi</h3></td>
        <td width="110"><h3 class="tulisan-tabel">Aksi</h3></td>
    </tr>

    <?php
    $i = 1;
    foreach ($datakaryawan as $karyawan) :
    ?>
        <tr style="font-size: 20px;text-align: center">
            <td><?php echo $i ?></td>
            <td><?php echo $karyawan["Nik"] ?></td>
            <td><?php echo $karyawan["username"] ?></td>
            <td><?php echo $karyawan["Nama_Karyawan"] ?></td>
            <td><?php echo $karyawan["Jabatan"] ?></td>
            <td><?php echo $karyawan["Tanggal_Masuk"] ?></td>
            <td><?php echo $karyawan["Divisi"] ?></td>
            <td class="action">
                <a href="edit.php?id=<?php echo $karyawan["Id"] ?>"><button class="edit-btn" id="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/></svg></button></a>
                <a href="hapus.php?id=<?php echo $karyawan["Id"] ?>"><button name="hapus" class="delete-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>
            </td>
        </tr>
        <?php $i++;
    endforeach;
    ?>
</table>

</div>  
</body>
</html>