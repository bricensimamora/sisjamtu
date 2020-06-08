<!-- Content Section -->
<div id="main-content" class="container-fluid">
<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dosen Pembimbing Utama Tugas Akhir</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<form action="<?= base_url('kuesioner/tabel_3a2');?>" method="post">
    
<div class="table-responsive">
        <table class="table">
        <thead style="text-align: center;">
            <tr>
                <th rowspan='3' class="align-middle">Nama Dosen</th>
                <th colspan='6' class="align-middle">Jumlah Mahasiswa yang Dibimbing</th>
                <th rowspan='3' class="align-middle" style="width:56px">Aksi</th>
            </tr>
            <tr>
                <th colspan="3" class="align-middle">pada PS yang Diakreditasi</th>
                <th colspan="3" class="align-middle">pada PS Lain</th>
            </tr>
            <tr>
                <th style="width:110px">TS-2</th>
                <th style="width:110px">TS-1</th>
                <th style="width:110px">TS</th>
                <th style="width:110px">TS-2</th>
                <th style="width:110px">TS-1</th>
                <th style="width:110px">TS</th>
            </tr>
        </thead>
        <tbody id="isian">
            <tr>
                <td><input type="text" class="form-control" name="nama[]" id="nama" placeholder="Masukkan Nama Dosen"></td>
                <td><input type="number" min="0" class="form-control" name="psTS2[]" id="psTS2"></td>
                <td><input type="number" min="0" class="form-control" name="psTS1[]" id="psTS1"></td>
                <td><input type="number" min="0" class="form-control" name="psTS[]" id="psTS"></td>
                <td><input type="number" min="0" class="form-control" name="lainTS2[]" id="lainTS2"></td>
                <td><input type="number" min="0" class="form-control" name="lainTS1[]" id="lainTS1"></td>
                <td><input type="number" min="0" class="form-control" name="lainTS[]" id="lainTS"></td>
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
                '<td><input type="number" min="0" class="form-control" name="psTS2[]" id="psTS2"></td>'+
                '<td><input type="number" min="0" class="form-control" name="psTS1[]" id="psTS1"></td>'+
                '<td><input type="number" min="0" class="form-control" name="psTS[]" id="psTS"></td>'+
                '<td><input type="number" min="0" class="form-control" name="lainTS2[]" id="lainTS2"></td>'+
                '<td><input type="number" min="0" class="form-control" name="lainTS1[]" id="lainTS1"></td>'+
                '<td><input type="number" min="0" class="form-control" name="lainTS[]" id="lainTS"></td>'+
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
    bootstrapValidate('#psTS2', 'required:isian kosong')
    bootstrapValidate('#psTS1', 'required:isian kosong')
    bootstrapValidate('#psTS', 'required:isian kosong')
    bootstrapValidate('#lainTS2', 'required:isian kosong')
    bootstrapValidate('#lainTS1', 'required:isian kosong')
    bootstrapValidate('#lainTS', 'required:isian kosong')
</script>

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
