<!-- Content Section -->
<div id="main-content" class="col-10">

<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Daftar Program Studi di Unit Pengelola Program Studi</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<form action="<?= base_url("kuesioner/p"); ?>" method="post">
    <div class="form-group row">
        <label for="inputJenis" class="col-sm-2 col-form-label">Jenis Program</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputJenis" name="inputJenis">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputNamaPS" class="col-sm-2 col-form-label">Nama Program Studi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputNamaPS" name="inputNamaPS">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputStatus" class="col-sm-2 col-form-label">Status/Peringkat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputStatus" name="inputStatus">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputNoTanggal" class="col-sm-2 col-form-label">Nomor dan Tanggal SK</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputNoTanggal" name="inputNoTanggal">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputKadaluarsa" class="col-sm-2 col-form-label">Tanggal Kadaluarsa</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="inputKadaluarsa" name="inputKadaluarsa">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputJumlah" class="col-sm-2 col-form-label">Jumlah Mahasiswa</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="inputJumlah" name="inputJumlah">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
