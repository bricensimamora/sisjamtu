<!-- Content Section -->
<div id="main-content" class="container-fluid">
<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<form action="<?= base_url('kuesioner/tabel_3a3');?>" method="post">
    
<div class="table-responsive">
        <table class="table">
        <thead style="text-align: center;">
            <tr>
                <th rowspan='3' class="align-middle" style="width:190px;">Nama Dosen (DT)</th>
                <th rowspan='3' class="align-middle" style="width:105px;">DTPS</th>
                <th colspan='6' class="align-middle">Ekuivalen Waktu Mengajar Penuh (EWMP)</th>
                <th rowspan='3' class="align-middle" style="width:56px">Aksi</th>
            </tr>
            <tr>
                <th colspan="3" class="align-middle">Pembelajaran dan Pembimbingan</th>
                <th rowspan="2" class="align-middle">Penelitian</th>
                <th rowspan="2" class="align-middle">PkM</th>
                <th rowspan="2" class="align-middle">Tugas Tambahan dan/atau Penunjang</th>
            </tr>
            <tr>
                <th class="align-middle">PS yang Diakrediatasi</th>
                <th class="align-middle">PS Lain di dalam PT</th>
                <th class="align-middle">PS Lain di luar PT</th>
            </tr>
        </thead>
        <tbody id="isian">
            <tr>
                <td><input type="text" class="form-control" name="nama[]" id="nama" placeholder="Nama Dosen"></td>
                <td>
                    <select class="form-control" name="dtps[]" id="dtps">
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                        <option selected hidden="true">pilih</option>
                    </select>
                </td>
                <td><input type="number" min="0" class="form-control" name="psAkreditasi[]" id="psAkreditasi"></td>
                <td><input type="number" min="0" class="form-control" name="psLain[]" id="psLain"></td>
                <td><input type="number" min="0" class="form-control" name="psKampusLain[]" id="psKampusLain"></td>
                <td><input type="number" min="0" class="form-control" name="penelitian[]" penelitian"></td>
                <td><input type="number" min="0" class="form-control" name="pkm[]" id="pkm"></td>
                <td><input type="number" min="0" class="form-control" name="tugas[]" id="tugas"></td>
                <td><a hidden="true" href="#">X</a></td>
            </tr>
        </tbody>
        </table>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
            <button type="button" id="add" class="btn btn-success">Tambah Baris</button>
        </div>
    </div>
</form>
<script>
    $(document).ready(function(e){
        //Variable
        var html = '<tr>'+
                '<td><input type="text" class="form-control" name="nama[]" id="nama" placeholder="Nama Dosen"></td>'+
                '<td>'+
                    '<select class="form-control" name="dtps[]" id="dtps">'+
                        '<option value="Ya">Ya</option>'+
                        '<option value="Tidak">Tidak</option>'+
                        '<option selected hidden="true">pilih</option>'+
                    '</select>'+
                '</td>'+
                '<td><input type="number" min="0" class="form-control" name="psAkreditasi[]" id="psAkreditasi"></td>'+
                '<td><input type="number" min="0" class="form-control" name="psLain[]" id="psLain"></td>'+
                '<td><input type="number" min="0" class="form-control" name="psKampusLain[]" id="psKampusLain"></td>'+
                '<td><input type="number" min="0" class="form-control" name="penelitian[]" penelitian"></td>'+
                '<td><input type="number" min="0" class="form-control" name="pkm[]" id="pkm"></td>'+
                '<td><input type="number" min="0" class="form-control" name="tugas[]" id="tugas"></td>'+
                '<td class="text-center"><a href="#" id="remove"><i class="fas fa-trash-alt" style="color:red;"></i></a></td>'+
            '</tr>';
        var maxRows = 10;
        var x = 1;

        //Add baris ke formulir
        $("#add").click(function(e){
            if(x <= maxRows){
                $("#isian").append(html);
                x++;
            }
        });

        //Hapus baris dari formulir
        $("#isian").on('click','#remove',function(e){
            $(this).closest('tr').remove();
            x--;
        })
    });
    bootstrapValidate('#nama', 'required:isian kosong')
    bootstrapValidate('#dtps', 'required:isian kosong')
    bootstrapValidate('#psAkreditasi', 'required:isian kosong')
    bootstrapValidate('#psLain', 'required:isian kosong')
    bootstrapValidate('#psKampusLain', 'required:isian kosong')
    bootstrapValidate('#penelitian', 'required:isian kosong')
    bootstrapValidate('#pkm', 'required:isian kosong')
    bootstrapValidate('#tugas', 'required:isian kosong')
</script>

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
