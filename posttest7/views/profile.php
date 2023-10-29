<?php
require 'Koneksi.php';
session_start();

if (isset($_SESSION['username'])) {
    // Ambil username dari sesi
    $username = $_SESSION['username'];

    // Query untuk mengambil data karyawan berdasarkan username
    $query = "SELECT * FROM datakaryawan WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Karyawan</title>
    <link rel="stylesheet" href="../style/profile.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <div class="nav-title">
        <h2>BOSQ</h2>
    </div>
    <div class="nav-buttons">
        <a href="logout.php">Logout</a>
        <label class="switch">
            <input type="checkbox" id="darkModeToggle">
            <span class="slider"></span>
        </label>
    </div>
</nav>

<!-- Profil Karyawan -->
<div class="profile-container">
    <table class="profile-details">
        <tr>
            <td colspan="2">
                <h1>Profil Karyawan</h1>
            </td>
        </tr>
        <tr>
            <td>
                <img class="lingkaran" src="<?= $row['gambar']; ?>" alt="Foto Profil">
            </td>

            <!-- <td>
                <img style="height: 200px; width: 200px;" src="<?= $karyawan['gambar']; ?>" alt="Foto Profil">
                
            </td> -->
            <td>
                <table>
                    <tr>
                        <td>NIK</td>
                        <td><?php echo ": ", $row['Nik']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><?php echo ": ", $row['Nama_Karyawan']; ?></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td><?php echo ": ", $row['Jabatan']; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Masuk</td>
                        <td><?php echo ": ", $row['Tanggal_Masuk']; ?></td>
                    </tr>
                    <tr>
                        <td>Divisi</td>
                        <td><?php echo ": ", $row['Divisi']; ?></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>

<!-- JavaScript -->
<script>
const darkModeToggle = document.getElementById('darkModeToggle');

darkModeToggle.addEventListener('change', () => {
    document.body.classList.toggle('dark-mode');
});
</script>

</body>
</html>

<?php
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    // Jika sesi tidak ada, arahkan ke halaman login
    header("Location: login.php");
    exit();
}
?>
