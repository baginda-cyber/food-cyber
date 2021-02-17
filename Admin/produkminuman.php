<h2>Selamat datang di produk</h2>

<a href="index.php?halaman=tambahminuman" class="btn btn-primary">Tambah Data</a>
<br>
<br>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>harga</th>
			<th>berat</th>
			<th>foto</th>
			<th>Deskripsi</th>
			<th>aksi</th>
			
		</tr>
	</thead>
	<tbody>
	<?php $nomor=1?>
	<?php $ambil=$koneksi->query("SELECT * FROM produkminuman"); ?>
	<?php while ($pecah = $ambil->fetch_assoc()) { 
		?>
	 
		<tr>
			<td><?php echo $nomor;?></td>
			<td><?php echo $pecah['Name']; ?></td>
			<td><?php echo $pecah['harga']; ?></td>
			<td><?php echo $pecah['berat']; ?></td>
			<td>
				<img src="../foto_produk/<?php echo $pecah['foto']; ?>"  style="border-radius: 10px; width:100px; height:100px; margin-left: 30px;"  >
			</td>
			<td style="width: 320px;"><?php echo $pecah['Deskripsi']; ?></td>
			<td>
				<a href="index.php?halaman=hapusminuman&id=<?php echo $pecah['ID'];
				 ?>" class="btn-danger btn">hapus</a>
				<a href="index.php?halaman=ubahminuman&id=<?php echo $pecah['ID'];
				 ?>" class="btn btn-warning">ubah</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>

	</tbody>
</table>