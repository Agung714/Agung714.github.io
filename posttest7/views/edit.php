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

    if (file_exists($_FILES['file']['tmp_name'])) {
      



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

//   $conn, "UPDATE datakaryawan SET Nik = '$nik', Nama_Karyawan = '$nama', Jabatan = '$jabatan', Tanggal_Masuk = '$formattedDate', Divisi = '$divisi', gambar = '$file_format_name' WHERE id = '$id' "



  $target_file_dir =  "image/";
  // 3. Gunakan format penamaan file seperti berikut: yyyy-mm-dd nama-file.ekstensi
  $file_format_name = date("Y-m-d") . " " . $nama . "." . $img;
    // $file_format_name = date("Y-m-d") . " " . $product_name . "." . $file_type;
    $target_file_name = $target_file_dir . $file_format_name;

    $select_stmt = mysqli_prepare($conn, "SELECT gambar FROM datakaryawan WHERE id = ?");
    mysqli_stmt_bind_param($select_stmt, "i", $id);
    mysqli_stmt_execute($select_stmt);
    $result = mysqli_stmt_get_result($select_stmt);
    $old_image = mysqli_fetch_assoc($result)['gambar'];
    mysqli_stmt_close($select_stmt);
    if (file_exists($old_image)) {
        unlink($old_image);
    }

    $update_stmt = mysqli_query($conn, "UPDATE datakaryawan SET Nik = '$nik', Nama_Karyawan = '$nama', Jabatan = '$jabatan', Tanggal_Masuk = '$formattedDate', Divisi = '$divisi', gambar = '$target_file_name' WHERE id = '$id'");
    // $update_stmt = mysqli_query($conn, "UPDATE datakaryawan SET Nik = '$nik', Nama_Karyawan = '$nama', Jabatan = '$jabatan', Tanggal_Masuk = '$formattedDate', Divisi = '$divisi', gambar = '$file_format_name' WHERE id = '$id'");
    // mysqli_stmt_bind_param($update_stmt, "ssisi", $product_name, $product_type, $product_price, $target_file_name, $id);
} else {
    $update_stmt = mysqli_query($conn, "UPDATE datakaryawan SET Nik = '$nik', Nama_Karyawan = '$nama', Jabatan = '$jabatan', Tanggal_Masuk = '$formattedDate', Divisi = '$divisi' WHERE id = '$id'");
    // $update_stmt = mysqli_prepare($conn, "UPDATE datakaryawan SET name=?, type=?, price=? WHERE id=?");
    // mysqli_stmt_bind_param($update_stmt, "ssii", $product_name, $product_type, $product_price, $id);
}


if ($update_stmt) {
    @move_uploaded_file($tempName, $target_file_name);
    echo "<script>alert('Data Berhasil Diubah!')</script>";
} else {
    echo "<script>alert('Data Gagal Diubah!')
    </script>";
    // return;
    // document.location.href = 'edit.php?id=$id'
}
// mysqli_stmt_close($update_stmt);


echo "<script>document.location = 'dashboard.php' </script>";





    // move_uploaded_file($tempName, "image/" . $file_format_name);




    // $file_format_name = date("Y-m-d") . " " . $nama . "." . $img;
    // move_uploaded_file($tempName, "image/" . $file_format_name);
    // $result = mysqli_query($conn, "UPDATE datakaryawan SET Nik = '$nik', Nama_Karyawan = '$nama', Jabatan = '$jabatan', Tanggal_Masuk = '$formattedDate', Divisi = '$divisi', gambar = '$file_format_name' WHERE id = '$id' ");

    // if ($result) {
    //     echo "
    //     <script>
    //         alert('Data berhasil Diubah!');
    //         document.location.href = 'dashboard.php'
    //     </script>";
    // } else {
    //     echo "
    //     <script>
    //         alert('Data Gagal Diubah!');
    //         document.location.href = 'edit.php?id=$id'
    //     </script>";
    // }
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
                <!-- <div class="form-item"> -->
                    <label for="file">Gambar</label>
                    <input type="file" accept="image/*" name="file" id="file">
                <!-- </div> -->
                <!-- <div style="height: 200px; justify-content: start;" class="form-item"> -->
                    <label style="visibility: hidden;" for="file">Gambar Lama</label>
                    <img style="height: 200px; width: 200px;" src="<?php echo $datakaryawan['gambar']; ?>" alt="">
                    
                <!-- </div> -->

                <!-- <p>Update Image: <input type="file" name="file" required> </p> -->
                <input type="submit" name="edit" value="Edit Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>
