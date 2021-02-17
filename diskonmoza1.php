<?php
 session_start();
?>
 
 
<!DOCTYPE html>
 <head>
  <style type="text/css">
  body{background:#efefef;font-family:arial;}
  #wrapshopcart{width:70%; height: 810px; margin:3em auto;padding:30px;background:#fff;box-shadow:0 0 15px #ddd;}
  h1{margin:0;padding:0;font-size:2.5em;font-weight:bold;}
  p{font-size:1em;margin:0;}
  table{margin:2em 0 0 0; border:1px solid #eee;width:100%; border-collapse: separate;border-spacing:0;}
  table th{background:#fafafa; border:none; padding:20px ; font-weight:normal;text-align:left;}
  table td{background:#fff; border:none; padding:12px  20px; font-weight:normal;text-align:left; border-top:1px solid #eee;}
  table tr.total td{font-size:1.5em;}
  .btnsubmit{display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:2em 0;}
  form{margin:2em 0 0 0;}
  label{display:inline-block;width:12em;}
  input[type=text]{border:1px solid #bbb;padding:10px;width:30em;}
  textarea{border:1px solid #bbb;padding:10px;width:30em;height:5em;vertical-align:text-top;margin:0.3em 0 0 0;}
 
  .submitbtn{ font-size:1.5em;display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:0.5em 0 0 8em;};
  
   
  </style>
 </head>
 <title>Form Pemesanan</title>
 <link rel="icon" href="img/core-img/favicon.ico">

<link rel="stylesheet" href="style.css">
  
 <body>


 <!-- Preloader -->
    <div id="preloader">
        <i class="circle-preloader"></i>
        <img src="img/core-img/salad.png" alt="">
    </div>

    <!-- Search Wrapper -->
    <div class="search-wrapper">
        <!-- Close Btn -->
        <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#" method="post">
                        <input type="search" name="search" placeholder="Type any keywords...">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        
                    <!-- Breaking News -->
                    <div class="col-12 col-sm-6">
                        <div class="breaking-news">
                            <div id="breakingNewsTicker" class="ticker">
                                                        </div>
                        </div>
                    </div>

                    <!-- Top Social Info -->
                    
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="delicious-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="deliciousNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="#">Menu</a>
                                        <ul class="dropdown">
                                        <li><a href="menu-makanan.php">Menu Makanan</a></li>
                                            <li><a href="menu-minuman.php">Menu Minuman</a></li>

                                            </li>
                                        </ul>
                                    </li>
                                   
                                     <li><a href="galeri.php">Galeri</a></li>
                                    <li><a href="pemesanan2.php">Pembelian</a></li>
                                    <li><a href="AboutUs.php">About Us</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                                <!-- Newsletter Form -->
                                <div class="search-btn">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->



  <div id="wrapshopcart">
   <h1>Form Registrasi</h1>
   <p>Silakan lengkapi form di bawah ini untuk melanjutkan ke tahap pembayaran : </p>
      
   <form action="diskonmoza2.php" method="POST" onsubmit="validasi()">
   
   <input type="text" name="nama_depan" class="inputan" placeholder="Nama Anda" required=""> 
     <input type="submit" name="kirim" value="Kirim Isi Formulir!" class="submitbtn" style="cursor: pointer;" >
    <input type="text" name="no_hp" class="inputan" placeholder="No Hp" />
 
  <label></label><input type="text" name="email" class="inputan" placeholder="Kabupaten" id="kabupaten" />
 
   <label></label><textarea name="alamat" class="textan" placeholder="Alamat" ></textarea><br>
   <i>Hanya untuk di kawasan Tobasa</i><br><br>
<br>    
<a href="menu-makanan.php" ><input type="" name="menumakan" class="btn btn-primary" value="Beli Makanan"></a>
 
<a href="menu-minuman.php" ><input type="" name="menumakan" class="btn btn-success" value="Beli Minuman"></a>

 <?php
  
 $total = NULL;
 $_SESSION['price'] = array(
       'nasigoreng' => 20000,
       'miegoreng' => 15000,                
       'airputih' => 1000,
       'moza' => 15000,




      );

 ?>


       <div class="selet" style="width: 420px;">


 <br>
 <label></label><h6>Diskon Mozarella & Quantity</h6>
  <select name="productid"  ><option>Ayam Mozarella <?php $_SESSION['cart'] = array(
       array('productid' => 'moza'));?></option></select>

    <select name="qqn"><option>--</option><option>1</option><option>2</option><option>3</option></select>
    </div>
         
 
 
   </form>
    
  </div>   


  <!-- ##### Follow Us Instagram Area Start ##### -->
    <div class="follow-us-instagram">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>Follow Us Instragram</h5>
                </div>
            </div>
        </div>
        <!-- Instagram Feeds -->
        <div class="insta-feeds d-flex flex-wrap">
            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta1.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta2.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta3.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta4.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta5.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta6.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta7.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Follow Us Instagram Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Footer Social Info -->
                    <div class="footer-social-info text-right">
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                    </div>



                    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

 </body>

 <script type="text/javascript">
     function validasi() {
        var kabupaten  = document.getElementById("kabupaten").value;
        if (kabupaten != "toba samosir") {
        
            alert("Pelayanan ini Hanya untuk di kabupaten Toba Samosir");
            window.location="http://localhost/pa1/delicious/pemesanan2.php";
                           return false;
        
             
        }
         // body...
     }
 </script>

</html>