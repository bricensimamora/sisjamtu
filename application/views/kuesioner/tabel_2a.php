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
                <th rowspan='2' style="text-align:center; padding-bottom:35px">Tahun Akademik</th>
                <th rowspan='2'>Daya Tampung</th>
                <th colspan='2'>Jumlah Calon Mahasiswa</th>
                <th colspan='2'>Jumlah Mahasiswa Baru</th>
                <th colspan='2'>Jumlah Mahasiswa Aktif</th>
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
                <td><input type="number" min="0" class="form-control" name="tampung[]" id="tampung"></td>
                <td><input type="number" min="0" class="form-control" name="pendaftar[]" id="pendaftar"></td>
                <td><input type="number" min="0" class="form-control" name="lulus[]" id="lulus"></td>
                <td><input type="number" min="0" class="form-control" name="baruReguler[]" id="baruReguler"></td>
                <td><input type="number" min="0" class="form-control" name="baruTransfer[]" id="baruTransfer"></td>
                <td><input type="number" min="0" class="form-control" name="aktifReguler[]" id="aktifReguler"></td>
                <td><input type="number" min="0" class="form-control" name="aktifTransfer[]" id="aktifTransfer"></td>
            </tr>
            <tr>
                <td><input type="text" readonly class="form-control-plaintext" name="tahunAkademik[]" value="2019/2020"></td>
                <td><input type="number" min="0" class="form-control" name="tampung[]" id="tampung"></td>
                <td><input type="number" min="0" class="form-control" name="pendaftar[]" id="pendaftar"></td>
                <td><input type="number" min="0" class="form-control" name="lulus[]" id="lulus"></td>
                <td><input type="number" min="0" class="form-control" name="baruReguler[]" id="baruReguler"></td>
                <td><input type="number" min="0" class="form-control" name="baruTransfer[]" id="baruTransfer"></td>
                <td><input type="number" min="0" class="form-control" name="aktifReguler[]" id="aktifReguler"></td>
                <td><input type="number" min="0" class="form-control" name="aktifTransfer[]" id="aktifTransfer"></td>
            </tr>
            <tr>
                <td><input type="text" readonly class="form-control-plaintext" name="tahunAkademik[]" value="2018/2019"></td>
                <td><input type="number" min="0" class="form-control" name="tampung[]" id="tampung"></td>
                <td><input type="number" min="0" class="form-control" name="pendaftar[]" id="pendaftar"></td>
                <td><input type="number" min="0" class="form-control" name="lulus[]" id="lulus"></td>
                <td><input type="number" min="0" class="form-control" name="baruReguler[]" id="baruReguler"></td>
                <td><input type="number" min="0" class="form-control" name="baruTransfer[]" id="baruTransfer"></td>
                <td><input type="number" min="0" class="form-control" name="aktifReguler[]" id="aktifReguler"></td>
                <td><input type="number" min="0" class="form-control" name="aktifTransfer[]" id="aktifTransfer"></td>
            </tr>
            <tr>
                <td><input type="text" readonly class="form-control-plaintext" name="tahunAkademik[]" value="2017/2018"></td>
                <td><input type="number" min="0" class="form-control" name="tampung[]" id="tampung"></td>
                <td><input type="number" min="0" class="form-control" name="pendaftar[]" id="pendaftar"></td>
                <td><input type="number" min="0" class="form-control" name="lulus[]" id="lulus"></td>
                <td><input type="number" min="0" class="form-control" name="baruReguler[]" id="baruReguler"></td>
                <td><input type="number" min="0" class="form-control" name="baruTransfer[]" id="baruTransfer"></td>
                <td><input type="number" min="0" class="form-control" name="aktifReguler[]" id="aktifReguler"></td>
                <td><input type="number" min="0" class="form-control" name="aktifTransfer[]" id="aktifTransfer"></td>
            </tr>
            <tr>
                <td><input type="text" readonly class="form-control-plaintext" name="tahunAkademik[]" value="2016/2017"></td>
                <td><input type="number" min="0" class="form-control" name="tampung[]" id="tampung"></td>
                <td><input type="number" min="0" class="form-control" name="pendaftar[]" id="pendaftar"></td>
                <td><input type="number" min="0" class="form-control" name="lulus[]" id="lulus"></td>
                <td><input type="number" min="0" class="form-control" name="baruReguler[]" id="baruReguler"></td>
                <td><input type="number" min="0" class="form-control" name="baruTransfer[]" id="baruTransfer"></td>
                <td><input type="number" min="0" class="form-control" name="aktifReguler[]" id="aktifReguler"></td>
                <td><input type="number" min="0" class="form-control" name="aktifTransfer[]" id="aktifTransfer"></td>
            </tr>
            <tr>
                <td><input type="text" readonly class="form-control-plaintext" name="tahunAkademik[]" value="2015/2016"></td>
                <td><input type="number" min="0" class="form-control" name="tampung[]" id="tampung"></td>
                <td><input type="number" min="0" class="form-control" name="pendaftar[]" id="pendaftar"></td>
                <td><input type="number" min="0" class="form-control" name="lulus[]" id="lulus"></td>
                <td><input type="number" min="0" class="form-control" name="baruReguler[]" id="baruReguler"></td>
                <td><input type="number" min="0" class="form-control" name="baruTransfer[]" id="baruTransfer"></td>
                <td><input type="number" min="0" class="form-control" name="aktifReguler[]" id="aktifReguler"></td>
                <td><input type="number" min="0" class="form-control" name="aktifTransfer[]" id="aktifTransfer"></td>
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

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
