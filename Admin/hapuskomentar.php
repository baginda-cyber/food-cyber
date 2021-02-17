<?php
	
	$koneksi = mysqli_connect("localhost","root","","nama_makanan");

	?>


<?php 


$ambil= $koneksi->query("SELECT * FROM komentar  WHERE ID = '$_GET[id]'");

 $koneksi->query("DELETE FROM komentar WHERE ID = '$_GET[id]'");

 echo "<script>alert('Komentar Dihapus');</script>";
 echo "<script>location='index.php?halaman=pembelian';</script>";
?>