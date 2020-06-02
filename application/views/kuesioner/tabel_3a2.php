<!-- Content Section -->
<div id="main-content" class="col-10">

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
                <th rowspan='3' style="text-align:center; padding-bottom:35px">Nama Dosen</th>
                <th colspan='6'>Jumlah Mahasiswa yang Dibimbing</th>
                <th rowspan='3'>Aksi</th>
            </tr>
            <tr>
                <th colspan="3">pada PS yang Diakreditasi</th>
                <th colspan="3">pada PS Lain</th>
            </tr>
            <tr>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
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
