<!-- Content Section -->
<div id="main-content" class="col-10">

<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Pengakuan/Rekognisi DTPS</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<form action="<?= base_url('kuesioner/tabel_3b1');?>" method="post">
    
<div class="table-responsive">
        <table class="table">
        <thead style="text-align: center;">
            <tr>
                <th style="text-align:center;">Nama Dosen</th>
                <th>Bidang Keahlian</th>
                <th>Rekognisi dan Bukti Pendukung</th>
                <th>Tingkat</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="isian">
            <tr>
                <td><input type="text" class="form-control" name="nama[]" id="nama" placeholder="Nama Dosen"></td>
                <td><input type="text" class="form-control" name="keahlian[]" id="keahlian"></td>
                <td><input type="text" class="form-control" name="rekognisi[]" id="rekognisi"></td>
                <td><select class="form-control" name="tingkat[]" id="tingkat">
                        <option value="1">Wilayah</option>
                        <option value="2">Nasional</option>
                        <option value="3">Internasional</option>
                        <option selected hidden="true">pilih</option>
                    </select></td>
                <td><input type="number" min="1990" class="form-control" name="tahun[]" id="tahun"></td>
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
                '<td><input type="text" class="form-control" name="keahlian[]" id="keahlian"></td>'+
                '<td><input type="text" class="form-control" name="rekognisi[]" id="rekognisi"></td>'+
                '<td><select class="form-control" name="tingkat[]" id="tingkat">'+
                        '<option value="1">Wilayah</option>'+
                        '<option value="2">Nasional</option>'+
                        '<option value="3">Internasional</option>'+
                        '<option selected hidden="true">pilih</option>'+
                    '</select></td>'+
                '<td><input type="number" min="1990" class="form-control" name="tahun[]" id="tahun"></td>'+
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
