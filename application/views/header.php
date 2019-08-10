<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')  ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/linearicons/style.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/chartist/css/chartist-custom.css') ?>">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/demo.css') ?>">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png') ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon.png') ?>">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="<?php echo base_url('assets/img/logo-dark.png') ?>" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div class="navbar-btn navbar-btn-right">
					<a class="btn btn-success update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url('assets/img/user.png') ?>" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo site_url('Welcome'); ?>" class="active"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
						<li><a href="<?php echo site_url('Welcome/user'); ?>" class=""><i class="lnr lnr-file-empty"></i> <span>Data User</span></a></li>
						<li>
							<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>Kategori</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages1" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo site_url('Welcome/kategori'); ?>" class="">Tambah Kategori</a></li>
									<li><a href="<?php echo site_url('Welcome/datakategori'); ?>" class="">Data Kategori</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>Perilaku</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo site_url('Welcome/perilaku'); ?>" class="">Tambah Perilaku</a></li>
									<li><a href="<?php echo site_url('Welcome/dataperilaku'); ?>" class="">Data Perilaku</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages3" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>Solusi</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages3" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo site_url('Welcome/solusi'); ?>" class="">Tambah Solusi</a></li>
									<li><a href="<?php echo site_url('Welcome/datasolusi'); ?>" class="">Data Solusi</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages4" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>Rule</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages4" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo site_url('Welcome/rule'); ?>" class="">Tambah Rule</a></li>
									<li><a href="<?php echo site_url('Welcome/datarule'); ?>" class="">Data Rule</a></li>
								</ul>
							</div>
						</li>
						<li><a href="<?php echo site_url('Welcome/login'); ?>" class=""><i class="lnr lnr-user"></i> <span>Login</span></a></li>
						</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
