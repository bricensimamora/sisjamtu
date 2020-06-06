<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPM | Official Website ✓</title>
    <link rel="icon" href="<?php echo base_url("assets/images/polstatstis.png"); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="<?php echo base_url("assets/css/style.css"); ?>" rel="stylesheet">
   
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    
 
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md sticky-top navbar-dark navbar-custom">
<div class="container-fluid">
    <a class="navbar-brand" href="/sisjamtu/beranda"><img src="<?php echo base_url('assets/images/logoSTIS-SPM.png'); ?>"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('beranda');?>">BERANDA</a>
            </li>
            <?php if($this->session->is_admin()) :?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin');?>">ADMIN</a>
            </li>
            <?php endif; ?>
            <?php if($this->session->is_token()) :?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('kuesioner');?>">KUESIONER</a>
            </li>
            <?php endif; ?>
            <?php if($this->session->at_least_pengamat()) :?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('daftartabel');?>">DAFTAR TABEL</a>
            </li>
            <?php endif; ?>
            <?php if($this->session->at_least_pengamat()) :?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('monitoring');?>">MONITORING</a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout');?>">KELUAR</a>
            </li>
        </ul>
    </div>  
</div>
</nav>