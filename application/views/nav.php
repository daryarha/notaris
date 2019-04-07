<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="<?php echo base_url('order'); ?>" class="site_title"><i class="fa fa-paw"></i> <span> Notaris Dewi
								Andriani</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->

					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>Menu</h3>
							<ul class="nav side-menu">
								<li><a href="<?php echo base_url('order'); ?>"><i class=""></i> Order</a> </li>
								<li><a href="<?php echo base_url('klien'); ?>"><i class=""></i> Klien</a> </li>
								<li><a href="<?php echo base_url('protokol'); ?>"><i class=""></i> Protokol Notaris</a> </li>
								<?php if($mode=='Nin'){ ?>
								<li><a href="<?php echo base_url('akun'); ?>"><i class=""></i> Akun</a> </li>
								<li><a href="<?php echo base_url('produktivitas'); ?>"><i class=""></i> Produktivitas Pegawai</a> </li>
								<li><a href="<?php echo base_url('monitor'); ?>"><i class=""></i> Monitoring Kerja</a> </li>
								<li><a href="<?php echo base_url('log'); ?>"><i class=""></i> Log Aktivitas Pegawai</a> </li>
								<?php } ?>
							</ul>
						</div>

					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->

					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<nav>
						<div class="nav toggle">
							<a id="menu_toggle"><i class="fa fa-bars"></i></a>
						</div>

						<ul class="nav navbar-nav navbar-right">

							<li class="">
								<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<img src="" alt="">
									<?php echo $username; ?>
									<span class=" fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu dropdown-usermenu pull-right">
									<li><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
								</ul>
							</li>

							<li role="presentation" class="dropdown">
								<a href="javascript:void(0)" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-envelope-o"></i>
								</a>

								<ul id="reminder_deadline" class="dropdown-menu list-unstyled msg_list" role="menu">
									<li>
										<a>
											<span>
												<span>Deadline Pekerjaan ini</span>
												<span class="time">7 hari lagi</span>
											</span>
											<span class="message">
												Harap segera dikerjakan
											</span>
										</a>
									</li>
								</ul>
							</li>
							<li role="presentation" class="dropdown">
								<a href="javascript:void(0)" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-tasks"></i>
								</a>
								<ul id="reminder_kertas" class="dropdown-menu list-unstyled msg_list" role="menu">
									<li>
										<a>
											<span>
												<span>Kertas untuk berkas ini</span>
												<span class="time">5 tahun lebih</span>
											</span>
											<span class="message">
												Harap ganti kertas
											</span>
										</a>
									</li>
								</ul>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->
