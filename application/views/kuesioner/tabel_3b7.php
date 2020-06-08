<!-- Content Section -->
<div id="main-content" class="container-fluid">
<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Produk/Jasa DTPS yang Diadopsi oleh Industri/Masyarakat</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<form action="<?= base_url('kuesioner/tabel_3b7');?>" method="post">
    
    <div class="table-responsive">
        <table class="table">
        <thead style="text-align: center;">
            <tr>
                <th class="align-middle">Nama Dosen</th>
                <th class="align-middle">Nama Produk/Jasa</th>
                <th class="align-middle">Deskripsi Produk/Jasa</th>
                <th class="align-middle">Bukti</th>
                <th class="align-middle" style="width:56px">Aksi</th>
            </tr>
        </thead>
        <tbody id="isian">
            <tr>
                <td><input type="text" class="form-control" name="nama[]" id="nama" placeholder="Nama"></td>
                <td><input type="text" class="form-control" name="produk[]" id="produk" placeholder="Produk"></td>
                <td><input type="text" class="form-control" name="deskripsi[]" id="deskripsi" placeholder="deskripsi"></td>
                <td><input type="text" class="form-control" name="bukti[]" id="bukti" placeholder="Bukti"></td>
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
                '<td><input type="text" class="form-control" name="nama[]" id="nama" placeholder="Nama"></td>'+
                '<td><input type="text" class="form-control" name="produk[]" id="produk" placeholder="Produk"></td>'+
                '<td><input type="text" class="form-control" name="deskripsi[]" id="deskripsi" placeholder="Deskripsi"></td>'+
                '<td><input type="text" class="form-control" name="bukti[]" id="bukti" placeholder="Bukti"></td>'+
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
