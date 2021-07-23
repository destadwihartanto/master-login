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
							<h5>Hover Table</h5>
							<div class=""><a class="btn btn-info waves-effect waves-light" href="" data-toggle="modal" data-target="#addData">Tambah</a></div>
						</div>
						<div class="card-block table-border-style">
							<div class="table-responsive">
								<table id="dataTables" class="table table-hover">
									<thead>
										<tr style="background-color: #FFFFCC;">
											<th>#</th>
											<th>Title</th>
											<th>Url</th>
											<th>Icon</th>
											<th>Status</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 0;
										foreach ($menu as $tampil) : $no++ ?>
											<tr>
												<th scope="row"><?= $no; ?></th>
												<td><?= $tampil['title']; ?></td>
												<td><?= $tampil['url']; ?></td>
												<td><?= $tampil['icon']; ?></td>
												<td>
													<?php
													switch ($tampil['is_active']) {
														case 1:
															echo '<span class="label label-success shadow">Active</span>';
															break;
														default:
															echo '<span class="label label-default shadow">Non - Active</span>';
															break;
													}
													?>
												</td>
												<td>
													<div class="dropdown-info dropdown open">
														<button class="btn btn-instagram dropdown-toggle waves-effect waves-light " type="button" id="dropdown-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Aksi</button>
														<div class="dropdown-menu" aria-labelledby="dropdown-4" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
															<a class="dropdown-item waves-light waves-effect" href="<?= base_url('menu/Delete/') . $tampil['id']  ?>" onclick="return confirm('Yakin menghapus data <?= $tampil['title']; ?>  ?!');">Hapus</a>
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
									<h5 class="modal-title">Tambah Data Menu Management</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>

								<form class="form-horizontal" method="POST" action="<?php echo base_url('menu') ?>">
									<div class="modal-body">

										<div class="form-group row"><label class="col-sm-2 col-form-label">Title </label>
											<div class="col-sm-10"><input type="text" name="title" class="form-control" placeholder="Masukkan nama title..." autocomplete="off" autofocus></div>
										</div>
										<div class="form-group row"><label class="col-sm-2 col-form-label">Url </label>
											<div class="col-sm-10"><input type="text" name="url" class="form-control" placeholder="Masukkan nama url..." autocomplete="off" autofocus></div>
										</div>
										<div class="form-group row"><label class="col-sm-2 col-form-label">Icon </label>
											<div class="col-sm-10"><input type="text" name="icon" class="form-control" placeholder="Masukkan nama icon..." autocomplete="off" autofocus></div>
										</div>
										<div class="form-group row"><label class="col-sm-2 col-form-label"> is main menu</label>
											<div class="col-md-10">
												<select class="form-control chosen-select" name="is_main_menu">
													<option value="">Pilih Submenu....</option>
													<?php foreach ($menu as $tampil) { ?>
														<option value="<?php echo $tampil['id']; ?>"><?php echo $tampil['title']; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="form-group row"><label class="col-sm-2 col-form-label">Is Active ? </label>
											<div class="col-md-6">
												<select class="form-control" name="is_active">
													<option value="1">Active</option>
													<option value="0">Non - active</option>
												</select>
											</div>
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
					<?php foreach ($menu as $tampil) : ?>
						<div id="modalEdit<?php echo $tampil['id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal">
							<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
								<div class="modal-content animated bounceInRight">
									<div class="modal-header">
										<h5 class="modal-title">Edit Menu Management</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									</div>

									<form class="form-horizontal" method="post" action="<?php echo base_url('menu/Edit') ?>">
										<div class="modal-body">
											<input name="id" type="hidden" value="<?php echo $tampil['id']; ?>">


											<div class="form-group row"><label class="col-sm-2 col-form-label">Title </label>
												<div class="col-sm-10"><input type="text" name="title" value="<?= $tampil['title']; ?>" class="form-control" placeholder="Masukkan nama title..." autocomplete="off" autofocus></div>
											</div>
											<div class="form-group row"><label class="col-sm-2 col-form-label">Url </label>
												<div class="col-sm-10"><input type="text" name="url" value="<?= $tampil['url']; ?>" class="form-control" placeholder="Masukkan nama url..." autocomplete="off" autofocus></div>
											</div>
											<div class="form-group row"><label class="col-sm-2 col-form-label">Icon </label>
												<div class="col-sm-10"><input type="text" name="icon" value="<?= $tampil['icon']; ?>" class="form-control" placeholder="Masukkan nama icon..." autocomplete="off" autofocus></div>
											</div>
											<div class="form-group row"><label class="col-sm-2 col-form-label"> Is Main Menu</label>
												<div class="col-md-10">
													<select class="form-control  chosen-select" name="is_main_menu">
														<option value="">Pilih Submenu....</option>
														<?php foreach ($menu as $sub) { ?>
															<option value="<?php echo $sub['id']; ?>" <?= $sub['id'] == $tampil['is_main_menu'] ? "selected" : null ?>><?php echo $sub['title']; ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="form-group row"><label class="col-sm-2 col-form-label">Is Active ? </label>
												<div class="col-md-6">
													<select class="form-control" name="is_active">
														<option <?php if ($tampil['is_active'] == '0') {
																	echo "selected";
																} ?> value="0">Non - active</option>
														<option <?php if ($tampil['is_active'] == '1') {
																	echo "selected";
																} ?> value="1">Active</option>
													</select>
												</div>
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
