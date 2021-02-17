 <?php 

 session_start();
//koneksi
$koneksi = new mysqli("localhost","root","","nama_makanan");

 ?>	


 <?php 
                                    if (isset($_POST['login'])) 
                                    {
                                    $ambil = $koneksi->query("SELECT * FROM users WHERE Username='$_POST[user]' AND Password2='$_POST[pass]'");
                                    $yangcocok = $ambil->num_rows;
                                    if ($yangcocok==1)
                                     {
                                      $_SESSION['users']=$ambil->fetch_assoc();
                                       echo "<script>alert('Login Sukses');</script>";
                                       echo "<script>location='index.php';</script>";
                                    }else{

                                       echo "<script>alert('Login Gagal');</script>";
                                       echo "<script>location='login2.php';</script>";
                                    }

                                     }
                                      ?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/core-img/favicon.ico">


	<title class="qq">Masuk Sekarang</title>

<style type="text/css">
	



</style>
<?php if(isset($error)) :?>
<p>Eror</p>

<?php endif ; ?>
</head>
<style type="text/css">
	label{
		display: block;
	}

		body{
		margin: 0;
		padding:0;
		background-position: center;
		font-family: "Magneto Bold"; 
		background: url(gambar/hd7.jpg);
		background-attachment: fixed;
		background-size: cover;
	}


	form{
		background: #fcfcfc;
		border-radius: 20px;
		padding: 20px;
		padding-top: 20px;
		width: 300px;
		margin:0 auto;
		margin-top: 87px;
		box-shadow: 5px 20px 35px #090807;
		font-family: arial ;

	}
.loginbox input[type="text"],input[type="password"]
{
border: none;
border-bottom: 1px solid #000;
background: transparent;
outline: none;
height: 40px;
color:#000;
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
	top:3%;
	left: calc(50% - 50px);

}

	</style>

</head>
<div class="loginbox"><body>
<img src="img/icon/3.jpg" class="avatar">
	<form action="" method="post">
	</style>
	<form>
		<center><h1 style="color: black; font-family:  Brush Script Std Medium ;" ><marquee behavior="scrool" > Masuk Disini</marquee></center></h1>

			<form action="" method="post">	

					<ul>	
			<li>
				<label for="username" style="color: black;">Username:	</label>
				<input type="text" name="user" id="username" placeholder="Masukkan Username" >
							</li>

							<li>	
									<label for="password" style="color: black;">Password :</label>
									<input type="password" name="pass" id="password" placeholder="Masukkan Password">

							</li>
						<br>
				<a href="login.php">Belum ada akun?</a>
				<br>
							<button type="submit" name="login" style="margin-top: 30px;">Masuk</button>



					</ul>
			</form>


</body>
</html>