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
							<!--  project and team member start -->
							<h5>Projects</h5>
							<div class="ibox-title"><a class="btn btn-outline btn-danger shadow" href="<?= base_url('role') ?>">Kembali</a></div>
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
											<th># </th>
											<th>Menu</th>
											<th>Access</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 0;
										foreach ($menu as $tampil) : $no++ ?>
											<tr>
												<td><?= $no; ?></td>
												<td><?= $tampil['title']; ?></td>
												<td>
													<div class="chk-option">
														<div class="checkbox-fade fade-in-primary">
															<label class="check-task">
																<input class="form-check-input" type="checkbox" <?= check_access($role['id'], $tampil['id']); ?> data-role="<?= $role['id'] ?>" data-menu="<?= $tampil['id'] ?>">
																<span class="cr">
																	<i class="cr-icon fa fa-check txt-default"></i>
																</span>
															</label>
														</div>
													</div>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
								<!-- <div class="text-right m-r-20">
									<a href="#!" class=" b-b-primary text-primary">View all Projects</a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
				<!--  project and team member end -->
				<script src="<?= base_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
				<script>
					$('.form-check-input').on('click', function() {
						const menuId = $(this).data('menu');
						const roleId = $(this).data('role');

						$.ajax({
							url: "<?= base_url('role/changeaccess'); ?>",
							type: 'post',
							data: {
								menuId: menuId,
								roleId: roleId
							},
							success: function() {
								document.location.href = "<?= base_url('role/roleaccess/'); ?>" + roleId;
							}
						});

					});
				</script>
