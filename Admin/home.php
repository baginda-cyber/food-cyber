<h2>Selamat Datang Administrator</h2>

<?php 


 ?>
 <body>
 <style type="text/css">

section{
	background-color: grey;
	border-radius: 20px;


}

 	img{

box-shadow: 0 3px 6px rgba(0,0,0,.25);
    transform:  rotate(0deg);
    -o-transform: rotate(0deg);
    -webkit-transform:  rotate(0deg);
    -moz-transform: rotate(0deg);

        transition: all 1s;

}
img:hover{
 box-shadow:  0px 20px 20px rgba(0,0,0,0.6);
    transform:  rotate(0deg);
    -webkit-transform:  rotate(0deg);
    -o-transform:  rotate(0deg);
    -moz-transform: rotate(0deg);

transform: scale(1.08);

}

 </style>
<section class="konten">
<div class="container">
 <h1 style="color: white;">Produk Rekomendasi yang akan di Upload</h1>
 <div class="row">
 	<?php $ambil=$koneksi->query("SELECT * FROM produk") ?>
 	<?php while ($perproduk = $ambil->fetch_assoc()) { ?>
 
 	<div class="col-md-4" style="width: 335px;; background-color: blue;border-radius: 20px;">
 		<div class="thumbnail" height="100px;" style="border-radius: 20px;">
 			<img src="../foto_produk/<?php echo $perproduk['foto']; ?>" style="height: 200px; width: 240px; border-radius: 20px;" >
 			<div class="caption">
 			<h3><?php echo $perproduk['Name']; ?></h3>
 			<strong><?php echo $perproduk['harga']; ?></strong>
            <br>
 			</div>  
 		</div>
 	</div>
 	<?php } ?>

</div>
 </div>
 </section>
 </body>    