<!-- Content Section -->
<div id="main-content" class="container-fluid">
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
                <th rowspan='2' class="align-middle">Program Studi</th>
                <th colspan='3' class="align-middle">Jumlah Mahasiswa Aktif</th>
                <th colspan='3' class="align-middle">Jumlah Mahasiswa Asing Penuh Waktu (full-time)</th>
                <th colspan='3' class="align-middle">Jumlah Mahasiswa Asing Paruh Waktu (Part-time)</th>
                <th rowspan='2' class="align-middle" style="width:56px">Aksi</th>
            </tr>
            <tr>
                <th style="width:110px">TS-2</th>
                <th style="width:110px">TS-1</th>
                <th style="width:110px">TS</th>
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
        var maxRows = 10;
        var x = 1;

        //Add baris ke formulir
        $("#add").click(function(e){
            if(x <= maxRows){
                $("#isian").append(make_html(x));
                bootstrapValidate('#namaProdi'+x, 'required:isian kosong');
                bootstrapValidate('#aktifTS2'+x, 'required:isian kosong');
                bootstrapValidate('#aktifTS1'+x, 'required:isian kosong');
                bootstrapValidate('#aktifTS'+x, 'required:isian kosong');
                bootstrapValidate('#fullTS2'+x, 'required:isian kosong');
                bootstrapValidate('#fullTS1'+x, 'required:isian kosong');
                bootstrapValidate('#fullTS'+x, 'required:isian kosong');
                bootstrapValidate('#partTS2'+x, 'required:isian kosong');
                bootstrapValidate('#partTS1'+x, 'required:isian kosong');
                bootstrapValidate('#partTS'+x, 'required:isian kosong');
                x++;
            }
        });

        //Hapus baris dari formulir
        $("#isian").on('click','#remove',function(e){
            $(this).closest('tr').remove();
            x--;
        })
    });

    function make_html(id){
        return  '<tr>'+
                    '<td><input type="text" class="form-control" name="namaProdi[]" id="namaProdi'+id+'"></td>'+
                    '<td><input type="number" min="0" class="form-control" name="aktifTS2[]" id="aktifTS2'+id+'"></td>'+
                    '<td><input type="number" min="0" class="form-control" name="aktifTS1[]" id="aktifTS1'+id+'"></td>'+
                    '<td><input type="number" min="0" class="form-control" name="aktifTS[]" id="aktifTS'+id+'"></td>'+
                    '<td><input type="number" min="0" class="form-control" name="fullTS2[]" id="fullTS2'+id+'"></td>'+
                    '<td><input type="number" min="0" class="form-control" name="fullTS1[]" id="fullTS1'+id+'"></td>'+
                    '<td><input type="number" min="0" class="form-control" name="fullTS[]" id="fullTS'+id+'"></td>'+
                    '<td><input type="number" min="0" class="form-control" name="partTS2[]" id="partTS2'+id+'"></td>'+
                    '<td><input type="number" min="0" class="form-control" name="partTS1[]" id="partTS1'+id+'"></td>'+
                    '<td><input type="number" min="0" class="form-control" name="partTS[]" id="partTS'+id+'"></td>'+
                    '<td class="text-center"><a href="#" id="remove"><i class="fas fa-trash-alt" style="color:red;"></i></a></td>'+
                '</tr>';
    }

    bootstrapValidate('#namaProdi', 'required:isian kosong');
    bootstrapValidate('#aktifTS2', 'required:isian kosong');
    bootstrapValidate('#aktifTS1', 'required:isian kosong');
    bootstrapValidate('#aktifTS', 'required:isian kosong');
    bootstrapValidate('#fullTS2', 'required:isian kosong');
    bootstrapValidate('#fullTS1', 'required:isian kosong');
    bootstrapValidate('#fullTS', 'required:isian kosong');
    bootstrapValidate('#partTS2', 'required:isian kosong');
    bootstrapValidate('#partTS1', 'required:isian kosong');
    bootstrapValidate('#partTS', 'required:isian kosong');
</script>

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
