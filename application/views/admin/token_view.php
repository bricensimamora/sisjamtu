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
            <form action method="POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputNama">Nama Unit</label>
                    <select name="inputName" class="form-control">
                        <option selected>Choose...</option>
                        <?php foreach ($listUnit as $unit) : ?>
                        <option value="<?= $unit['id']; ?>"><?= $unit['fullName']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputTabel">Tabel</label>
                    <select name="inputTabel" class="form-control">
                        <option selected>Choose...</option>
                        <?php foreach ($listTabel as $tabel) : ?>
                        <option value="<?= $tabel['id']; ?>"><?= $tabel['kode']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputKadaluarsa">Tanggal Kadaluarsa</label>
                    <input type="Kadaluarsa" class="form-control" name="inputKadaluarsa" id="inputKadaluarsa">
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
                    <?php $i=1; foreach ($tokens as $token) : ?>
                    <tr>
                        <td><?= $i++;?></td>
                        <td><?= $token['name'];?></td>
                        <td><?= $token['token'];?></td>
                        <td><?= $token['expDate'];?></td>
                        <td><?= $token['tabels'];?></td>
                        <td><?= $token['status'];?></td>
                        <td>
                            <a href="#" title="Refresh token" class="btn btn-secondary btn-sm"><i class="fa fa-sync"></i></a>
                            <a href="#" title="Kirim ulang token" class="btn btn-secondary btn-sm"><i class="fa fa-envelope"></i></a>
                            <a href="#" title="Edit" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="#" title="Hapus" class="btn btn-secondary btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>  
        </div>
    </div>

<!-- End Table Section -->

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
