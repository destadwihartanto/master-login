<div class="pcoded-content">
	<!-- Page-header start -->
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="page-header-title">
						<h5 class="m-b-10">Dashboard</h5>
						<p class="m-b-0">Welcome to Material Able</p>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index.html"> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Page-header end -->
	<div class="pcoded-inner-content">
		<!-- Main-body start -->
		<div class="main-body">
			<div class="page-wrapper">
				<!-- Page-body start -->
				<div class="page-body">
					<!-- Basic table card start -->
					<div class="row">
						<div class="col-md-6">
							<?= $this->session->flashdata('message'); ?>
							<!-- <?php echo validation_errors('<div class="alert alert-danger shadow" role="alert"><a class="close" data-dismiss="alert" aria-label="close">&times;</a>', '</div>') ?> -->
							<div class="card">
								<div class="card-header">
									<h5>Informasi Pribadi</h5>
								</div>
								<div class="card-block">
									<?= form_open_multipart('profile'); ?>
									<div class="form-material">
										<div class="form-group form-success form-static-label">
											<input type="hidden" name="id_user" class="form-control" value="<?= $user['id_user']; ?>">
										</div>

										<div class="form-group form-success form-static-label">
											<input type="text" name="name" id="name" class="form-control" value="<?= $user['name'] ?>">
											<span class="form-bar"></span>
											<label class="float-label">Name</label>
											<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group form-success form-static-label">
											<input type="text" name="username" id="username" class="form-control" value="<?= $user['username'] ?>">
											<span class="form-bar"></span>
											<label class="float-label">Username</label>
											<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group form-success form-static-label">
											<input type="text" name="email" id="email" class="form-control" value="<?= $user['email'] ?>">
											<span class="form-bar"></span>
											<label class="float-label">Email</label>
											<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group row">
											<div class="col-sm-2"></div>
											<div class="col-sm-12">
												<div class="row">
													<div class="col-sm-3">
														<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
													</div>
													<div class="col sm-8">
														<div class="custom-file">
															<input id="image" name="image" type="file" class="custom-file-input">
															<label for="image" class="custom-file-label">Choose file...</label>
															<div class="label-main">
																<label class="label label-primary"> <?= $user['role'] ?></label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
										<button type="submit" class="btn btn-inverse waves-effect waves-light">Back</button>
										</form>
									</div>
								</div>
							</div>
						</div>
