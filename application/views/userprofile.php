<div class="container-fluid" style="height: 100vh;">
	<h1 style="color: #2E3A62;">Update Profile</h1>
	<?php 
		if(isset($_SESSION['edit_success'])) {
			echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Update Profile Berhasil!</strong> Data yang anda masukkan berhasil diperbarui.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		} else if(isset($_SESSION['failedit'])) {
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Password yang dimasukkan salah!</strong> Pengecekan ulang password gagal, silahkan coba lagi.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		}
	?>
	<div class="container align-items-center col-sm-10">
		<form action="<?php echo site_url('Login/edit_data'); ?>" method="POST">
			<div class="form-group row">
				<label for="username" class="col-sm-2 col-form-label" style="color: #2E3A62; font-size: 20px; font-weight: bold;">Username</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" readonly name="username" id="username" value="<?php echo $data['username']; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="nama" class="col-sm-2 col-form-label" style="color: #2E3A62; font-size: 20px; font-weight: bold;">Nama Depan</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="nama" id="nama" value="<?php echo $data['nama_depan']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="namab" class="col-sm-2 col-form-label" style="color: #2E3A62; font-size: 20px; font-weight: bold;">Nama Belakang</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="namab" id="namab" value="<?php echo $data['nama_belakang']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label" style="color: #2E3A62; font-size: 20px; font-weight: bold;">Email</label>
				<div class="col-sm-10">
					<input class="form-control" readonly type="email" name="email" id="email" value="<?php echo $data['email']; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="password" class="col-sm-2 col-form-label" style="color: #2E3A62; font-size: 20px; font-weight: bold;">Password</label>
				<div class="col-sm-10">
					<input class="form-control" type="password" name="password" id="password" placeholder="Masukkan Password Baru">
				</div>
			</div>
			<div class="form-group row">
				<label for="password2" class="col-sm-2 col-form-label" style="color: #2E3A62; font-size: 20px; font-weight: bold;">Ketik Ulang Password</label>
				<div class="col-sm-10">
					<input class="form-control" type="password" name="password2" id="password2" placeholder="Masukkan Password Baru">
				</div>
			</div>
			<div class="text-right">
				<input type="submit" class="btn btn-primary" value="Update Profile" style="background-color: #2E3A62;">
			</div>
		</form>
	</div>
</div>