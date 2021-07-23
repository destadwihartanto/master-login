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
							<div class="card">
								<div class="card-header">
									<h5>Ubah Password</h5>
								</div>
								<div class="card-block">
									<?= $this->session->flashdata('message'); ?>
									<form class="form-material" method="POST" action="">
										<div class="form-group form-success">
											<input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>" class="form-control" autocomplete="off">
											<span class="form-bar"></span>
											<label class="float-label"></label>
										</div>

										<div class="form-group form-success">
											<input type="password" name="current_password" class="form-control" id="current_password" autocomplete="off">
											<span class="form-bar"></span>
											<label class="float-label">Current Password</label>
											<?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>

										</div>
										<div class="form-group form-success">
											<input type="password" name="new_password1" id="new_password1" class="form-control" autocomplete="off">
											<span class="form-bar"></span>
											<label class="float-label">New Password</label>
											<?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group form-success">
											<input type="password" name="new_password2" id="new_password2" class="form-control" autocomplete="off">
											<span class="form-bar"></span>
											<label class="float-label">Repeat Password</label>
											<?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>

										</div>
										<button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
										<button class="btn btn-inverse waves-effect waves-light">Back</button>
									</form>
								</div>
							</div>
						</div>
					</div>
