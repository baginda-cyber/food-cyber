<h2>Detail Pembelian</h2>

<?php 
$ambil= $koneksi->query("SELECT * FROM pembelian JOIN pelanggan 
	ON pelanggan.id=pembelian.id_pelanggan 
	WHERE pembelian.id_pelanggan='$_GET[id]'");
$detail = $ambil->fetch_assoc();
 ?>
<pre><?php print_r($detail); ?></pre>
<strong><?php echo $detail['nama_lengkap']; ?></strong><br>
<p>
	<?php echo $detail['nomor telepon']; ?><br>
	<?php echo $detail['email']; ?>
</p>
<p>
	Tanggal: <?php echo $detail ['tanggal_pembelian']; ?><br>
	Total: <?php echo $detail['total']; ?>
</p>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>SubTotal</th>
		</tr>
	</thead>
	<tbody>
	<?php $nomor=1; ?>
	<?php $ambil= $koneksi->query("SELECT * FROM pembelian_produk JOIN produk 
		ON produk.ID=pembelian_produk.id_produk
	WHERE pembelian_produk.id_pembelian ='$_GET[id]'"); ?>
	<?php while ($pecah = $ambil->fetch_assoc()) { ?>
	<tr>
		<td><?php echo $nomor; ?></td>
		<td><?php echo $pecah ['Name']; ?></td>
		<td><?php echo $pecah ['harga']; ?></td>
		<td><?php echo $pecah ['jumlah']; ?></td>
		<td>
			<?php echo $pecah['harga']*$pecah['jumlah']; ?>
		</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>	
	</tbody>
</table>