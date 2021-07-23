	<!-- Pre-loader start -->
	<div class="theme-loader">
		<div class="loader-track">
			<div class="preloader-wrapper">
				<div class="spinner-layer spinner-blue">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
				<div class="spinner-layer spinner-red">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>

				<div class="spinner-layer spinner-yellow">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>

				<div class="spinner-layer spinner-green">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pre-loader end -->
	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">
			<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">
					<div class="navbar-logo">
						<a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
							<i class="ti-menu"></i>
						</a>
						<div class="mobile-search waves-effect waves-light">
							<div class="header-search">
								<div class="main-search morphsearch-search">
									<div class="input-group">
										<span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
										<input type="text" class="form-control" placeholder="Enter Keyword">
										<span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
									</div>
								</div>
							</div>
						</div>
						<a class="mobile-options waves-effect waves-light">
							<i class="ti-more"></i>
						</a>
					</div>
					<div class="navbar-container container-fluid">
						<ul class="nav-left">
							<li>
								<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
							</li>
							<li>
								<a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
									<i class="ti-fullscreen"></i>
								</a>
							</li>
						</ul>
						<ul class="nav-right">
							<li class="header-notification">
								<a href="#!" class="waves-effect waves-light">
									<i class="ti-bell"></i>
									<span class="badge bg-c-red"></span>
								</a>
								<ul class="show-notification">
									<li>
										<h6>Notifications</h6>
										<label class="label label-danger">New</label>
									</li>
									<li class="waves-effect waves-light">
										<div class="media">
											<img class="d-flex align-self-center img-radius" src="<?= base_url('assets/images/') . $user['image'] ?>" alt="Generic placeholder image">
											<div class="media-body">
												<h5 class="notification-user">John Doe</h5>
												<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
												<span class="notification-time">30 minutes ago</span>
											</div>
										</div>
									</li>
									<li class="waves-effect waves-light">
										<div class="media">
											<img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
											<div class="media-body">
												<h5 class="notification-user">Joseph William</h5>
												<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
												<span class="notification-time">30 minutes ago</span>
											</div>
										</div>
									</li>
									<li class="waves-effect waves-light">
										<div class="media">
											<img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
											<div class="media-body">
												<h5 class="notification-user">Sara Soudein</h5>
												<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
												<span class="notification-time">30 minutes ago</span>
											</div>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">
					<nav class="pcoded-navbar">
						<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
						<div class="pcoded-inner-navbar main-menu">
							<div class="">
								<div class="main-menu-header">
									<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
									<div class="user-details">
										<span id="more-details"><b><?= $user['name']; ?></b><i class=""></i></span>
									</div>
								</div>
							</div>
							<div class="p-15 p-b-0">
								<form class="form-material">
									<div class="form-group form-primary">
										<input type="text" name="footer-email" class="form-control">
										<span class="form-bar"></span>
										<label class="float-label"><i class="fa fa-search m-r-10"></i>Search</label>
									</div>
								</form>
							</div>

							<?php
							$role_id = $this->session->userdata('role_id');
							$this->db->select('*');
							$this->db->from('user_role');
							$this->db->join('user_access_menu', 'user_access_menu.role_id = user_role.id');
							$this->db->join('user_menu', 'user_menu.id = user_access_menu.menu_id');
							$this->db->where('role_id', $role_id);
							$this->db->where('is_active', '1');
							$this->db->where('is_main_menu', '0');
							$query = $this->db->get()->result();
							?>

							<?php foreach ($query as $menu) : ?>
								<?php
								$this->db->select('*');
								$this->db->from('user_role');
								$this->db->join('user_access_menu', 'user_access_menu.role_id = user_role.id');
								$this->db->join('user_menu', 'user_menu.id = user_access_menu.menu_id');
								$this->db->where('role_id', $role_id);
								$this->db->where('is_active', '1');
								$this->db->where('is_main_menu', $menu->id);
								$sub_menu = $this->db->get(); ?>

								<ul class="pcoded-item pcoded-left-item">
									<?php if ($sub_menu->num_rows() != 0) : ?>
										<li class="pcoded-hasmenu ">
											<a href="javascript:void(0)" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="<?= $menu->icon; ?>"></i></span>
												<span class="pcoded-mtext"><?= $menu->title; ?></span>
												<span class="pcoded-mcaret"></span>
											</a>
											<?php foreach ($sub_menu->result() as $sub) : ?>
												<ul class="pcoded-submenu">
													<li <?= $this->uri->segment('1') == $sub->url ? 'class="active"' : '' ?>>
														<a href="<?= base_url($sub->url); ?>"><?= $sub->title; ?> </a>
												</ul>
											<?php endforeach; ?>
										</li>

									<?php else : ?>
										<li <?= $this->uri->segment('1') == $menu->url ? 'class="active"' : '' ?>>
											<a href="<?= base_url($menu->url) ?>" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="<?= $menu->icon; ?>"></i></span>
												<span class="pcoded-mtext"><?= $menu->title; ?></span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
									<?php endif; ?>
								<?php endforeach; ?>
								</ul>
								<li class="">
									<a href="<?= base_url('auth/logout') ?>" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-power-off"></i></span>
										<span class="pcoded-mtext">Logout</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
								</li>
								</ul>
								</ul>
								</li>
								</ul>
						</div>
					</nav>
