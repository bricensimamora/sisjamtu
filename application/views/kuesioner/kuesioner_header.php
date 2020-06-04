<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPM | Kuesioner</title>

    <link rel="icon" href="<?php echo base_url("assets/images/polstatstis.png"); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/solid.css');?>">

    <!-- Custom CSS file -->
	<link rel="stylesheet" href="<?= base_url("assets/css/kuesioner_style.css"); ?>">

	<script src="<?= base_url('assets/js/jquery-3.5.1.min.js');?>"></script>
	<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
	<script src="<?= base_url('assets/js/bootstrap-validate.js');?>"></script>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-md sticky-top navbar-dark navbar-custom">
<div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('beranda');?>"><img src="<?php echo base_url('assets/images/logoSTIS-SPM.png'); ?>"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li style="margin-right: 8px" class="nav-item">
                <a class="btn btn-outline-warning" href="<?= base_url('beranda');?>"><span class="align-middle">BERANDA</span></a>
            </li>
            <li style="margin-right: 8px" class="nav-item">
                <a class="btn btn-outline-warning" href="<?= base_url('kuesioner');?>"><span class="align-middle">DASHBOARD</span></a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-warning" href="<?= base_url('auth/logout');?>"><i class="fas fa-sign-out-alt align-middle"></i><span class="align-middle"> KELUAR</span></a>
            </li>
        </ul>
    </div>  
</div>
</nav>
<!-- End Navigation Bar -->
