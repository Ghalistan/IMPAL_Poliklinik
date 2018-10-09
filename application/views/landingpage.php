<div class="container-fluid" style="padding: 0;">
	<img src="<?php echo base_url("assets/landingpage/background.jpg"); ?>" class="img-fluid" style="width: 100%;">
	<div class="carousel-caption">
		<h1 id="bigtext">Belum Punya Akun ?<br>Daftar Poliklinik Sekarang!</h1>
		<button type="button" class="btn btn-primary" id="bigdaftar" data-toggle="modal" data-target="#daftar">Daftar</button>
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
				<?php echo validation_errors(); ?>
				<?php echo form_open('daftar', 'class="pendaftaran"'); ?>
					<div class="form-group">
						<label for="username">Masukkan Username</label>
						<input type="text" class="form-control" id="username" aria-describedby="isiusername" name="Username" placeholder="Username" value="<?php echo set_value('username'); ?>" required oninvalid="this.setCustomValidity('Tolong Inputkan Username')" oninput="this.setCustomValidity('')">
					</div>
					<a>Masukkan Nama</a>
					<div class="row">
						<div class="col" style="padding-top: 10px;">
							<input type="text" class="form-control" name="namadepan" id="namadepan" placeholder="Nama Depan" value="<?php echo set_value('namadepan'); ?>" required oninvalid="this.setCustomValidity('Tolong Inputkan Data')" oninput="this.setCustomValidity('')">
						</div>
						<div class="col" style="padding-left: 0px; padding-bottom: 15px; padding-top: 10px;">
							<input type="text" class="form-control" name="namabelakang" id="namabelakang" placeholder="Nama Belakang" value="<?php echo set_value('namabelakang'); ?>" required oninvalid="this.setCustomValidity('Tolong Inputkan Data')" oninput="this.setCustomValidity('')">
						</div>
					</div>
					<div class="form-group">
						<label for="email">Masukkan Email</label>
						<input type="email" class="form-control" id="email" aria-describedby="isiemail" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>" required oninvalid="this.setCustomValidity('Tolong Inputkan Data')" oninput="this.setCustomValidity('')">
					</div>
					<div class="form-group">
						<label for="tgllahir">Masukkan Tanggal lahir</label>
						<input type="date" class="form-control" id="tgllahir" aria-describedby="isitgllahir" name="tgllahir" value="<?php echo set_value('tgllahir'); ?>" required oninvalid="this.setCustomValidity('Tolong Inputkan Data')" oninput="this.setCustomValidity('')">
					</div>
					<div class="row">
						<div class="col">
							<label for="password">Masukkan Password</label>
							<input type="password" class="form-control" id="password" aria-describedby="isipassword" name="password" placeholder="Password" required oninvalid="this.setCustomValidity('Tolong Inputkan Data')" oninput="this.setCustomValidity('')">
						</div>
						<div class="col" style="padding-left: 0px;">
							<label for="password2">Konfirmasi Password</label>
							<input type="password" class="form-control" id="password2" aria-describedby="konfpassword" name="password2" placeholder="Konfirmasi Password" required oninvalid="this.setCustomValidity('Tolong Inputkan Data')" oninput="this.setCustomValidity('')">
						</div>
					</div>
					<div class="form-group form-check" style="padding-top: 10px;">
						<input type="checkbox" class="form-check-input" id="validasi" name="validasi" required oninvalid="this.setCustomValidity('Checklist untuk melanjutkan')" oninput="this.setCustomValidity('')">
						<label class="form-check-label" for="validasi">Data yang saya inputkan benar.</label>
					</div>
					<div class="float-right">
						<input type="submit" class="btn btn-primary" id="smalldaftar" name="smalldaftar" value="Daftar">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>