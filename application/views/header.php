<!DOCTYPE html>
<html>
<head>
	<title>Poliklinik Sukabirus</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("Bootstrap/css/bootstrap.min.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/landpage.css"); ?>">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url("Bootstrap/js/bootstrap.js"); ?>"></script>
</head>
<body>
	<div class="container-fluid header">
		<?php if(isset($_SESSION['fail'])) {
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Password / Username Salah! </strong>Silahkan masukkan kembali.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		</div>';
		} ?>
		<nav class="navbar justify-content-between">
			<div>
				<a id="title" href="<?php echo site_url('Landing'); ?>">Poliklinik</a>
			</div>
			<div style="padding-top: 10px;">
				<form action="<?php echo site_url('Login/masuk'); ?>" method="POST">
					<div class="container form-group">
						<div class="row">
							<div class="col-sm">
								<div class="login-form">
									<input class="form-control form-control-sm" type="text" name="username" placeholder="Username">
								</div>
								<div style="padding-top: 5px;"></div>
								<div class="login-form">
									<input class="form-control form-control-sm" type="password" name="password" placeholder="Password">
								</div>
							</div>
							<div class="col-sm-auto" style="padding-left: 0px;">
								<div>
									<input class="btn btn-primary" id="login" type="submit" name="submit" value="Login">
								</div>
							</div>
						</div>
						<p style="color: white;">Lupa Password? <a href="#">Klik Disini</a></p>
					</div>
				</form>
			</div>
		</nav>
	</div>