<div class="container" style="margin-top: 100px;">
	<div class="card">
		<div class="card-header">
			Detail Barang
		</div>
		<div class="card-body">
			<h4><?php echo $barang['nama']; ?><small class="text-muted" style="font-size: 15px;"> / <?php echo $barang['jenis'] ?></small></h4>

			<h5 class="text-muted">Rp. <?php echo $barang['harga']; ?>,-</h5>

			<small class="text-muted">Stok: <?php echo $barang['stok']; ?></small>
			<br><br>
			<small class="text-muted">Deskripsi Barang:</small>
			<br>
			<span class="text-muted"><?php echo $barang['description']; ?></span>
			<br><br>
			<a href="<?php echo base_url(); ?>home" class="btn btn-primary mt-3">Kembali</a>
		</div>
	</div>
</div>