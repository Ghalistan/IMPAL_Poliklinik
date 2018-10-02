<!DOCTYPE html>
<html>
<head>
	<title>Poliklinik Sukabirus</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("Bootstrap/css/bootstrap.min.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/landingpage.css") ?>">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url("Bootstrap/js/bootstrap.js"); ?>"></script>
</head>
<body>
	<div class="container-fluid header">
		<nav class="navbar justify-content-between">
			<div>
				<a id="title" href="#">Poliklinik</a>
			</div>
			<div style="padding-top: 10px;">
				<form>
					<div class="container form-group">
						<div class="row">
							<div class="col-sm">
								<div class="login-form">
									<input class="form-control form-control-sm" type="text" name="" placeholder="Username">
								</div>
								<div style="padding-top: 5px;"></div>
								<div class="login-form">
									<input class="form-control form-control-sm" type="password" name="" placeholder="Password">
								</div>
							</div>
							<div class="col-sm-auto" style="padding-left: 0px;">
								<div>
									<!-- <button type="button" class="btn btn-primary" id="login">Login</button> -->
									<input class="btn btn-primary" id="login" type="submit" name="submit">
								</div>
							</div>
						</div>
						<p style="color: white;">Lupa Password? <a href="#">Klik Disini</a></p>
					</div>
				</form>
			</div>
		</nav>
	</div>