<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 3 | DataTables</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= site_url('assets/fontawesome-free/css/all.min.css'); ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?= site_url('assets/datatables-bs4/css/dataTables.bootstrap4.css'); ?>">
	<!-- Theme style -->

	<link href="<?= site_url('assets/select2/dist/css/select2.min.css'); ?>" rel='stylesheet' type='text/css'>

	<link href="<?= site_url('assets/daterangepicker/daterangepicker.css'); ?>" rel='stylesheet' type='text/css'>

	<link href="<?= site_url("assets/js/datepicker/gijgo.min.css") ?>" rel="stylesheet">
	<link href="<?= site_url("assets/css/form-validation.css?".time()) ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?= site_url('assets/css/adminlte.min.css'); ?>">
	<link rel="stylesheet" href="<?= site_url('assets/css/multi-select.css'); ?>">
	<link rel="stylesheet" href="<?= site_url('assets/css/main.css?'.time()); ?>">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
			</li>
		</ul>

		<h5 class="title" style="margin: 0px auto;"><?= $title; ?></h5>


		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">

			<li class="nav-item dropdown">
				<a class="nav-link" id="admin_btn" data-toggle="dropdown" href="#">
					<img src="<?= site_url('assets/img/admin.png'); ?>">
					<p>Admin</p>
				</a>
				<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
					<a href="<?= site_url('auth/admin_edit'); ?>" class="dropdown-item">
						<img src="<?= site_url('assets/img/admin_edit.svg');?>" width="12%" class="mr-2">
						Admin tahrirlash
					</a>
					<div class="dropdown-divider"></div>
					<a href="<?= site_url('user/logout'); ?>" class="dropdown-item">
						<img src="<?= site_url('assets/img/logout.svg'); ?>" width="10%" class='mr-2'>
						Tizimdan chiqish
					</a>
				</div>
			</li>

		</ul>
	</nav>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="../index3.html" class="brand-link">
			<img src="<?= site_url('assets/img/AdminLTELogo.png'); ?>"
				 alt="AdminLTE Logo"
				 class="brand-image img-circle elevation-3"
				 style="opacity: .8">
			<span class="brand-text font-weight-light">Hikvision</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

					<li class="nav-item">
						<a href="<?= site_url('auth/'); ?>" class="nav-link <?= $this->uri->segment(1) == "auth" ? "active":""; ?>">
							<i class="nav-icon fas fa-user-friends"></i>
							<p>
								Hodimlar
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= site_url('task/'); ?>" class="nav-link <?= $this->uri->segment(1) == "task" ? "active": ""; ?>">
							 <i class="nav-icon fas fa-user-tie"></i>
							<p>
								Vazifalar
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= site_url('report/'); ?>" class="nav-link <?= $this->uri->segment(1) == "report" ? "active": ""; ?>">
							<i class="nav-icon fas fa-layer-group"></i>
							<p>
								Hisobot
							</p>
						</a>
					</li>


				</ul>
			</nav>
			<!-- /.sidebar-menu -->

		</div>
		<!-- /.sidebar -->
	</aside>
	<div class="content-wrapper pt-2" id="app">

		<?php $this->load->view($content); ?>

	</div>

	<?php include_once('modal.php'); ?>


	<footer class="main-footer">
		<div class="float-right d-none d-sm-block">
			<b>Version</b> 	1.0.0
		</div>
		<strong>Copyright &copy; 2021 <a href="http://almirab.uz">almirab.uz</a></strong>
	</footer>

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= site_url('assets/js/jquery-3.5.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= site_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<!-- DataTables -->
<script src="<?= site_url('assets/datatables/jquery.dataTables.js'); ?>"></script>
<script src="<?= site_url('assets/datatables-bs4/js/dataTables.bootstrap4.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= site_url('assets/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= site_url('assets/js/demo.js'); ?>"></script>
<script src="<?= site_url('assets/js/jquery.multi-select.js'); ?>"></script>
<!-- page script -->
<script src="<?= site_url('assets/select2/dist/js/select2.min.js');?>" type='text/javascript'></script>

<!-- daterangepicker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
<script src="<?= site_url('assets/daterangepicker/daterangepicker.js');?>" type='text/javascript'></script>

<script src="<?= site_url("assets/js/form-validation.js") ?>"></script>
<script src="<?= site_url("assets/js/datepicker/gijgo.min.js"); ?>"></script>
<script src="<?= site_url('assets/js/modal_delete.js'); ?>"></script>
<!-- functions -->
<script src="<?= site_url('assets/js/functions.js?'.time()); ?>"></script>
<!-- ./functions -->
</body>
</html>
