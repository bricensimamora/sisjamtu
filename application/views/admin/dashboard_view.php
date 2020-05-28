<!-- Content Section -->
<div class="col-10">

<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<div class="row" id="dashboard">
    <div class="col-6">
        <div class="card text-center">
            <h5 class="card-header">Jumlah Pengguna</h5>
            <div class="card-body">
                <p id="numLaporan"><?= $jumlah_pengguna; ?></p>
                <a href="#" class="btn btn-primary">Kelola</a>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card text-center">
            <h5 class="card-header">Jumlah Token</h5>
            <div class="card-body">
                <p id="numLaporan"><?= $jumlah_token; ?></p>
                <a href="#" class="btn btn-primary">Kelola</a>
            </div>
        </div>
    </div>
</div>

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
