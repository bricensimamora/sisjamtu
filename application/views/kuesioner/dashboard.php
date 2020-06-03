<!-- Content Section -->
<div id="main-content" class="container">

<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<div id="data_diri" class="col-12">
    <div class="card">
        <h5 class="card-header">Informasi Pengisi</h5>
        <div class="card-body">
            <form action="" method="post">
            <div class="form-group row">
                <label for="bagian" class="col-sm-4 col-form-label">1. Anggota Staff/Bagian</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control-plaintext" id="bagian" name="bagian" value="<?= $this->session->userdata('data')['fullName'];?>" autocomplete="off" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">2. Nama</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data_pengisi['nama'];?>" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="telepon" class="col-sm-4 col-form-label">3. Nomor telepon</label>
                <div class="col-sm-8">
                    <input type="number" min="0" class="form-control" id="telepon" name="telepon" value="<?= $data_pengisi['noHp'];?>" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Simpan" id="simpanPengguna" name="simpanPengguna">
                    <button type="button" id="edit" class="btn btn-success">Edit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<div id="tabel_kosong" style="margin-top:12px;" class="col-12">
    <div class="card">
        <h5 class="card-header">Daftar tabel belum terisi</h5>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                <thead style="text-align: center;">
                    <tr>
                        <th style="width:50px">No</th>
                        <th>Nama tabel</th>
                        <th  style="width:70px">Aksi</th>
                    </tr>
                </thead>
                <tbody id="body_tabel_kosong">
                    <?php if(count($tabel_kosong) > 0) :?>
                    <?php $no1=1; foreach ($tabel_kosong as $tabel) : ?>
                    <tr>
                        <td style="width:50px"><?php echo $no1;$no1++;?></td>
                        <td><?= $tabel['judul'];?></td>
                        <td class="text-center"><a class="btn btn-primary" href="<?= base_url('kuesioner/t/'.$tabel['kode']);?>">isi</a></td>
                    </tr>
                    <?php endforeach;?>
                    <?php else:?>
                    <tr>
                        <td colspan="3" class="text-center">Tidak ada tabel yang kosong</td>
                    </tr>
                    <?php endif;?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="tabel_terisi" style="margin-top:12px;" class="col-12">
    <div class="card">
        <h5 class="card-header">Daftar tabel terisi</h5>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                <thead style="text-align: center;">
                    <tr>
                        <th style="width:50px">No</th>
                        <th>Nama tabel</th>
                    </tr>
                </thead>
                <tbody id="isian">
                    <?php if(count($tabel_terisi) > 0) :?>
                    <?php $no2=1;foreach ($tabel_terisi as $tabel) : ?>
                    <tr>
                        <td style="width:50px"><?php echo $no2; $no2++;?></td>
                        <td><?= $tabel['judul'];?></td>
                    </tr>
                    <?php endforeach;?>
                    <?php else:?>
                    <tr>
                        <td colspan="2" class="text-center">Tidak ada tabel yang terisi</td>
                    </tr>
                    <?php endif;?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(e) {
    if($("#nama").val() == ""){
        $("#simpanPengguna").removeAttr("hidden");
        $("#edit").attr("hidden","true");
    }else{
        $("#nama").attr("readonly", "true").addClass("form-control-plaintext").removeClass("form-control");
        $("#telepon").attr("readonly", "true").addClass("form-control-plaintext").removeClass("form-control");
        $("#simpanPengguna").attr("hidden","true");
        $("#edit").removeAttr("hidden");
    }

    $("#edit").click(function(e){
        $("#nama").removeAttr("readonly").addClass("form-control").removeClass("form-control-plaintext");
        $("#telepon").removeAttr("readonly").addClass("form-control").removeClass("form-control-plaintext");
        $(this).attr("hidden","true");
        $("#simpanPengguna").removeAttr("hidden");
    });
})
</script>
<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
