<!-- Content Section -->
<div id="main-content" class="container-fluid">
<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Daftar Program Studi di Unit Pengelola Program Studi</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<form action="<?= base_url("kuesioner/tabel_ps"); ?>" method="post">
    
    <div class="table-responsive">
        <table class="table">
        <thead style="text-align: center;">
            <tr>
                <th rowspan='2' style="text-align:center; padding-bottom:35px">Jenis Prodi</th>
                <th rowspan='2'style="text-align:center; padding-bottom:35px">Nama Prodi</th>
                <th colspan='3'>Akreditasi</th>
                <th rowspan='2'style="text-align:center; padding-bottom:35px">Jumlah Mahasiswa</th>
                <th rowspan='2'style="text-align:center; padding-bottom:35px">Aksi</th>										
            </tr>
            <tr>
                <th>Status</th>
                <th>Tanggal SK</th>
                <th>Tanggal Kadaluarsa</th>
            </tr>
        </thead>
        <tbody id="isian">
            <tr>
                <td><input type="text" class="form-control" name="jenisProdi[]" id="jenisProdi"></td>
                <td><input type="text" class="form-control" name="namaProdi[]" id="namaProdi"></td>
                <td>
                    <select class="form-control" name="status[]" id="status">
                        <option value="aktif">aktif</option>
                        <option value="nonaktif">nonaktif</option>
                        <option selected hidden="true">pilih</option>
                    </select>
                </td>
                <td><input type="date" class="form-control" name="tanggalSK[]" id="tanggalSK"></td>
                <td><input type="date" class="form-control" name="tanggalExp[]" id="tanggalExp"></td>
                <td><input type="text" class="form-control" name="jumlahMhs[]" id="jumlahMhs"></td>
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
                '<td><input type="text" class="form-control" name="jenisProdi[]" id="moreJenisProdi"></td>'+
                '<td><input type="text" class="form-control" name="namaProdi[]" id="moreNamaProdi"></td>'+
                '<td>'+
                    '<select class="form-control" name="status[]" id="moreStatus">'+
                        '<option value="aktif">aktif</option>'+
                        '<option value="nonaktif">nonaktif</option>'+
                        '<option selected hidden="true">pilih</option>'+
                    '</select>'+
                '</td>'+
                '<td><input type="date" class="form-control" name="tanggalSK[]" id="moreTanggalSK"></td>'+
                '<td><input type="date" class="form-control" name="tanggalExp[]" id="moreTanggalExp"></td>'+
                '<td><input type="text" class="form-control" name="jumlahMhs[]" id="moreJumlahMhs"></td>'+
                '<td><a href="#" id="remove">X</a></td>'+
            '</tr>';
        var maxRows = 5;
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
