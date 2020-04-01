<!-- Content Section -->
<div class="col-10">

<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Kelola Token</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<!-- Form section -->
    <div class="card" id="inputToken">
        <div class="card-body">
            <form action="POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputNama">Nama Unit</label>
                    <input type="Nama" class="form-control" id="inputNama">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputTabel">Tabel</label>
                    <select id="inputTabel" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputKadaluarsa">Tanggal Kadaluarsa</label>
                    <input type="Kadaluarsa" class="form-control" id="inputKadaluarsa">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
    </div>
<!-- End Form section -->

<script type="text/javascript">
    // Data Picker Initialization
    $( function() {
        $( "#inputKadaluarsa" ).datepicker();
    });
</script>

<!-- Table Section -->
    <div class="card">  
        <div class="card-body">
            <h5 class="card-title text-center" style="padding-bottom:0.5em;">Daftar Pengguna Token</h5>
            <!-- <p class="card-text">Daftar pengguna yang dapat login menggunakan token untuk mengisi tabel.</p> -->
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Token</th>
                        <th>Kadaluarsa</th>
                        <th>Tabel</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>BAAK</td>
                        <td>AK123J12</td>
                        <td>17 Februari 2020</td>
                        <td>1,2,3</td>
                        <td>submitted</td>
                        <td>
                            <a href="#" title="Refresh token" class="btn btn-secondary btn-sm"><i class="fa fa-sync"></i></a>
                            <a href="#" title="Kirim ulang token" class="btn btn-secondary btn-sm"><i class="fa fa-envelope"></i></a>
                            <a href="#" title="Edit" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="#" title="Hapus" class="btn btn-secondary btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>BAU</td>
                        <td>AK123J13</td>
                        <td>17 Februari 2020</td>
                        <td>4,5,6</td>
                        <td>in progress</td>
                        <td>
                        <a href="#" title="Refresh token" class="btn btn-secondary btn-sm"><i class="fa fa-sync"></i></a>
                            <a href="#" title="Kirim ulang token" class="btn btn-secondary btn-sm"><i class="fa fa-envelope"></i></a>
                            <a href="#" title="Edit" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="#" title="Hapus" class="btn btn-secondary btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>  
        </div>
    </div>

<!-- End Table Section -->

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
