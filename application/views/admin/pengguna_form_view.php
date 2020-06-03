<?php
    if (!isset($pengguna)) {
        $pengguna = [
            "fullName" => "",
            "email" => "",
            "role" => 0
        ];
    }
?>

<!-- Content Section -->
<div class="col-10">

<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Data Pengguna</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<!-- Table Section -->
    <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <div class="card">  
        <div class="card-body">
            <h5 class="card-title text-center" style="padding-bottom:0.5em;">Isikan Data</h5>
            <!-- <p class="card-text">Daftar pengguna yang dapat login menggunakan token untuk mengisi tabel.</p> -->
            <form id="formPengguna" action method="post">
                <div class="form-group row">
                    <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="inputNama" id="inputNama" value="<?= $pengguna['fullName']; ?>" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="inputEmail" id="inputEmail" value="<?= $pengguna['email']; ?>" autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputRole" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="inputRole" id="inputRole">
                            <option <?php if($pengguna['role'] == 3){ echo 'selected'; }?> value="1">Pengamat</option>
                            <option <?php if($pengguna['role'] == 4){ echo 'selected'; }?> value="2">Token</option>
                        </select>
                    </div>
                </div>
                <div id="formPassword" class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="inputPassword" id="inputPassword">
                    </div>
                </div>
                <div id="formKonfirmPassword" class="form-group row">
                    <label for="inputKonfirmPassword" class="col-sm-2 col-form-label">Konfirm Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="inputKonfirmPassword" id="inputKonfirmPassword">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-primary" value="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
<script>
$(document).ready(function(e){
    if($("#inputRole").val() == 2){
        $("#formPassword").attr("hidden","true");
        $("#formKonfirmPassword").attr("hidden","true");
    }

    $("#inputRole").change(function(e){
        if($(this).val() == 1){
            $("#formPassword").removeAttr("hidden");
            $("#formKonfirmPassword").removeAttr("hidden");
        }
        if($(this).val() == 2){
            $("#formPassword").attr("hidden","true");
            $("#formKonfirmPassword").attr("hidden","true");
        }
    })

    // $( "#formPengguna" ).on( "submit", function() { 
    //     var invalid = false;
    //     $(this).find( 'input[type!="hidden"]' ).each(function () {
    //         if ( !$(this).val() ) { invalid = true; return false; }
    //     });
    //     if ( invalid ) { alert("Ada kolom yang kosong"); return false; }
    // });
    
});

</script>

<!-- End Table Section -->

<!-- End Content Section -->
</div>

</div>
<!-- End Main Content -->
