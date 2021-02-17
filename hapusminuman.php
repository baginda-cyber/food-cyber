<?php
	session_start();
	$ID = $_GET["id"];
	unset($_SESSION["keranjang"][$ID]);

	echo "<script>alert('produk dihapus');</script>";
	echo "<script>location='keranjang.php';</script>";
?>