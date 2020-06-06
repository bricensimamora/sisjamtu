<!-- Content Section -->
<div id="main-content" class="container-fluid">
<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Kerjasama Tridharma - Pengabdian kepada Masyarakat</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<form action="<?= base_url('kuesioner/tabel_1_3');?>" method="post">

    <div class="table-responsive">
        <table class="table">
        <thead style="text-align: center;">
            <tr>
                <th style="text-align:center; padding-bottom:35px">Lembaga Mitra</th>
                <th>Tingkat</th>
                <th>Judul Kerja Sama</th>
                <th>Manfaat Bagi PS yg Diakreditasi</th>
                <th>Waktu dan Durasi</th>
                <th>Bukti Kerja Sama</th>
                <th>Tahun Berakhirnya Kerja Sama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="isian">
            <tr>
                <td><input type="text" class="form-control" name="namaMitra[]" id="namaMitra"></td>
                <td>
                    <select class="form-control" name="tingkat[]" id="tingkat">
                        <option value="1">Internasional</option>
                        <option value="2">Nasional</option>
                        <option value="3">Wilayah</option>
                        <option selected hidden="true">pilih</option>
                    </select>
                </td>
                <td><input type="text" class="form-control" name="judul[]" id="judul"></td>
                <td><input type="text" class="form-control" name="manfaat[]" id="manfaat"></td>
                <td><input type="text" class="form-control" name="durasi[]" id="durasi"></td>
                <td><input type="text" class="form-control" name="bukti[]" id="bukti"></td>
                <td><input type="text" class="form-control" name="tahun[]" id="tahun"></td>
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
                '<td><input type="text" class="form-control" name="namaMitra[]" id="namaMitra"></td>'+
                '<td>'+
                    '<select class="form-control" name="tingkat[]" id="tingkat">'+
                        '<option value="1">Internasional</option>'+
                        '<option value="2">Nasional</option>'+
                        '<option value="3">Wilayah</option>'+
                        '<option selected hidden="true">pilih</option>'+
                    '</select>'+
                '</td>'+
                '<td><input type="text" class="form-control" name="judul[]" id="judul"></td>'+
                '<td><input type="text" class="form-control" name="manfaat[]" id="manfaat"></td>'+
                '<td><input type="text" class="form-control" name="durasi[]" id="durasi"></td>'+
                '<td><input type="text" class="form-control" name="bukti[]" id="bukti"></td>'+
                '<td><input type="text" class="form-control" name="tahun[]" id="tahun"></td>'+
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
