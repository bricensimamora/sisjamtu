<!-- Content Section -->
<div id="main-content" class="container-fluid">
<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Seleksi Mahasiswa</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<form action="<?= base_url('kuesioner/tabel_2a');?>" method="post">
    
    <div class="table-responsive">
        <table class="table">
        <thead style="text-align: center;">
            <tr>
                <th rowspan='2' class="align-middle">Tahun Akademik</th>
                <th rowspan='2' class="align-middle">Daya Tampung</th>
                <th colspan='2' class="align-middle">Jumlah Calon Mahasiswa</th>
                <th colspan='2' class="align-middle">Jumlah Mahasiswa Baru</th>
                <th colspan='2' class="align-middle">Jumlah Mahasiswa Aktif</th>
            </tr>
            <tr>
                <th>Pendaftar</th>
                <th>Lulus Seleksi</th>
                <th>Reguler</th>
                <th>Transfer</th>
                <th>Reguler</th>
                <th>Transfer</th>
            </tr>
        </thead>
        <tbody id="isian">
            <tr>
                <td><input type="text" readonly class="form-control-plaintext" name="tahunAkademik[]" value="2020/2021"></td>
                <td><input type="number" min="0" class="form-control" name="tampung[]" id="tampung1"></td>
                <td><input type="number" min="0" class="form-control" name="pendaftar[]" id="pendaftar1"></td>
                <td><input type="number" min="0" class="form-control" name="lulus[]" id="lulus1"></td>
                <td><input type="number" min="0" class="form-control" name="baruReguler[]" id="baruReguler1"></td>
                <td><input type="number" min="0" class="form-control" name="baruTransfer[]" id="baruTransfer1"></td>
                <td><input type="number" min="0" class="form-control" name="aktifReguler[]" id="aktifReguler1"></td>
                <td><input type="number" min="0" class="form-control" name="aktifTransfer[]" id="aktifTransfer1"></td>
            </tr>
            <tr>
                <td><input type="text" readonly class="form-control-plaintext" name="tahunAkademik[]" value="2019/2020"></td>
                <td><input type="number" min="0" class="form-control" name="tampung[]" id="tampung2"></td>
                <td><input type="number" min="0" class="form-control" name="pendaftar[]" id="pendaftar2"></td>
                <td><input type="number" min="0" class="form-control" name="lulus[]" id="lulus2"></td>
                <td><input type="number" min="0" class="form-control" name="baruReguler[]" id="baruReguler2"></td>
                <td><input type="number" min="0" class="form-control" name="baruTransfer[]" id="baruTransfer2"></td>
                <td><input type="number" min="0" class="form-control" name="aktifReguler[]" id="aktifReguler2"></td>
                <td><input type="number" min="0" class="form-control" name="aktifTransfer[]" id="aktifTransfer2"></td>
            </tr>
            <tr>
                <td><input type="text" readonly class="form-control-plaintext" name="tahunAkademik[]" value="2018/2019"></td>
                <td><input type="number" min="0" class="form-control" name="tampung[]" id="tampung3"></td>
                <td><input type="number" min="0" class="form-control" name="pendaftar[]" id="pendaftar3"></td>
                <td><input type="number" min="0" class="form-control" name="lulus[]" id="lulus3"></td>
                <td><input type="number" min="0" class="form-control" name="baruReguler[]" id="baruReguler3"></td>
                <td><input type="number" min="0" class="form-control" name="baruTransfer[]" id="baruTransfer3"></td>
                <td><input type="number" min="0" class="form-control" name="aktifReguler[]" id="aktifReguler3"></td>
                <td><input type="number" min="0" class="form-control" name="aktifTransfer[]" id="aktifTransfer3"></td>
            </tr>
            <tr>
                <td><input type="text" readonly class="form-control-plaintext" name="tahunAkademik[]" value="2017/2018"></td>
                <td><input type="number" min="0" class="form-control" name="tampung[]" id="tampung4"></td>
                <td><input type="number" min="0" class="form-control" name="pendaftar[]" id="pendaftar4"></td>
                <td><input type="number" min="0" class="form-control" name="lulus[]" id="lulus4"></td>
                <td><input type="number" min="0" class="form-control" name="baruReguler[]" id="baruReguler4"></td>
                <td><input type="number" min="0" class="form-control" name="baruTransfer[]" id="baruTransfer4"></td>
                <td><input type="number" min="0" class="form-control" name="aktifReguler[]" id="aktifReguler4"></td>
                <td><input type="number" min="0" class="form-control" name="aktifTransfer[]" id="aktifTransfer4"></td>
            </tr>
            <tr>
                <td><input type="text" readonly class="form-control-plaintext" name="tahunAkademik[]" value="2016/2017"></td>
                <td><input type="number" min="0" class="form-control" name="tampung[]" id="tampung5"></td>
                <td><input type="number" min="0" class="form-control" name="pendaftar[]" id="pendaftar5"></td>
                <td><input type="number" min="0" class="form-control" name="lulus[]" id="lulus5"></td>
                <td><input type="number" min="0" class="form-control" name="baruReguler[]" id="baruReguler5"></td>
                <td><input type="number" min="0" class="form-control" name="baruTransfer[]" id="baruTransfer5"></td>
                <td><input type="number" min="0" class="form-control" name="aktifReguler[]" id="aktifReguler5"></td>
                <td><input type="number" min="0" class="form-control" name="aktifTransfer[]" id="aktifTransfer5"></td>
            </tr>
            <tr>
                <td><input type="text" readonly class="form-control-plaintext" name="tahunAkademik[]" value="2015/2016"></td>
                <td><input type="number" min="0" class="form-control" name="tampung[]" id="tampung6"></td>
                <td><input type="number" min="0" class="form-control" name="pendaftar[]" id="pendaftar6"></td>
                <td><input type="number" min="0" class="form-control" name="lulus[]" id="lulus6"></td>
                <td><input type="number" min="0" class="form-control" name="baruReguler[]" id="baruReguler6"></td>
                <td><input type="number" min="0" class="form-control" name="baruTransfer[]" id="baruTransfer6"></td>
                <td><input type="number" min="0" class="form-control" name="aktifReguler[]" id="aktifReguler6"></td>
                <td><input type="number" min="0" class="form-control" name="aktifTransfer[]" id="aktifTransfer6"></td>
            </tr>
        </tbody>
        </table>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
        </div>
    </div>
</form>

<script> 
    $(document).ready(function(e){
        var number;
        var tampung = "#tampung";
        var pendaftar = "#pendaftar";
        var lulus ="#lulus"
        var baruReguler = "#baruReguler";
        var baruTransfer = "#baruTransfer";
        var aktifReguler ="#aktifReguler"
        var aktifTransfer = "#aktifTransfer";
        for (number = 1; number < 7 ; number++) {
            bootstrapValidate(tampung+number, 'required:isian kosong');
            bootstrapValidate(pendaftar+number, 'required:isian kosong');
            bootstrapValidate(lulus+number, 'required:isian kosong');
            bootstrapValidate(baruReguler+number, 'required:isian kosong');
            bootstrapValidate(baruTransfer+number, 'required:isian kosong');
            bootstrapValidate(aktifReguler+number, 'required:isian kosong');
            bootstrapValidate(aktifTransfer+number, 'required:isian kosong');
        }
    });
</script>

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
