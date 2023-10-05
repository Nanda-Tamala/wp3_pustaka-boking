<div class="container">
	<!-- Outer row -->
	<div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="card 0-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested row within card body -->
					<div class="row">
						<div class="col-lg">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Halaman Login </h1>
								</div>
								<?= $this->session->flashdata('pesan'); ?>
								<form class="user" method="POST" action="<?= base_url('autentifikasi'); ?>">
									<div class="form-group">
										<input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" placeholder="Masukkan alamat email" name="email">
										<?= form_error('eamil', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-user" id="password" placeholder="password" name="password">
										<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<button type="submit" class="btn btn-primary btn-user btn-block">
									Login
								</button>
								</form>
								<hr>
								<div class="text-center">
									<a href="<?= base_url('autentifikasi/lupaPassword'); ?>" class="small">Lupa password?</a>
								</div>
								<div class="text-center">
									<a href="<?= base_url('autentifikasi/registrasi'); ?>" class="small">Daftar anggota!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>