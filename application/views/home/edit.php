<div class="container" style="margin-top: 100px;">
	<div class="card mb-3">
		<div class="card-header">
			Edit Data
		</div>
		<div class="card-body">
			<div class="container">
				<form action="" method="POST">
					<div class="form-group">
						<label for="nama">Nama Barang</label>
						<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang" value="<?php echo $barang['nama']; ?>">

						<?php if ( validation_errors() ) : ?>
							<small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
						<?php endif; ?>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="nama">Jenis Barang</label>
								<select class="form-control" name="jenis" id="">
									<?php foreach ( $jenis as $jns ) : ?>
										<?php if ($jns == $barang['jenis'] ) : ?>
											<option selected="" value="<?php echo $jns; ?>"><?php echo $jns; ?></option>
										<?php else : ?>
											<option value="<?php echo $jns; ?>"><?php echo $jns; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
								<?php if ( validation_errors() ) : ?>
									<small class="form-text text-danger"><?php echo form_error('jenis'); ?></small>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="form-group">
								<label for="stok">Stok</label>
								<input type="number" min="0" class="form-control" id="stok" name="stok" placeholder="Stok Barang" value="<?php echo $barang['stok']; ?>">
								<?php if ( validation_errors() ) : ?>
									<small class="form-text text-danger"><?php echo form_error('stok'); ?></small>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="">Harga</label>
								<div class="input-group mb-3">
								  	<div class="input-group-prepend">	
								    	<span class="input-group-text">Rp.</span>
								  	</div>
								  	<input type="text" class="form-control" name="harga" placeholder=". . ." value="<?php echo $barang['harga']; ?>">
								</div>
								<?php if ( validation_errors() ) : ?>
									<small class="form-text text-danger"><?php echo form_error('harga'); ?></small>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="desc">Deskripsi Barang</label>
						<textarea name="descrip" id="desc" rows="5" placeholder="Deskripsi Barang" class="form-control"><?php echo $barang['description']; ?></textarea>
						<?php if ( validation_errors() ) : ?>
							<small class="form-text text-danger"><?php echo form_error('descrip'); ?></small>
						<?php endif; ?>
					</div>

					<button class="btn btn-primary">Kirim</button>
				</form>
			</div>
		</div>
	</div>
</div>