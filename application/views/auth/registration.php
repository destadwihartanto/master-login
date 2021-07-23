<div class="body-wrapper">
	<div class="main-wrapper">
		<div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">
			<main class="auth-page">
				<div class="mdc-layout-grid">
					<div class="mdc-layout-grid__inner">
						<div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
						<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
							<div class="mdc-card">
								<img src="<?= base_url('assets/images/logo-yuks.png') ?>">
								<marquee>
									<center><strong>Selamat Datang Di Lembaga Bimbingan Belajar | Ciledug </strong></center>
								</marquee>
								<?= $this->session->flashdata('message'); ?>
								<form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
									<div class="mdc-layout-grid">
										<div class="mdc-layout-grid__inner">
											<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
												<div class="mdc-text-field w-100">
													<input class="mdc-text-field__input" id="name" name="name" value="<?= set_value('name'); ?>" required><?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
													<div class="mdc-line-ripple"></div>
													<label for="text-field-hero-input" class="mdc-floating-label">Full Name</label>
												</div>
											</div>
											<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
												<div class="mdc-text-field w-100">
													<input class="mdc-text-field__input" id="email" name="email" value="<?= set_value('email'); ?>" required><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
													<div class="mdc-line-ripple"></div>
													<label for="text-field-hero-input" class="mdc-floating-label">Email</label>
												</div>
											</div>
											<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
												<div class="mdc-text-field w-100">
													<input class="mdc-text-field__input" id="password1" name="password1" value="<?= form_error('password1'); ?>" required><?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
													<div class="mdc-line-ripple"></div>
													<label for="text-field-hero-input" class="mdc-floating-label">Password</label>
												</div>
											</div>
											<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
												<div class="mdc-text-field w-100">
													<input class="mdc-text-field__input" type="password" id="password2" name="password2" required>
													<div class="mdc-line-ripple"></div>
													<label for="text-field-hero-input" class="mdc-floating-label">Confirm Password</label>
												</div>
											</div>
											<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
												<button type="submit" class="mdc-button mdc-button--raised w-100">Daftar </button>
												</a>
											</div>
										</div>
									</div>
								</form>
								<div class="text-center">
									<a class="small" href="<?= base_url('auth'); ?>">Sudah Punya Akun?</a>
								</div>

							</div>
						</div>
						<div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
					</div>
				</div>
			</main>
		</div>
	</div>
</div>
