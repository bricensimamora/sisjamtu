<!-- Content Section -->
<div id="main-content" class="container-fluid">
<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dosen Tetap Perguruan Tinggi</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<form action="<?= base_url('kuesioner/tabel_3a1');?>" method="post">
    
<div class="table-responsive">
        <table class="table">
        <thead style="text-align: center;">
            <tr>
                <th rowspan='2' class="align-middle" style="min-width:190px">Nama Dosen</th>
                <th rowspan='3' class="align-middle" style="min-width:150px">NIDN/NIDK</th>
                <th colspan='2' class="align-middle">Pendidikan Pasca Sarjana</th>
                <th rowspan='2' class="align-middle">Bidang Keahlian</th>
                <th rowspan='2' class="align-middle">Kesesuaian Kompetensi Inti</th>
                <th rowspan='2' class="align-middle">Jabatan Akademik</th>
                <th rowspan='2' class="align-middle">Sertifikat Pendidik Profesional</th>
                <th rowspan='2' class="align-middle">Sertifikat Kompetensi</th>
                <th rowspan='2' class="align-middle">Matakuliah yang Diampu</th>
                <th rowspan='2' class="align-middle">Kesesuaian Bidang Keahlian</th>
                <th rowspan='2' class="align-middle">Matakuliah yang Diampu pada PS Lain</th>
                <th rowspan='2' class="align-middle" style="width:56px">Aksi</th>
            </tr>
            <tr>
                <th class="align-middle" style="min-width:100px">Magister</th>
                <th class="align-middle" style="min-width:100px">Doktor</th>
            </tr>
        </thead>
        <tbody id="isian">
            <tr>
                <td><input type="text" class="form-control" name="nama[]" id="nama" placeholder="Masukkan Nama"></td>
                <td><input type="text" class="form-control" name="nidn[]" id="nidn"></td>
                <td><input type="text" class="form-control" name="magister[]" id="magister"></td>
                <td><input type="text" class="form-control" name="doktor[]" id="doktor"></td>
                <td><input type="text" class="form-control" name="keahlian[]" id="keahlian"></td>
                <td><input type="text" class="form-control" name="kesesuaianInti[]" id="kesesuaian"></td>
                <td><input type="text" class="form-control" name="jabatan[]" id="jabatan"></td>
                <td><input type="text" class="form-control" name="sertifikatPendidik[]" id="sertifikatPendidik"></td>
                <td><input type="text" class="form-control" name="sertifikatKompetensi[]" id="sertifikatKompetensi"></td>
                <td><input type="text" class="form-control" name="mataKuliah[]" id="mataKuliah"></td>
                <td><input type="text" class="form-control" name="kesesuaianBidang[]" id="kesesuaianBidang"></td>
                <td><input type="text" class="form-control" name="matkulPSlain[]" id="matkulPSlain"></td>
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
                '<td><input type="text" class="form-control" name="nama[]" id="nama" placeholder="Masukkan Nama"></td>'+
                '<td><input type="text" class="form-control" name="nidn[]" id="nidn"></td>'+
                '<td><input type="text" class="form-control" name="magister[]" id="magister"></td>'+
                '<td><input type="text" class="form-control" name="doktor[]" id="doktor"></td>'+
                '<td><input type="text" class="form-control" name="keahlian[]" id="keahlian"></td>'+
                '<td><input type="text" class="form-control" name="kesesuaianInti[]" id="kesesuaian"></td>'+
                '<td><input type="text" class="form-control" name="jabatan[]" id="jabatan"></td>'+
                '<td><input type="text" class="form-control" name="sertifikatPendidik[]" id="sertifikatPendidik"></td>'+
                '<td><input type="text" class="form-control" name="sertifikatKompetensi[]" id="sertifikatKompetensi"></td>'+
                '<td><input type="text" class="form-control" name="mataKuliah[]" id="mataKuliah"></td>'+
                '<td><input type="text" class="form-control" name="kesesuaianBidang[]" id="kesesuaianBidang"></td>'+
                '<td><input type="text" class="form-control" name="matkulPSlain[]" id="matkulPSlain"></td>'+
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
    bootstrapValidate('#nidn', 'required:isian kosong')
    bootstrapValidate('#magister', 'required:isian kosong')
    bootstrapValidate('#doktor', 'required:isian kosong')
    bootstrapValidate('#keahlian', 'required:isian kosong')
    bootstrapValidate('#kesesuaian', 'required:isian kosong')
    bootstrapValidate('#jabatan', 'required:isian kosong')
    bootstrapValidate('#sertifikatPendidik', 'required:isian kosong')
    bootstrapValidate('#sertifikatKompetensi', 'required:isian kosong')
    bootstrapValidate('#mataKuliah', 'required:isian kosong')
    bootstrapValidate('#kesesuaianBidang', 'required:isian kosong')
    bootstrapValidate('#matkulPSlain', 'required:isian kosong')
</script>

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
