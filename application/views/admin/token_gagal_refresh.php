<!-- Content Section -->
<div id="main-content" class="container" style="padding:20px">

<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="margin-top:unset;">
            <li class="breadcrumb-item active" aria-current="page">Kelola Pengguna</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<!-- Table Section -->
    <div class="card" style="min-height:200px; margin-top:0px;">  
        <div class="card-body text-center">
            <div class="alert alert-danger" role="alert">
                Token gagal diperbarui karena <?= $gagal;?>
            </div>
            <a href="<?= base_url('admin/token');?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>

<!-- End Table Section -->

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
