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
					<div class="card">
						<div class="card-header">
							<h5>Role Management</h5>
							<div class=""><a class="btn btn-info waves-effect waves-light" href="" data-toggle="modal" data-target="#addData">Tambah</a></div>

							<!-- <span>use class <code>table-hover</code> inside table element</span> -->
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
						<div class="card-block table-border-style">
							<div class="table-responsive">
								<table id="dataTables" class="table table-hover">
									<thead>
										<tr style="background-color: #FFFFCC;">
											<th>#</th>
											<th>Role</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 0;
										foreach ($role as $tampil) : $no++ ?>

											<tr>
												<th scope="row"><?= $no; ?></th>
												<td><?= $tampil['role']; ?></td>
												<td>
													<div class="dropdown-info dropdown open">
														<button class="btn btn-instagram dropdown-toggle waves-effect waves-light " type="button" id="dropdown-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Info</button>
														<div class="dropdown-menu" aria-labelledby="dropdown-4" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
															<a class="dropdown-item waves-light waves-effect" href="<?= base_url('role/roleaccess/') . $tampil['id'];  ?>">Hak Akses</a>
															<a class="dropdown-item waves-light waves-effect" href="#modalEdit<?= $tampil['id'] ?>" data-toggle="modal" title="Edit">Edit</a>
														</div>
													</div>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- Hover table card end -->

					<!-- ==================================  MODAL TAMBAH  ========================================= -->
					<div id="addData" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content animated bounceInRight">
								<div class="modal-header">
									<h5 class="modal-title">Tambah Data Role Management</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>

								<form class="form-horizontal" method="POST" action="<?php echo base_url('role') ?>">
									<div class="modal-body">

										<div class="form-group row"><label class="col-sm-3 col-form-label">Role Management </label>
											<div class="col-sm-9"><input type="text" name="role" class="form-control" placeholder="Masukkan nama role management..." autocomplete="off" autofocus></div>
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
					<?php foreach ($role as $tampil) : ?>
						<div id="modalEdit<?php echo $tampil['id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal">
							<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
								<div class="modal-content animated bounceInRight">
									<div class="modal-header">
										<h5 class="modal-title">Edit Menu Management</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									</div>

									<form class="form-horizontal" method="post" action="<?php echo base_url('role/Edit') ?>">
										<div class="modal-body">
											<input name="id" type="hidden" value="<?php echo $tampil['id']; ?>">

											<div class="form-group row"><label class="col-sm-3 col-form-label">Role Management </label>
												<div class="col-sm-9"><input type="text" name="role" value="<?= $tampil['role']; ?>" class="form-control" placeholder="Masukkan nama title..." autocomplete="off" autofocus></div>
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
