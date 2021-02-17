<?php
 $total = NULL;
 $post = $_POST;
  
 /* untuk invoice bisa di ambil dari database, karena pada dasarnya invoice tidak akan pernah recordnya itu di delete  */
 /* berapa jumlah invoice kemudian di tambahkan 1 */
 $numrows_invoice_db = 313;
 $invoice = $numrows_invoice_db + 1;
?>
<?php 
session_start();


 $koneksi = new mysqli("localhost","root","","toko");
if (empty($_SESSION["keranjangmakanan"])) {
    echo "<script>alert('Keranjang Makanan masih kosong');</script>
    ";
    # code...
}

 ?>
 
 
<!DOCTYPE html>
 <head>
  <style type="text/css">
  body{background:#efefef;font-family:arial;}
  #wrapshopcart{width:70%;margin:3em auto;padding:30px;background:#fff;box-shadow:0 0 15px #ddd;}
  h1{margin:0;padding:0;font-size:2.5em;font-weight:bold;}
  p{font-size:1em;margin:0;}
  table{margin:2em 0 0 0; border:1px solid #eee;width:100%; border-collapse: separate;border-spacing:0;}
  table th{background:#fafafa; border:none; padding:20px ; font-weight:normal;text-align:left;}
  table td{background:#fff; border:none; padding:12px  20px; font-weight:normal;text-align:left; border-top:1px solid #eee;}
  table tr.total td{font-size:1.5em;}
  .btnsubmit{display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:2em 0;}
  form{margin:2em 0 0 0;}
  label{display:inline-block;width:auto;}
  input[type=text]{border:1px solid #bbb;padding:10px;width:30em;}
  textarea{border:1px solid #bbb;padding:10px;width:30em;height:5em;vertical-align:text-top;margin:0.3em 0 0 0;}
  button:hover{
    background-color: #1c8314;
    border-color: #40ba37;
  }
  .submitbtn{font-size:1.5em;display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:0.5em 0 0 8em; };

  </style>
  <title>Form Pemesanan</title>

 <link rel="icon" href="img/core-img/favicon.ico">

<link rel="stylesheet" href="style.css">

 </head>
  
 <body>

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
   <h1>Invoice <?php echo $invoice;?></h1>
   <p>Silahkan save halaman ini ... </p>
    
   <h3>Berikut adalah data lengkap Anda : </h3>
   <form>
   <label>Nama Lengkap : <?php echo $post['nama_depan'] ;?> </label><br><br>
 
   <label>Kabupaten : <?php echo $post['email'] ;?> </label><br><br>
 
   <label>No HP : <?php echo $post['no_hp'] ;?></label><br><br>
 
   
  
  
   <label>Alamat : <?php echo $post['alamat'] ;?></label><br><br>
 </form>
    <section class="konten">
<div class="container">
  <h1>Keranjang Belanja Makanan</h1>

<hr>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Produk</th>
      <th>Harga</th>
      <th>Jumlah</th>
      <th>Sub Harga</th>
            <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
 
  <?php $total = 0; ?>
  <?php $nomor=1; ?>
  <?php foreach ($_SESSION["keranjangmakanan"] as $ID => $jumlah): ?>
<?php $ambil= $koneksi->query("SELECT * FROM Produk WHERE ID='$ID'");
$pecah = $ambil->fetch_assoc();
$subharga = $pecah["harga"]*$jumlah;
$total = $total + $subharga;
?>
    <tr>
      <td><?php echo $nomor;?></td>
      <td><?php echo $pecah["Name"]; ?></td>
      <td>Rp.<?php echo number_format($pecah["harga"]) ?></td>
      <td><?php echo $jumlah;?></td>
      <td>Rp.<?php echo number_format($subharga);?></td>
            <td>
                <a href="hapusmakanan.php?id=<?php echo $ID?>" class="btn btn-danger btn-xs">Hapus</a>
            </td>
    </tr>
    <?php $nomor++?>
  <?php endforeach ?>
  </tbody>
<td>Total Makanan:<td>Rp.<?php echo $total;?></td></td>
</table>

<a href="menu-makanan.php" class="btn btn-warning" style="font-size: 17px;">Tambah Barang</a>
<a href="pembayaranmakanan.php" class="btn btn-primary" style="font-size: 17px;">Checkout</a>
<a href="keranjang.php" class="btn btn-success" style="font-size: 17px;">Keranjang Minuman</a>
</div>
  
</section>


<section class="konten">
<div class="container">
  <h1>Keranjang Belanja Minuman</h1>

<hr>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Produk</th>
      <th>Harga</th>
      <th>Jumlah</th>
      <th>Sub Harga</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $total2=0; ?>
  <?php $nomor=1; ?>
  <?php foreach ($_SESSION["keranjang"] as $ID => $jumlah): ?>
<?php $ambil= $koneksi->query("SELECT * FROM produkminuman WHERE ID='$ID'");
$pecah = $ambil->fetch_assoc();
$subharga = $pecah["harga"]*$jumlah;
$total2 = $total2 + $subharga; 
?>
    <tr>
      <td><?php echo $nomor;?></td>
      <td><?php echo $pecah["Name"]; ?></td>
      <td>Rp.<?php echo number_format($pecah["harga"]) ?></td>
      <td><?php echo $jumlah;?></td>
      <td>Rp.<?php echo number_format($subharga);?></td>
      <td>
        <a href="hapusminuman.php?id=<?php echo $ID?>" class="btn btn-danger">hapus</a>
      </td>
    </tr>

      
    <?php $nomor++?>
      
  <?php endforeach ?>
  
  </tbody>
<td>Total Minuman :<td>Rp.<?php echo $total2 ;?></td></td>


</table>

<a href="menu-minuman.php" class="btn btn-warning" style="font-size: 17px;">Tambah Barang</a>
<a href="pembayaranminuman.php" class="btn btn-primary" style="font-size: 17px;">Checkout</a>
<a href="keranjangmakanan.php" class="btn btn-success" style="font-size: 17px;">Keranjang Makanan</a>
</div>
  
</section>



<br><br>
   <button onclick="myFunction()" style="background-color: #40ba37;width: 20%; height: 40px; cursor: pointer;color: #ffffff";
 >Beli Sekarang</button></a>


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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script type="text/javascript">
 
    function myFunction() {
        setTimeout(function(){
            window.location= "http://localhost:8080/pa1/delicious/index.php";
  },2000);
            swal("Good Job","Terima Kasih sudah membeli","success");

}    

</script>
 </body>
</html>