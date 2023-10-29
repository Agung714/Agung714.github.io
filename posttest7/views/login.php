<?php
session_start();
require 'Koneksi.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['login'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Mengambil data dari form login
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE username='$username' ";
        $result  = mysqli_query($conn,$query);
        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION['username'] = $username;

            $row  = mysqli_fetch_assoc($result);
        
          if(password_verify($password, $row['password'])){
              $_SESSION['login'] =true;
              header("location:profile.php");
              exit;   }
          }
          elseif($username=='admin'&& $password=='admin'){
            header("Location: dashboard.php");
        }
        
        else {
          
    $error = true;
          } 
        }
        
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login2.css">
    <!-- <link rel="stylesheet" href="styling2.css"> -->
    <title>Login</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="page">
            <div class="container">
    <div class="left">
      <div class="login">Login</div>
      </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <div class="form">
        <form action="" method="POST" enctype="multipart/form-data">
        <?php
            if(isset($error)){
                echo "<p style='color:red';> username atau password anda salah </p>";
            }?>
                
        <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" name="login" value="Submit">
            <!-- <button type="submit" id="submit">Login</button> -->
        </form>

      </div>
    </div>
  </div>
</div>
</form>

<!-- js -->
<script src="../scripts/jslogin.js"></script>

</body>
</html>



