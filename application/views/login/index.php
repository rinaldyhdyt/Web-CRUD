<div class="container" style="margin-top: 100px;">
	<?php if ( $this->session->flashdata('alert') ) : ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  	Username atau Password <?php echo $this->session->flashdata('alert'); ?>
		  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		  	</button>
		</div>
	<?php endif; ?>
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			<form action="<?php echo base_url(); ?>login/aksiLogin" method="POST">
				<div class="card">
					<div class="card-header">
						Login
					</div>
					<div class="card-body">
						<div class="form-group">
							<label for="">Username</label>
							<input type="text" class="form-control" name="user" placeholder="Username">
						</div>

						<div class="form-group">
							<label for="">Password</label>
							<input type="password" class="form-control" name="pass" placeholder="Password">
						</div>

						<button type="submit" name="submit" class="btn btn-primary mt-4">Login</button>
						<button type="submit" class="btn btn-success mt-4">Daftar</button>
					</div>
				</div>
			</form>	
		</div>
		<div class="col-lg-2"></div>
	</div>
	
</div>