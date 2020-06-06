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
                <th style="text-align:center; padding-bottom:35px">Nama Dosen</th>
                <th>NIDN/NIDK</th>
                <th>Pendidikan Pasca Sarjana</th>
                <th>Bidang Keahlian</th>
                <th>Jabatan Akademik</th>
                <th>Sertifikat Pendidik Profesional</th>
                <th>Sertifikat Kompetensi</th>
                <th>Matakuliah yang Diampu</th>
                <th>Kesesuaian Bidang Keahlian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="isian">
            <tr>
                <td><input type="text" class="form-control" name="nama[]" id="nama" placeholder="Masukkan Nama Dosen"></td>
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
                '<td><input type="text" class="form-control" name="nama[]" id="nama" placeholder="Masukkan Nama Dosen"></td>'+
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
                '<td><a href="#" id="remove">X</a></td>'+
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
