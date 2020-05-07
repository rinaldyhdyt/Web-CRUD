<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">

    <title><?php echo $judul; ?></title>
  </head>
  <body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
		<a class="navbar-brand" href="<?php echo base_url(); ?>home">CRUD</a>

		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url(); ?>home">Home</a>
			</li>
		</ul>

		<a href="<?php echo base_url(); ?>login/logout" class="btn btn-danger">Logout</a>

	</nav>