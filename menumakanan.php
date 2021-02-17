<?php
$koneksi=mysqli_connect("localhost","root","","toko");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
<section class="konten">
<div class="container">
 <h1 style="color: white;">Produk Rekomendasi yang akan di Upload</h1>
 <div class="row">
 	<?php $ambil=$koneksi->query("SELECT * FROM produk") ?>
 	<?php while ($perproduk = $ambil->fetch_assoc()) { ?>
 
 	<div class="col-md-4" style="border-radius: 20px;">
 		<div class="thumbnail" height="100px;" style="border-radius: 20px;">
 			<img src="../foto_produk/<?php echo $perproduk['foto']; ?>" style="height: 200px; width: 240px; border-radius: 20px;" >
 			<div class="caption">
 			<h3><?php echo $perproduk['Name']; ?></h3>
 			<strong><?php echo $perproduk['harga']; ?></strong>
            <br>
            <a href="beli.php?id=<?php echo $perproduk['ID'];?>" class="btn btn-primary">Beli</a>
 			</div>  
 		</div>
 	</div>
 	<?php } ?>

</div>
 </div>
 </section>
</body>
</html>