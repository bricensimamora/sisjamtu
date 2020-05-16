<!-- Content Section -->
<div class="col-10">

<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Tambah Pengguna</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<!-- Table Section -->
    <div class="card">  
        <div class="card-body">
            <h5 class="card-title text-center" style="padding-bottom:0.5em;">Isikan Data</h5>
            <!-- <p class="card-text">Daftar pengguna yang dapat login menggunakan token untuk mengisi tabel.</p> -->
            <form action method="post">
                <div class="form-group row">
                    <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="inputNama" id="inputNama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="inputEmail" id="inputEmail">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputRole" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="inputRole" id="inputRole">
                            <option value="1">Pengamat</option>
                            <option value="2">Token</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="inputPassword" id="inputPassword">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputKonfirmPassword" class="col-sm-2 col-form-label">Konfirm Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputKonfirmPassword">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<!-- End Table Section -->

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
