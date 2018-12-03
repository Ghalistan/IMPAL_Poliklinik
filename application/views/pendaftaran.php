<div class="container-fluid my-5">
 	<img src="">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="pendaftaran-tab" data-toggle="tab" href="#pendaftaran" role="tab">Pendaftaran Poli</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="datapoli-tab" data-toggle="tab" href="#dataPoli" role="tab">Data Poliklinik</a>
		</li>
	</ul>
	<?php if (isset($_SESSION['berhasil'])) {
		echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
			<strong>Pendaftaran Berhasil!</strong> Silahkan menunggu konfirmasi dari pihak poliklinik.
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
			</button>
			</div>";
	} ?>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="pendaftaran" role="tabpanel" style="height: 80vh;">
			<div class="container">
				<h1 class="my-5">Pendaftaran Poliklinik</h1>
				<form action="<?php echo site_url('Pendaftaran/daftarPoli'); ?>" method="POST">
					<div class="form-group row">
						<label for="pendaftaran" class="col-sm-2 col-form-label">Pendaftaran Poliklinik</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="pendaftaran" name="pendaftaran" placeholder="Masukkan Poliklinik Tujuan" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="Dokter" class="col-sm-2 col-form-label">Dokter Tujuan</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="Dokter" name="dokter" placeholder="Masukkan Dokter Tujuan" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="pesan" name="pesan" placeholder="Masukkan Pesan" required>
						</div>
					</div>
					<div class="form-group">
						<label for="detailKeluhan">Detail Keluhan</label>
						<textarea class="form-control" id="detailKeluhan" name="detailKeluhan" rows="4" placeholder="Masukkan Keluhan"></textarea>
					</div>
					<div class="d-flex flex-row-reverse">
						<input class="btn btn-primary" type="submit" name="submit" value="Submit">
					</div>
				</form>
			</div>
		</div>
		<div class="tab-pane fade" id="dataPoli" role="tabpanel" style="height: 80vh;">
			<div class="container-fluid px-5">
				<h1 class="my-5">Data Poliklinik</h1>
				<table class="table table-dark">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nama</th>
							<th scope="col">Poliklinik</th>
							<th scope="col">Jam Buka</th>
							<th scope="col">Jam Tutup</th>
							<th scope="col">Kontak</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$count = 1;
					foreach($data as $row) {
					?>
						<tr>
							<th scope="row"><?php echo $count; ?></th>
							<td><?php echo $row['Nama']; ?></td>
							<td><?php echo $row['Poliklinik']; ?></td>
							<td><?php echo $row['Jam_Buka']; ?></td>
							<td><?php echo $row['Jam_Tutup']; ?></td>
							<td><?php echo $row['Kontak']; ?></td>
						</tr>
					<?php $count = $count + 1; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>