<!-- Content Section -->
<div id="main-content" class="container-fluid">
<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dosen Industri/Praktisi</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<form action="<?= base_url('kuesioner/tabel_3a5');?>" method="post">
    
<div class="table-responsive">
        <table class="table">
        <thead style="text-align: center;">
            <tr>
                <th style="text-align:center;">Nama Dosen Perusahaan/Industri</th>
                <th>NIDN/NIDK</th>
                <th>Perusahaan/Industri</th>
                <th>Pendidikan Tertinggi</th>
                <th>Bidang Keahlian</th>
                <th>Sertifikat Profesi/Kompetensi</th>
                <th>Matakuliah yang Diampu</th>
                <th>Bobot Kredit (sks)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="isian">
            <tr>
                <td><input type="text" class="form-control" name="nama[]" id="nama" placeholder="Nama Dosen"></td>
                <td><input type="text" class="form-control" name="nidn[]" id="nidn"></td>
                <td><input type="text" class="form-control" name="perusahaan[]" id="perusahaan"></td>
                <td><input type="text" class="form-control" name="pendidikan[]" id="pendidikan"></td>
                <td><input type="text" class="form-control" name="keahlian[]" id="keahlian"></td>
                <td><input type="text" class="form-control" name="sertifikatProfesi[]" id="sertifikatProfesi"></td>
                <td><input type="text" class="form-control" name="matakuliah[]" id="matakuliah"></td>
                <td><input type="text" class="form-control" name="sks[]" id="sks"></td>
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
                '<td><input type="text" class="form-control" name="nidn[]" id="nidn"></td>'+
                '<td><input type="text" class="form-control" name="perusahaan[]" id="perusahaan"></td>'+
                '<td><input type="text" class="form-control" name="pendidikan[]" id="pendidikan"></td>'+
                '<td><input type="text" class="form-control" name="keahlian[]" id="keahlian"></td>'+
                '<td><input type="text" class="form-control" name="sertifikatProfesi[]" id="sertifikatProfesi"></td>'+
                '<td><input type="text" class="form-control" name="matakuliah[]" id="matakuliah"></td>'+
                '<td><input type="text" class="form-control" name="sks[]" id="sks"></td>'+
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
