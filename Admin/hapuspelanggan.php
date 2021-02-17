<?php
	
	$koneksi = mysqli_connect("localhost","root","","nama_makanan");

	?>


<?php 


$ambil= $koneksi->query("SELECT * FROM users  WHERE ID = '$_GET[id]'");

 $koneksi->query("DELETE FROM users WHERE ID = '$_GET[id]'");

 echo "<script>alert('Pelanggan Dihapus');</script>";
 echo "<script>location='index.php?halaman=pelanggan';</script>";
?>