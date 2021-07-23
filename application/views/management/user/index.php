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
					<!-- Hover table card start -->
					<div class="card table-card">
						<div class="card-header">
							<h5>User Management</h5>
							<div class=""><a class="btn btn-info waves-effect waves-light" href="" data-toggle="modal" data-target="#addData">Tambah</a></div>

							<div class="card-header-right">
								<ul class="list-unstyled card-option">
									<li><i class="fa fa fa-wrench open-card-option"></i></li>
									<li><i class="fa fa-window-maximize full-card"></i></li>
									<li><i class="fa fa-minus minimize-card"></i></li>
									<li><i class="fa fa-refresh reload-card"></i></li>
									<li><i class="fa fa-trash close-card"></i></li>
								</ul>
							</div>
						</div>
						<div class="card-block">
							<div class="table-responsive">
								<table id="dataTables" class="table table-hover">
									<thead>
										<tr style="background-color: #FFFFCC;">
											<th>#</th>
											<th>Name</th>
											<th>Username</th>
											<th>Date Created</th>
											<th>Status</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 0;
										foreach ($users as $tampil) : $no++ ?>
											<tr>
												<td><?= $no; ?> </td>
												<td>
													<div class="d-inline-block align-middle">
														<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="user image" class="img-radius img-40 align-top m-r-15">
														<div class="d-inline-block">
															<h6><?= $tampil['name'] ?></h6>
															<p class="text-muted m-b-0"> <?= $tampil['role'] ?>
															</p>
														</div>
													</div>
												</td>
												<td> <?= $tampil['username'] ?>
												</td>
												<td><?= $tampil['date_created'] ?></td>
												<td> <?php
														switch ($tampil['is_active']) {
															case 1:
																echo '<span class="label label-success shadow">Active</span>';
																break;
															default:
																echo '<span class="label label-danger shadow">Non - Active</span>';
																break;
														}
														?>
												</td>
												<td>
													<div class="dropdown-info dropdown open">
														<button class="btn btn-instagram dropdown-toggle waves-effect waves-light " type="button" id="dropdown-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Info</button>
														<div class="dropdown-menu" aria-labelledby="dropdown-4" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
															<a class="dropdown-item waves-light waves-effect" href="#">Hapus</a>
															<a class="dropdown-item waves-light waves-effect" href="#modalEdit<?= $tampil['id_user'] ?>" data-toggle="modal" title="Edit">Edit</a>
														</div>

												</td>
											</tr>
							</div>
						</div>
					<?php endforeach; ?>
					</div>
				</div>

				<!-- ==================================  MODAL TAMBAH  ========================================= -->
				<div id="addData" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content animated bounceInRight">
							<div class="modal-header">
								<h5 class="modal-title">Tambah Data User Management</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>

							<form class="form-horizontal" method="POST" action="<?php echo base_url('user') ?>">
								<div class="modal-body">

									<div class="form-group row"><label class="col-sm-2 col-form-label">Name </label>
										<div class="col-sm-9"><input type="text" name="name" class="form-control" placeholder="Enter name..." autocomplete="off" autofocus></div>
									</div>
									<div class="form-group row"><label class="col-sm-2 col-form-label">Username </label>
										<div class="col-sm-9"><input type="text" name="username" class="form-control" placeholder="Enter username..." autocomplete="off" autofocus></div>
									</div>
									<div class="form-group row"><label class="col-sm-2 col-form-label">Email </label>
										<div class="col-sm-9"><input type="email" name="email" class="form-control" placeholder="Enter email..." autocomplete="off" autofocus></div>
									</div>
									<div class="form-group row"><label class="col-sm-2 col-form-label">Image </label>
										<div class="col-sm-9"><input type="text" name="image" class="form-control" value="default.jpg" autocomplete="off" autofocus disabled></div>
									</div>
									<div class="form-group row"><label class="col-sm-2 col-form-label">Password </label>
										<div class="col-sm-9"><input type="password" name="password" class="form-control" placeholder="Enter password..." autocomplete="off" autofocus></div>
									</div>
									<div class="form-group row"><label class="col-sm-2 col-form-label">Role Access</label>
										<div class="col-md-9">
											<select class="form-control chosen-select" name="role_id">
												<option value="">Select role access....</option>
												<?php foreach ($role as $tampil) { ?>
													<option value="<?php echo $tampil['id']; ?>"><?php echo $tampil['role']; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group row"><label class="col-sm-2 col-form-label">Is Active ? </label>
										<div class="col-md-4">
											<select class="form-control" name="is_active">
												<option value="1">Active</option>
												<option value="0">Non - active</option>
											</select>
										</div>
									</div>
									<div class="form-group row"><label class="col-sm-2 col-form-label">Date Create </label>
										<div class="col-sm-4"><input type="text" name="date_created" value="<?php echo date('d-m-Y H:i:s ') ?>" class="form-control" autocomplete="off" autofocus readonly></div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary btn-outline">Tambah Data</button>
									<button class="btn btn-secondary btn-outline" data-dismiss="modal" aria-hidden="true">Tutup</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- ==================================  MODAL EDIT  ========================================= -->
				<?php foreach ($users as $tampil) : ?>
					<div id="modalEdit<?php echo $tampil['id_user'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content animated bounceInRight">
								<div class="modal-header">
									<h5 class="modal-title">Edit User Management</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>

								<form class="form-horizontal" method="post" action="<?php echo base_url('user/Edit') ?>">
									<div class="modal-body">
										<input name="id_user" type="hidden" value="<?php echo $tampil['id_user']; ?>">


										<div class="form-group row"><label class="col-sm-2 col-form-label">Name </label>
											<div class="col-sm-9"><input type="text" name="name" class="form-control" value="<?= $tampil['name']; ?>" placeholder="Enter name..." autocomplete="off" autofocus></div>
										</div>
										<div class="form-group row"><label class="col-sm-2 col-form-label">Username </label>
											<div class="col-sm-9"><input type="text" name="username" class="form-control" value="<?= $tampil['username']; ?>" placeholder="Enter username..." autocomplete="off" autofocus></div>
										</div>
										<div class="form-group row"><label class="col-sm-2 col-form-label">Email </label>
											<div class="col-sm-9"><input type="email" name="email" class="form-control" value="<?= $tampil['email']; ?>" placeholder="Enter email..." autocomplete="off" autofocus></div>
										</div>
										<div class="form-group row"><label class="col-sm-2 col-form-label"> Role Access</label>
											<div class="col-md-9">
												<select class="form-control  chosen-select" name="role_id">
													<option value="">Select role access....</option>
													<?php foreach ($role as $r) { ?>
														<option value="<?php echo $r['id']; ?>" <?= $r['id'] == $tampil['id'] ? "selected" : null ?>><?php echo $r['role']; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="form-group row"><label class="col-sm-2 col-form-label">Is Active ? </label>
											<div class="col-md-4">
												<select class="form-control chosen-select" name="is_active">
													<option <?php if ($tampil['is_active'] == '0') {
																echo "selected";
															} ?> value="0">Non - active</option>
													<option <?php if ($tampil['is_active'] == '1') {
																echo "selected";
															} ?> value="1">Active</option>
												</select>
											</div>
										</div>
										<div class="form-group row"><label class="col-sm-2 col-form-label">Date Create </label>
											<div class="col-sm-4"><input type="text" name="date_created" value="<?= $tampil['date_created']; ?>" class="form-control" autocomplete="off" autofocus disabled></div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary btn-outline">Edit Data</button>
										<button class="btn btn-secondary btn-outline" data-dismiss="modal" aria-hidden="true">Tutup</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
