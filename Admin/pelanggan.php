



<?php
	
	$con = mysqli_connect("localhost","root","","nama_makanan");
	?>
<h2>Data pelanggan</h2>
<table class="table table-bordered">
	<thead>
		<th>NO</th>
		<th>Nama</th>
		<th>Password</th>
		<th>No Telepon</th>
		<th>Email</th>
		<th>aksi</th>
	</thead>
	<tbody>
	<?php $nomor=1 ?>
	<?php $ambil=$con->query("SELECT * FROM users") ?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $nomor; ?></td>
		<td><?php echo $pecah['Username']; ?></td>
		<td><?php echo $pecah['Password2']; ?></td>
		<td><?php echo $pecah['Email']; ?></td>
		<td><?php echo $pecah['No telepon']; ?></td>
		<td>
			<a href="index.php?halaman=hapuspelanggan&id=<?php echo $pecah['ID'];
				 ?>" class="btn btn-danger">hapus</a>
		</td>
		</tr>
		<?php $nomor++ ?>
		<?php } ?>
	</tbody>
</table>


