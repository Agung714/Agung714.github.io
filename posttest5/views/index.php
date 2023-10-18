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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOSQ</title>
 
    <script src="https://unpkg.com/feather-icons"></script>
    
    <link rel="stylesheet" href="../style/styling.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
</head>
<body id="body" class="body">
    <header class="header">
        <a href="index.php" class="logo">BOSQ</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="#Contact">Contact</a>
            <a href="about_me.html">About Me</a>
            <div class="toggle">
              <label class="switch" for="darkmode-toggle">
                <input type="checkbox" id="darkmode-toggle" value="true" onchange="check()"/>
              
                  <span class="slider"></span>
                </label>
            </div>
        </nav>

    </header>
    <div>  
    </div>
    <section id="hero" class="hero d-flex align-items-center">

        <div id="ayam" class="container">
            <BR>
            <BR>
            <BR>
            <BR>
            <BR>
            <BR>
          <div class="row">
            <div class="center">
              <br><br>
              <h1>Welcome to our Employee Data Management System! </h1>
              <h3>Simplify Your Employee Management with our Platform</h3>
              <br>
              <!-- <h2>Fire?</h2> -->
              <h4 >With our Platform, you can easily manage and monitor employee data</h4 >
              <br>
              <div data-aos="fade-up" data-aos-delay="600">
                <br>
                <div class="text-center text-lg-start">
                  <a href="Landing.php" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center border-radius 50%">
                    <span>Get Started</span>
                    
                    </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
              <img src="../assets/istockphoto-1129823165-612x612-removebg-preview.png" class="img-fluid cubit" alt="">
            </div>
          </div>
        </div>
<BR>
</section>     </section>
    <section id="isi" >
        <div id="feature" class="container back-ground p-5" >
            
            <div class="container ">
              <div class="container">
              </div>
              <div  class="row" >
                <div class="container center ">
                  <div class="col-lg-3 col-md-6 center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box " >
                      <h3 style="color: #07d5c0;font-size: 40px;" >Feature</h3>
                        <img src="../assets/istockphoto-1129823253-612x612-removebg-preview.png" class="img-fluid "width="150%" alt="">
                        <div class="flex" style="margin-left: auto;margin-right: auto;">
                          <div class="flex">
                              <br>    
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
            </div>
            <BR>
            <div class="row center">

          <footer id="footer" class="footer center ">

            <div class="footer-newsletter">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-12 text-center ">
                    
                    <div class="footer-top">
                      <div class="container">
                        <div class="row gy-4 justify-content-center">
                          <div class="col-lg-5 col-md-12 footer-info ">
                    <a href="index.php" class="logo d-flex align-items-center justify-content-center">
                     
                      <span id="Contact">BOSQ</span>
                    </a>
                    <p>BOSQ sistem pendataan karyawan yang ramah pengguna, mudah digunakan, ANTI RIBET</p>
                  </div>
                  <div class="col-lg-2 col-6 footer-links ">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="about_me.html">About Me</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                      No.28 Rt.53 Gg.Perdamaian Baru <br>
                      Balikpapan, 76115<br>
                      Indonesia <br><br>
                      <strong>Phone:</strong> 0811 1144 3322<br>
                      <strong>Email:</strong> Bosq@gmail.com<br>
                    </p>
        
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
            <div class="container">
              <div class="copyright">
                &copy; Copyright <strong><span></span></strong>. All Rights Reserved
              </div>
              <div class="credits">
                Designed by Anandita
              </div>
            </div>
          </footer>
          
    <!-- js -->
    <script src="../scripts/jsku.js"></script>
    <!-- <script src="../scripts/jquery.js"></script> -->
        </body>
        
        
        
        </html>