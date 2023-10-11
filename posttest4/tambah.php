

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="body" class="body">
<header id="header" class="header" >
      <a href="index.php" class="logo">BOSQ</a>
      <nav class="navbar">
          <a href="index.php" class="logo">Home</a>
          <a href="about_me.html" class="logo">About Me</a>
      </nav>
      <div class="toggle">
        
        <label class="switch" for="darkmode-toggle">
          <input type="checkbox" id="darkmode-toggle" value="true" onchange="check()"/>
         
            <span class="slider"></span>
          </label>
      </div>

      <script>
        $('#darkmode-toggle').ready(function(){
    $('#darkmode-toggle').click(function(){
        var dark = document.getElementById('darkmode-toggle').checked;
    if(dark == true){
        alert("DARKMODE");
    }
    else{
        alert("LIGHTMODE");
    }

});
})

      </script>
  </header>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    <form action="index.php" method="POST" name="tambah"enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nik</td>
                <td>:</td>
                <td><input type="number" name="nik" size="25"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" size="25" require></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><input type="text" name="jabatan" size="25"></td>
            </tr>
            <tr>
                <td>Tanggal Masuk</td>
                <td>:</td>
                <td>
                    <input type="date" name="tgl_msk" size="25">
                </td>
            </tr>
            <tr>
                <td>Divisi</td>
                <td>:</td>
                <td><input type="text" name="divisi" size="25"></td>
            </tr>
            <tr>
            <div class="row gy-4">
                              <!-- <a id="button-feature1" href="tambah.php" class="btn-buy">Tambah</a> -->
                              <td><input class="btn-buy" type="submit" name="spn" value="simpan" href="index.php" ></td>
                              <br>
                            </div>
            </tr>
        </table>
    </form>
    
    <!-- js -->
    <script src="jsabout2.js"></script>
    <script src="jquery.js"></script>
</body>
</html>