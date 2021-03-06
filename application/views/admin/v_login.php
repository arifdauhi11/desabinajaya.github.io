<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Desa Binajaya - Login</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets2'); ?>\vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets2'); ?>\css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">


	<div class="container">
		<div class="card card-login mx-auto mt-5">
			<div class="card-header" align="center">Masuk</div>
			<div class="card-body">
				<?php
				// Cek apakah terdapat session nama message
				if ($this->session->flashdata('message')) { // Jika ada
					echo '<div class="alert alert-danger">' . $this->session->flashdata('message') . '</div>'; // Tampilkan pesannya
				}
				?>
				<form method="post" action="<?php echo base_url('index.php/login/login'); ?>">
					<div class="form-group">
						<div class="form-label-group">
							<input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
							<label for="inputUsername">Username</label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-label-group">
							<input type="password" class="form-control" name="password" placeholder="Password" required autofocus>
							<label for="inputPassword">Password</label>
						</div>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
				</form>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets2'); ?>\vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets2'); ?>\vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets2'); ?>\vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>