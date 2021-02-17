<?php
	session_start();
	$ID = $_GET["id"];
	unset($_SESSION["keranjangmakanan"][$ID]);

	echo "<script>alert('produk dihapus');</script>";
	echo "<script>location='keranjangmakanan.php';</script>";
?>