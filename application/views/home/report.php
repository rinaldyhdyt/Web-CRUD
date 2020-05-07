<div class="container">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Barang</th>
					<th>Jenis Barang</th>
					<th>Stok</th>
					<th>Deskripsi</th>
					<th>Harga</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; ?>
				<?php foreach($barang as $brg) : ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $brg['nama']; ?></td>
						<td><?php echo $brg['jenis']; ?></td>
						<td><?php echo $brg['stok']; ?></td>
						<td><?php echo $brg['description']; ?></td>
						<td><?php echo $brg['harga']; ?></td>
					</tr>
				<?php $no++; ?>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>