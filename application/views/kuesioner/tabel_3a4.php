<!-- Content Section -->
<div id="main-content" class="container-fluid">
<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dosen Tidak Tetap</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<form action="<?= base_url('kuesioner/tabel_3a4');?>" method="post">
    
<div class="table-responsive">
        <table class="table">
        <thead style="text-align: center;">
            <tr>
                <th class="align-middle" style="min-width:190px">Nama Dosen</th>
                <th class="align-middle" style="min-width:150px">NIDN/NIDK</th>
                <th class="align-middle">Pendidikan Pasca Sarjana</th>
                <th class="align-middle">Bidang Keahlian</th>
                <th class="align-middle">Jabatan Akademik</th>
                <th class="align-middle">Sertifikat Pendidik Profesional</th>
                <th class="align-middle">Sertifikat Kompetensi</th>
                <th class="align-middle">Matakuliah yang Diampu</th>
                <th class="align-middle">Kesesuaian Bidang Keahlian</th>
                <th class="align-middle" style="width:56px">Aksi</th>
            </tr>
        </thead>
        <tbody id="isian">
            <tr>
                <td><input type="text" class="form-control" name="nama[]" id="nama" placeholder="Masukkan Nama"></td>
                <td><input type="text" class="form-control" name="nidn[]" id="nidn"></td>
                <td><input type="text" class="form-control" name="pendidikan[]" id="pendidikan"></td>
                <td><input type="text" class="form-control" name="keahlian[]" id="keahlian"></td>
                <td><input type="text" class="form-control" name="jabatan[]" id="jabatan"></td>
                <td><input type="text" class="form-control" name="sertifikatPendidik[]" id="sertifikatPendidik"></td>
                <td><input type="text" class="form-control" name="sertifikatKompetensi[]" id="sertifikatKompetensi"></td>
                <td><input type="text" class="form-control" name="mataKuliah[]" id="mataKuliah"></td>
                <td><select class="form-control" name="kesesuaian[]" id="kesesuaian">
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                        <option selected hidden="true">pilih</option>
                    </select></td>
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
                '<td><input type="text" class="form-control" name="pendidikan[]" id="pendidikan"></td>'+
                '<td><input type="text" class="form-control" name="keahlian[]" id="keahlian"></td>'+
                '<td><input type="text" class="form-control" name="jabatan[]" id="jabatan"></td>'+
                '<td><input type="text" class="form-control" name="sertifikatPendidik[]" id="sertifikatPendidik"></td>'+
                '<td><input type="text" class="form-control" name="sertifikatKompetensi[]" id="sertifikatKompetensi"></td>'+
                '<td><input type="text" class="form-control" name="mataKuliah[]" id="mataKuliah"></td>'+
                '<td><select class="form-control" name="kesesuaian[]" id="kesesuaian">'+
                        '<option value="Ya">Ya</option>'+
                        '<option value="Tidak">Tidak</option>'+
                        '<option selected hidden="true">pilih</option>'+
                    '</select></td>'+
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
</script>

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
