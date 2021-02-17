<?php

require 'function.php';

 $servername = "localhost";
 $username = "root";
 $password ="";


 //Koneksi ke Database
$sandi = mysqli_connect("localhost","root","","nama_makanan");
 


if(isset($_POST["register"])) {


if(registrasi($_POST) > 0) {

	echo "<script>
			alert('User baru berhasil di tambahkan!');
			location='http://localhost:8080`dcew2/pa1/delicious/login2.php';
			</script>";

}
else{
echo mysqli_error($sandi);
}
 
}



?>





<!DOCTYPE html>
<html>
<head>
	<title>Login Cafe</title>
	<link rel="stylesheet" type="text/css" href="sweetalert-master/src/sweetalert.css">
	<script type="text/javascript" src="sweetalert-master/src/sweetalert.js"></script>

<style type="text/css">
	label{
		display: block;
	}
	body{
		background:url(gambar/hd8.jpg);
		background-position: center;
		font-family: sans-serif;
		background-size: cover;
		background-attachment: fixed;
	}
.loginbox{

	width: 350px;
	height: 560px;
	background: #393231;
	color:#fff;
	top:55%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	border-radius: 20px;
box-shadow:  0px 15px 30px 10px #DCCCC9;
}
.loginbox input[type="text"],input[type="password"]
{
border: none;
border-bottom: 1px solid #fff;
background: transparent;
outline: none;
height: 40px;
color:#fff;
font-size: 16px;
}
button{
	border:none;
	outline: none;
	height: 40px;
	background:#fb2525;
	color:#fff;
	font-size: 18px;
	border-radius: 20px;

}
button:hover{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}
.avatar{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top:-16%;
	left: calc(50% - 50px);

}
.akun a{
	color: white;
}


	</style>
</head>





<div class="loginbox"><body>
<img src="img/icon/3.jpg" class="avatar">
	<form action="" method="post">
	</style>
	
<h1><center><marquee behavior="alternate">Pendaftaran User</marquee></center></h1>
<ul>
	<li>
		<label for="username"> Username :</label>

		<input type="text" name="Username" id="username" placeholder="Masukkan Username">
	</li>
	</ul>
	<ul>
	<li>
		<label	for="password"> Password :</label> 
		<input type="password" name="Password" id="password" placeholder="Masukkan Password" min="3" max="6">
	</li>
	</ul>

	<ul>
	<li>
		<label for="password2">Konfirmasi Password :</label>
		
		<input type="password" name="Password2" id="password2" placeholder="Ulangi password">
	</li>
</ul>
<ul>
	<li>
		<label for="username"> Email :</label>

		<input type="text" name="Email" id="email" placeholder="Masukkan Email">
	</li>
	</ul>

	<ul>
	<li>
		<label for="Kredit">  No.Telepon :</label>
		<input type="text" name="Kredit" id="Kredit" placeholder="Masukkan No.Telepon" onkeypress="return hanyaAngka(event)"/>

		<script type="text/javascript">
			function hanyaAngka(evt){
				var charCode = (evt.which)? evt.which : event.keyCode
				if (charCode > 31 && (charCode <48 || charCode > 57)) {

					return false;
					return true;
				}
			}
		</script>
	</li>
	</ul>

	<ul>

	<div class="akun"><a href="login2.php">Sudah mempunyai akun?</a></div> 
	<br>
		<button type="submit" name="register"> Daftar Sekarang</button>
		
		</li>
</ul>
</form> 
</div> 



</body>


<script type="text/javascript">
	var sandi=document.getElementById("username").value;
	var sandi2=document.getElementById("password").value;
	if(sandi == " " && sandi2 == ""){

swal("berhasil","Good","success");
	}



</script>

</html>