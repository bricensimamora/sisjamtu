<!-- Content Section -->
<div class="col-10">

<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Kelola Pengguna</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

    <div class="col-12">
        <a href="<?= base_url("admin/pengguna/tambah"); ?>" class="btn btn-success">Tambah Pengguna</a>
    </div>

<!-- Table Section -->
    <div class="card">  
        <div class="card-body">
            <h5 class="card-title text-center" style="padding-bottom:0.5em;">Daftar Pengguna</h5>
            <!-- <p class="card-text">Daftar pengguna yang dapat login menggunakan token untuk mengisi tabel.</p> -->
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach ($users as $user) :?>
                    <tr>
                        <td><?= $i++;?></td>
                        <td><?= $user["name"];?></td>
                        <td><?= $user["email"];?></td>
                        <td><?= $user["level"];?></td>
                        <td><?= $user["status"];?></td>
                        <td>
                            <a href="<?= base_url('admin/pengguna/edit/'.$user["id"]); ?>" title="Edit" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                            <?php if ($user["level"] != "superadmin") : ?>
                            <a href="<?= base_url('admin/pengguna/delete/'.$user["id"]);?>" title="Hapus" class="btn btn-secondary btn-sm"><i class="fa fa-trash"></i></a>
                            <?php endif; ?>
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
