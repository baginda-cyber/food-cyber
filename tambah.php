<?php
$conn = mysqli_connect("localhost","root","","nama_makanan");
	
if(isset($_POST["submit"]) ){
		//Ambil data dari tiap elemen dalam form

	$Nama = htmlspecialchars( $_POST["Nama"]);
	$Jumlah =htmlspecialchars( $_POST["Jumlah"]);
	$Harga =htmlspecialchars( $_POST["Harga"]);
	$Gambar =htmlspecialchars( $_POST["Gambar"]);

	//query Insert data
	$query = "INSERT INTO daftar_makanan
				VALUES
				('','$Nama','$Jumlah','$Harga','
				$Gambar')
				";
	mysqli_query($conn,$query);

	//Cek Apakah data berhasil di tambahkan atu tidak
	//	var_dump((mysqli_affected_rows($conn))); 
	if(mysqli_affected_rows($conn) > 0){
		echo "
			<script>

				alert('Data berhasil ditambahkan');		
					document.location.href='Menu2.php';
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
	<title style="font-family: ">Penambahan Data Makanan</title>
</head>
<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Roboto);
/*--------------------------------Button starts--------------------------------*/
.button-container {
  text-align: center;
}
.button {
  position: relative;
  font-size: 1.1rem;
  color: red;
  color-font:blue;
  margin: 3rem 0;
  padding: 0.75rem 3rem;
  cursor: pointer;
  -webkit-transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
  transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
  overflow: hidden;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}
.button span {
  color: #fff;
  position: relative;
  z-index: 1;
}
.button::before {
  content: '';
  position: absolute;
  background: #071017;
  border: 50vh solid #1d4567;
  width: 30vh;
  height: 30vh;
  border-radius: 50%;
  display: block;
  top: 50%;
  left: 50%;
  z-index: 0;
  opacity: 1;
  -webkit-transform: translate(-50%, -50%) scale(0);
          transform: translate(-50%, -50%) scale(0);
}
.button:hover {
  color: blue;
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.2);
}
.button:active::before, .button:focus::before {
  -webkit-transition: opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
  transition: opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
  transition: transform 1.12s ease, opacity 0.28s ease 0.364s;
  transition: transform 1.12s ease, opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
  -webkit-transform: translate(-50%, -50%) scale(1);
          transform: translate(-50%, -50%) scale(1);
  opacity: 0;
}
.button:focus {
  outline: none;
}
</style>
<body background="cc.jfif;" style="width: 100px;">
	<div class="row">
	<fieldset style="float: left; border-radius: 5px; " class="col-md-5" >
<legend><h1 style="font-family: Stencil Regular">Update Makanan D'barian Cafe</h1></legend>
	<form action="" method="POST">
		<ul>
			<li style="margin-bottom: 30px;">
				<label for="Nama Makanan" ></label>
				<input type="text" name="Nama" id="Nama" placeholder="Nama makanan " style="width: 1000px; height: 30px;border-radius: 4px; ">
			</li>
				<li style="margin-bottom: 30px;">
				<label for="Jumlah"></label>
				
				<input type="text" name="Jumlah" id="Jumlah" placeholder="Jumlah" style="width: 1000px; height: 30px;border-radius: 4px;">
				
				</li>
				<li style="margin-bottom: 30px;">
					<label for="Harga"></label>
				<input type="text" name="Harga" placeholder="Harga" id="Harga" style="width: 1000px; height: 30px; border-radius: 4px;">

			</li>
			<li style="margin-bottom: 30px;;">
				<label for="Gambar"></label>
				<input type="text" name="Gambar" placeholder="Gambar" id="Gambar" style="width: 1000px; height: 30px; border-radius: 4px;">
			</li>
			
				<button type="submit" name="submit" class="button" style="font-family:Lucida Calligraphy italic;">Tambah Data</button>
				</ul>
		
</fieldset>
	</form>

</div>
</body>
</html>	