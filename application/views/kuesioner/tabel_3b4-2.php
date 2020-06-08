<!-- Content Section -->
<div id="main-content" class="container-fluid">
<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Pagelaran/Pameran/Presentasi/Publikasi Ilmiah DTPS</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<form action="<?= base_url('kuesioner/tabel_3b4_2');?>" method="post">
    
<div class="table-responsive">
        <table class="table">
        <thead style="text-align: center;">
            <tr>
                <th rowspan='2' class="align-middle">Jenis Publikasi</th>
                <th colspan='3' class="align-middle">Jumlah Judul</th>
            </tr>
            <tr>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
            </tr>
        </thead>
        <tbody id="isian">
            <tr>
                <td class="align-middle">Jurnal penelitian tidak terakreditasi<input hidden="true type="text" class="form-control-plaintext" name="jenis[]" id="jenis" value="Jurnal penelitian tidak terakreditasi" readonly></td>
                <td><input type="number" min="0" class="form-control" name="ts2[]" id="ts2"></td>
                <td><input type="number" min="0" class="form-control" name="ts1[]" id="ts1"></td>
                <td><input type="number" min="0" class="form-control" name="ts[]" id="ts"></td>
            </tr>
            <tr>
                <td class="align-middle">Jurnal penelitian nasional terakreditasi<input hidden="true type="text" class="form-control-plaintext" name="jenis[]" id="jenis" value="Jurnal penelitian nasional terakreditasi" readonly></td>
                <td><input type="number" min="0" class="form-control" name="ts2[]" id="ts2"></td>
                <td><input type="number" min="0" class="form-control" name="ts1[]" id="ts1"></td>
                <td><input type="number" min="0" class="form-control" name="ts[]" id="ts"></td>
            </tr>
            <tr>
                <td class="align-middle">Jurnal penelitian internasional<input hidden="true type="text" class="form-control-plaintext" name="jenis[]" id="jenis" value="Jurnal penelitian internasional" readonly></td>
                <td><input type="number" min="0" class="form-control" name="ts2[]" id="ts2"></td>
                <td><input type="number" min="0" class="form-control" name="ts1[]" id="ts1"></td>
                <td><input type="number" min="0" class="form-control" name="ts[]" id="ts"></td>
            </tr>
            <tr>
                <td class="align-middle">Jurnal penelitian internasional bereputasi<input hidden="true "type="text" class="form-control-plaintext" name="jenis[]" id="jenis" value="Jurnal penelitian internasional bereputasi" readonly></td>
                <td><input type="number" min="0" class="form-control" name="ts2[]" id="ts2"></td>
                <td><input type="number" min="0" class="form-control" name="ts1[]" id="ts1"></td>
                <td><input type="number" min="0" class="form-control" name="ts[]" id="ts"></td>
            </tr>
            <tr>
                <td class="align-middle">Seminar wilayah/lokal/perguruan tinggi<input hidden="true type="text" class="form-control-plaintext" name="jenis[]" id="jenis" value="Seminar wilayah/lokal/perguruan tinggi" readonly></td>
                <td><input type="number" min="0" class="form-control" name="ts2[]" id="ts2"></td>
                <td><input type="number" min="0" class="form-control" name="ts1[]" id="ts1"></td>
                <td><input type="number" min="0" class="form-control" name="ts[]" id="ts"></td>
            </tr>
            <tr>
                <td class="align-middle">Seminar nasional<input hidden="true type="text" class="form-control-plaintext" name="jenis[]" id="jenis" value="Seminar nasional" readonly></td>
                <td><input type="number" min="0" class="form-control" name="ts2[]" id="ts2"></td>
                <td><input type="number" min="0" class="form-control" name="ts1[]" id="ts1"></td>
                <td><input type="number" min="0" class="form-control" name="ts[]" id="ts"></td>
            </tr>
            <tr>
                <td class="align-middle">Seminar internasional<input hidden="true type="text" class="form-control-plaintext" name="jenis[]" id="jenis" value="Seminar internasional" readonly></td>
                <td><input type="number" min="0" class="form-control" name="ts2[]" id="ts2"></td>
                <td><input type="number" min="0" class="form-control" name="ts1[]" id="ts1"></td>
                <td><input type="number" min="0" class="form-control" name="ts[]" id="ts"></td>
            </tr>
            <tr>
                <td class="align-middle">Pagelaran/pameran/presentasi dalam forum di tingkat wilayah<input hidden="true type="text" class="form-control-plaintext" name="jenis[]" id="jenis" value="Pagelaran/pameran/presentasi dalam forum di tingkat wilayah" readonly></td>
                <td><input type="number" min="0" class="form-control" name="ts2[]" id="ts2"></td>
                <td><input type="number" min="0" class="form-control" name="ts1[]" id="ts1"></td>
                <td><input type="number" min="0" class="form-control" name="ts[]" id="ts"></td>
            </tr>
            <tr>
                <td class="align-middle">Pagelaran/pameran/presentasi dalam forum di tingkat nasional<input hidden="true type="text" class="form-control-plaintext" name="jenis[]" id="jenis" value="Pagelaran/pameran/presentasi dalam forum di tingkat nasional" readonly></td>
                <td><input type="number" min="0" class="form-control" name="ts2[]" id="ts2"></td>
                <td><input type="number" min="0" class="form-control" name="ts1[]" id="ts1"></td>
                <td><input type="number" min="0" class="form-control" name="ts[]" id="ts"></td>
            </tr>
            <tr>
                <td class="align-middle">Pagelaran/pameran/presentasi dalam forum di tingkat internasional<input hidden="true type="text" class="form-control-plaintext" name="jenis[]" id="jenis" value="Pagelaran/pameran/presentasi dalam forum di tingkat internasional" readonly></td>
                <td><input type="number" min="0" class="form-control" name="ts2[]" id="ts2"></td>
                <td><input type="number" min="0" class="form-control" name="ts1[]" id="ts1"></td>
                <td><input type="number" min="0" class="form-control" name="ts[]" id="ts"></td>
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
    bootstrapValidate('#jenis', 'required:isian kosong')
    bootstrapValidate('#ts2', 'required:isian kosong')
    bootstrapValidate('#ts1', 'required:isian kosong')
    bootstrapValidate('#ts', 'required:isian kosong')
</script>

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
