<!-- Content Section -->
<div id="main-content" class="col-10">

<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Mahasiswa Asing</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<form action="<?= base_url('kuesioner/tabel_2b');?>" method="post">
    <div class="table-responsive">
        <table class="table">
        <thead style="text-align: center;">
            <tr>
                <th rowspan='2' style="text-align:center; padding-bottom:35px">Program Studi</th>
                <th colspan='3'>Jumlah Mahasiswa Aktif</th>
                <th colspan='3'>Jumlah Mahasiswa Asing Penuh Waktu (full-time)</th>
                <th colspan='3'>Jumlah Mahasiswa Asing Paruh Waktu (Part-time)</th>
                <th rowspan='2'>Aksi</th>
            </tr>
            <tr>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
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
                <td><input type="text" class="form-control" name="namaProdi[]" id="namaProdi"></td>
                <td><input type="number" min="0" class="form-control" name="aktifTS2[]" id="aktifTS2"></td>
                <td><input type="number" min="0" class="form-control" name="aktifTS1[]" id="aktifTS1"></td>
                <td><input type="number" min="0" class="form-control" name="aktifTS[]" id="aktifTS"></td>
                <td><input type="number" min="0" class="form-control" name="fullTS2[]" id="fullTS2"></td>
                <td><input type="number" min="0" class="form-control" name="fullTS1[]" id="fullTS1"></td>
                <td><input type="number" min="0" class="form-control" name="fullTS[]" id="fullTS"></td>
                <td><input type="number" min="0" class="form-control" name="partTS2[]" id="partTS2"></td>
                <td><input type="number" min="0" class="form-control" name="partTS1[]" id="partTS1"></td>
                <td><input type="number" min="0" class="form-control" name="partTS[]" id="partTS"></td>
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
                '<td><input type="text" class="form-control" name="namaProdi[]" id="namaProdi"></td>'+
                '<td><input type="number" min="0" class="form-control" name="aktifTS2[]" id="aktifTS2"></td>'+
                '<td><input type="number" min="0" class="form-control" name="aktifTS1[]" id="aktifTS1"></td>'+
                '<td><input type="number" min="0" class="form-control" name="aktifTS[]" id="aktifTS"></td>'+
                '<td><input type="number" min="0" class="form-control" name="fullTS2[]" id="fullTS2"></td>'+
                '<td><input type="number" min="0" class="form-control" name="fullTS1[]" id="fullTS1"></td>'+
                '<td><input type="number" min="0" class="form-control" name="fullTS[]" id="fullTS"></td>'+
                '<td><input type="number" min="0" class="form-control" name="partTS2[]" id="partTS2"></td>'+
                '<td><input type="number" min="0" class="form-control" name="partTS1[]" id="partTS1"></td>'+
                '<td><input type="number" min="0" class="form-control" name="partTS[]" id="partTS"></td>'+
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
