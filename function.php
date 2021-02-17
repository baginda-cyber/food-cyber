<?php

 $servername = "localhost";
 $username = "root";
 $password ="";


 //Koneksi ke Database
$sandi = mysqli_connect("localhost","root","","nama_makanan");
$Koneksi = mysqli_connect("localhost","root","","toko");
function query($query){
	global $Koneksi;	
	$result = mysqli_query($Koneksi , $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}	
	return $rows;
}
function cari($keyword){
	$query = "SELECT *FROM produk
	WHERE
	Name LIKE '%keyword%
	";
	return query($query);
}
function registrasi($data){
global $sandi;

$username = strtolower(stripslashes( $data["Username"]));

$password = mysqli_real_escape_string($sandi,$data["Password"]);

$password2 = mysqli_real_escape_string($sandi,$data["Password2"]);

$email = mysqli_real_escape_string($sandi,$data["Email"]);

$kredit = ($data["Kredit"]);

 if (empty($_POST['Username']) || empty($_POST['Password']) || empty($_POST['Password2'] || empty($_POST['Email']))) {
 	echo "<script>
alert('Semua data harus diisi');
 	</script>";
 		return false;
	 			# code...
	 		} 		
 

//Cek Usename
	//Cek Konfirmasi password
if($password !== $password2){
	echo "<script>
			alert('Konfirmasi password tidak sesuai');

				</script>


	";

			return false;
}

//Enkripsi Password
	$password = password_hash($password, PASSWORD_DEFAULT);
//$password  = md5($password);

//	var_dump($password);die;


	//Tambahkan User Baru


	mysqli_query($sandi,"INSERT INTO users VALUES('','$username','$password','$password2','$email','$kredit')");

return mysqli_affected_rows($sandi);
}

?>		