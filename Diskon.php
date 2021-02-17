<!DOCTYPE html>
<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> Diskon </title>
    
     <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
 
    <!-- Core Stylesheet -->
    <style type="text/css">
        .test{
                box-shadow: 8px 6px 7px;
                color: aqua;
                    text-shadow: 2px 6.12px 7px;
                    color: black;
                    color-font :aqua;
                    }
                    .qq{
                        box-shadow: 10px 10px 10px;
                    }
                    .sa{

                       
    box-shadow: 0 3px 6px rgba(0,0,0,.25);
    transform:  rotate(+2deg);
    -o-transform: rotate(+2deg);
    -webkit-transform:  rotate(+2deg);
    -moz-transform: rotate(+2deg);

    margin-top: 20px;
    border-radius: 20px;

}
.sa:hover {
    box-shadow:  10px 12px 6px rgba(0,0,0,.5);
    transform:  rotate(-1deg);
    -webkit-transform:  rotate(-1deg);
    -o-transform:  rotate(-1deg);
    -moz-transform: rotate(-1deg);
}

    </style>
</head>
<body>
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
                                <ul><li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="#">Menu</a>
                                        <ul class="dropdown">
                                            <li><a href="menu-makanan.php">Menu Makanan</a></li>
                                            <li><a href="menu-minuman.php">Menu Minuman</a></li>
                                           

                                            </li>
                                        </ul>
                                    </li>
                                 
                                   <li><a href="galeri.php">Galeri</a></li>
                                    <li><a href="pemesanan2.php">Pembelian</a></li>
                                    <li><a href="about.php">About Us</a></li>
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
                    <center><h2 style="font-family:'Tekton Pro' ; font-size: 70px;" class="test"><marquee scrollamount="15"> Spesial untuk Hari ini</marquee></h2>
                        </center>
                </header>

                    <div class="qq">    


              <div>  
                <center>    <div class="col-12 col-lg-4">
                    <div class="delicious-add">
                        <h1>Ayam Mozarella</h1>
                        <h3 style="color:red;"><strike>Rp.30.000</strike></h3><h3 style="color:green;">Rp.15.000</h3>
      <img src="img/mak/moza.jpg"  alt="" class="sa" style="width: 320px; height: 300px;">
                    </div>
                </center>
        <form action="" method="POST" onSubmit="return false">
                                      <label for="nama">
                          <input type="text" name="nama" placeholder="Masukkan Kode Promo" id="nama" style="width: 1343px;    margin-top: -10px; height: 100px;border-radius: 20px;box-shadow: 0 0 2px 2px;"  >
                          <label for="nama">
                            <a href=""><button type="submit" name="nama" id="nama" onclick="validasi()"  class="btn delicious-btn w-100" style="height: 70px;border-radius: 5px;box-shadow: 10px 10px 100px; margin-top:20px;">Kirirm</button></a>  
              </label>


          </form>
        </div>
         <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Footer Social Info -->
                    <div class="footer-social-info text-right">
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    <!-- Footer Logo -->
       
                    <div class="footer-logo">
                        <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                    </div>
                    <!-- Copywrite -->
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Kami melayani dari Hati<i class="fa fa-heart-o" aria-hidden="true">  </i> 
 <a href="http://localhost/Proyek%20Akhir/index.php" target="_blank">Colorlib</a></p>
                </div>
            </div>
        </div>
    </footer>
     <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

<script type="text/javascript">
 
    function validasi() {
        var nama = document.getElementById("nama").value;
        
        if (nama =="dbarans") { 
            setTimeout(function(){
            window.location="diskonmoza1.php";
            },1800)
            swal("Good Job","Kode Berhasil","success");
         
                        }else{
           swal('error','silahkan lihat kode kembali','error');
        }

    }

</script>
</html>