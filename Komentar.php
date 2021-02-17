<?php

require 'function.php';
if(isset($_POST["submit"]) ){
		//Ambil data dari tiap elemen dalam form

	$Nama = htmlspecialchars( $_POST["Nama"]);
	$Komentar =htmlspecialchars( $_POST["Komentar"]);

//query Insert data
	$query = "INSERT INTO komentar
				VALUES
				('','$Nama','$Komentar');
				";
	mysqli_query($sandi,$query);

	if(mysqli_affected_rows($sandi) > 0){
		echo "
			<script>

				alert('Ulasan Anda Berhasil di tambahkan');		
					document.location.href='DaftarKomentar.php';
			</script>
		";
	}
	else{
		echo "Gagal";
		echo "<br>";
		echo mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pembelian</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
	<style type="text/css">
	</style>


</head>
<body>

<style type="text/css">
	
.container{
	background-image: url('4.jpg');
}
.container textarea{

}
.container button{

}


</style>
<fieldset>

	<div class="container">

		<form action="" method="POST">
	<h1 style="color: white;">Kolom Komentar</h1>
		<ul>
				
					<input type="text" name="Nama" id="Nama" placeholder="Nama" for="Nama" style="width: 800px; height: 30px; border-radius: 10px;">
			<br><br>
				<textarea name="Komentar" id="Komentar" for="Komentar" placeholder="Masukkan Komentar" style="width: 800px; height: 200px;border-radius: 10px;"></textarea>

					<br>
					<br>


			<button name="submit" class="btn btn-primary">Kirim</button>
				</ul>

		</form>

</div>
</fieldset>
</body>
</html>