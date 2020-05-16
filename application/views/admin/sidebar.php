<!-- Main Content -->
<div class="row container-fluid">

<!-- Sidebar -->
    <div class="col-2" id="sidebar">
        <ul class="list-unstyled components">
            <li <?php echo ($active == "dashboard" ? 'class="active"':'') ?>><a href="<?= base_url("admin/dashboard"); ?>">Dashboard</a></li>
            <li <?php echo ($active == "pengguna" ? 'class="active"':'') ?>><a href="<?= base_url("admin/pengguna"); ?>">Pengguna</a></li>
            <li <?php echo ($active == "token" ? 'class="active"':'') ?>><a href="<?= base_url("admin/token"); ?>">Token</a></li>        
        </ul>
    </div>
<!-- End Sidebar -->
