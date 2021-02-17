	 	<?php
require 'function.php';

$result=mysqli_query($sandi,"SELECT * FROM Komentar ORDER BY id DESC");

?>
<!DOCTYPE html>
<html>
<head>

	<title>Galeri</title>
<style type="text/css">
	label{
		display: block;
	}
</style>
</head>
<body>
		<a href="galeri.php" style="color: green; text-decoration: none;">Tambahkan Ulasan</a>
		<?php while ( $row = mysqli_fetch_assoc($result) ): ?>
    	<div style="box-shadow: 1px 1px 2px ; margin-top: 20px; ">
	   
    	<p style="font-size: 15px; font-family:Kristen ITC Regular ; width: 1300px;"><?php echo $row["Nama"]; ?></p>
     
   <p style="font-size: 12px; font-family:Kristen ITC Regular">
   	<textarea style="width: 1321px; height: 100px;"><?php echo $row["Komentar"];?></textarea></p>
<a href="menu2.php" style="text-decoration: none; color: green;"> Balas</a>
</div>
</div>
<?php endwhile; ?>
</body>
</html>