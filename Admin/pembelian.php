
<?php
	
	$con = mysqli_connect("localhost","root","","nama_makanan");
	?>

<h2>Daftar Komentar dari Pelanggan </h2>
<br>

<table class="table table-bordered">
	<thead >
		<tr>
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Komentar</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php $nomor=1 ?>
	<?php $ambil=$con->query("SELECT * FROM komentar") ?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
	 
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah ['Nama']; ?></td>
			<td><?php echo $pecah ['Komentar']; ?></td>
			<td>
				<a href="index.php?halaman=hapuskomentar&id=<?php echo $pecah['ID'];
				 ?>" class="btn btn-danger">hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>