<div class="container" style="margin-top: 100px !important;">
	<?php if ( $this->session->flashdata('alert') ) : ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		  	Data <strong>Berhasil</strong> <?php echo $this->session->flashdata('alert'); ?>
		  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		  	</button>
		</div>
	<?php endif; ?>

	<div class="row">
		<div class="col-lg-6">
			<h3>CRUD Barang</h3>
		</div>
		<div class="col-lg-6">
			<form action="" method="POST">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari . . ." name="cariData">
					<div class="input-group-append">
						<button class="btn btn-primary">Cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="card mt-3 mb-3">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-6">
					Data Barang
					<a href="<?php echo base_url(); ?>dom_pdf" class="badge badge-primary">Cetak</a>
				</div>
				<div class="col-lg-6">
					<a href="<?php echo base_url(); ?>home/formTambah" class="btn btn-primary float-right">Tambah Data</a>
				</div>
			</div>
		</div>
		<ul class="list-group">
			<?php if ( empty($barang) ) : ?>
				<li class="list-group-item text-center">
					Tidak Ada Data !
				</li>
			<?php endif; ?>

			<?php $no = 1; ?>
			<?php foreach ( $barang as $brg ) : ?>
				<li class="list-group-item">
					<small class="text-muted">#<?php echo $no; ?></small>
					<span class="ml-4"><?php echo $brg['nama'] ?></span>

					<a href="<?php echo base_url(); ?>home/hapusData/<?php echo $brg['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data Ingin Di Hapus ?')">Hapus</a>
					<a href="<?php echo base_url(); ?>home/editData/<?php echo $brg['id']; ?>" class="badge badge-success float-right mr-2">Edit</a>
					<a href="<?php echo base_url(); ?>home/detail/<?php echo $brg['id']; ?>" class="badge badge-primary float-right mr-2">Details</a>
				</li>
			<?php $no++; ?>
			<?php endforeach; ?>
		</ul>
	</div>
</div>