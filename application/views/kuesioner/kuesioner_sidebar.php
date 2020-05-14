
<!-- Main Content -->
<div class="row container-fluid">

<!-- Sidebar -->
    <div class="col-2" id="sidebar">
        <ul class="list-unstyled components">
            <li <?php echo ($active == "dashboard" ? 'class="active"':'') ?>><a href="dashboard">Dashboard</a></li>
            <?php foreach( $tabels as $tabel) : ?>
            <li <?php echo ($active == $tabel['kode'] ? 'class="active"':'') ?>><a href="<?= base_url('kuesioner/t/'.$tabel['kode']); ?>"><?= $tabel['kode']; ?></a></li>
            <?php endforeach; ?>        
        </ul>
    </div>
<!-- End Sidebar -->
