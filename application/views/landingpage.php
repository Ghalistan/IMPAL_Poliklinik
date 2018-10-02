<div class="container-fluid" style="padding: 0;">
	<img src="<?php echo base_url("assets/landingpage/background.jpg"); ?>" class="img-fluid" style="width: 100%;">
	<div class="carousel-caption">
		<h1 style="color: #2E3A62;">Belum Punya Akun ?<br>Daftar Poliklinik Sekarang!</h1>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#daftar" style="background-color: #2E3A62; border: none; padding: 15px 35px 15px 35px; font-family: Verdana; font-size: 25px;">Daftar</button>
	</div>
</div>
<div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="daftarpengguna" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="daftarjudul">Pendaftaran Poliklinik</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="username">Masukkan Username</label>
						<input type="text" class="form-control" id="username" aria-describedby="isiusername" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="email">Masukkan Email</label>
						<input type="email" class="form-control" id="email" aria-describedby="isiemail" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="tgllahir">Masukkan Tanggal lahir</label>
						<input type="date" class="form-control" id="tgllahir" aria-describedby="isitgllahir" name="tgllahir">
					</div>
					<div class="row">
						<div class="col">
							<label for="password">Masukkan Password</label>
							<input type="password" class="form-control" id="password" aria-describedby="isipassword" name="password" placeholder="Password">
						</div>
						<div class="col" style="padding-left: 0px;">
							<label for="password2">Konfirmasi Password</label>
							<input type="password" class="form-control" id="password2" aria-describedby="konfpassword" name="password2" placeholder="Konfirmasi Password">
						</div>
					</div>
					<div class="form-group form-check" style="padding-top: 10px;">
						<input type="checkbox" class="form-check-input" id="validasi" name="validasidaftar">
						<label class="form-check-label" for="validasi">Data yang saya inputkan benar.</label>
					</div>
					<div class="float-right">
						<input type="submit" class="btn btn-primary" name="submit" placeholder="Daftar" style="background-color: #2E3A62; font-family: Verdana; font-size: 15px; padding: 10px 15px 10px 15px;">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>