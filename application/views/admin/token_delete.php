<!-- Content Section -->
<div id="main-content" class="container" style="padding:20px">

<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Kelola Token</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<!-- Table Section -->
    <div class="card">  
        <div class="card-body">
            <h5 class="card-title text-center" style="padding-bottom:0.5em;">Yakin Ingin menghapus token <?= $nama;?> ini?</h5>
            <!-- <p class="card-text">Daftar pengguna yang dapat login menggunakan token untuk mengisi tabel.</p> -->
            <form action method="post" class="text-center">
                <input type="submit" class="btn btn-danger" name="hapus" value="Hapus">
                <a href="<?= base_url('admin/token');?>" class="btn btn-warning">Batal</a>
            </form>
        </div>
    </div>

<!-- End Table Section -->

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
