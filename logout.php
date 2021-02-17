<?php 
session_start();

session_destroy();
echo "<script>alert('anda telah logout');</script>";
	

	echo "<script>location='login2.php';</script>";
?>