<!DOCTYPE html>
<html>
<head>
	<title>Poliklinik Sukabirus</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("Bootstrap/css/bootstrap.min.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/landpage.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/homepage.css"); ?>">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url("Bootstrap/js/bootstrap.js"); ?>"></script>
</head>
<body style="background-image: url(<?php echo base_url("assets/Pendaftaran/background.jpg"); ?>); background-size: 100% 100%; background-repeat: no-repeat;">
	<div class="container-fluid header">
		<nav class="navbar justify-content-between">
			<div>
				<a id="title" href="<?php echo site_url('Landing'); ?>">Poliklinik</a>
			</div>
			<div class="py-3" style="background-color: #566792; border-radius: 5px; display: inline-block;">
				<a class="menu mx-5" href="<?php echo site_url('Landing'); ?>" style="font-weight: bold;">Beranda</a>
				<a class="menu mr-5" href="<?php echo site_url('Pendaftaran'); ?>">Pendaftaran</a>
				<a class="dropdown-toggle menu mr-5" data-toggle="dropdown" href="#" role="button">Profil</a>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="<?php echo site_url('Userpage/profile'); ?>">Edit Profile</a>
					<a class="dropdown-item" href="<?php echo site_url('Login/logout'); ?>">Logout</a>
				</div>
			</div>
		</nav>
	</div>