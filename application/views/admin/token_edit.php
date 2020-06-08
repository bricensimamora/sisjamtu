<!-- Content Section -->
<div id="main-content" class="container" style="padding-top:20px;margin-top:20px;">

<!-- Nav Breadcrumb -->
    <nav aria-label="breadcrumb" syle="margin-top:unset;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url('admin');?>">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kelola Token</li>
        </ol> 
    </nav>
<!-- End Nav Breadcrumb -->

<!-- Form section -->
    <div class="card" id="inputToken" style="padding-top:20px;margin-top:unset;min-height:unset;">
        <div class="card-body">
        <form id="tokenForm" action method="POST">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputNama">Nama Unit</label>
                    <input type="text" readonly class="form-control-plaintext" name="inputNama" id="inputNama" autocomplete="off" value="<?= $nama;?>">
                </div>
                <div class="form-group col-md-7">
                    <label for="inputTabel">Tabel</label>
                    <select name="inputTabel[]" id="inputTabel" class="form-control selectpicker" multiple="multiple" data-live-search="true">
                        <?php foreach ($tabels as $tabel) : ?>
                        <option <?php if ($tabel['id_token'] != 0) { echo 'selected'; } ?> value="<?= $tabel['id']; ?>"><?= $tabel['id']; ?>. <?= $tabel['judul']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputKadaluarsa">Tanggal Kadaluarsa</label>
                    <input type="Kadaluarsa" class="form-control" name="inputKadaluarsa" id="inputKadaluarsa" autocomplete="off">
                </div>
            </div>
            <input type="text" hidden name="inputHidden" id="inputHidden" >
            <button type="submit" id="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
    </div>
<!-- End Form section -->

<script type="text/javascript">
    // Data Picker Initialization
    $( function() {
        $("#inputTabel").selectpicker();
        $("#inputKadaluarsa").datepicker({
            dateFormat: "yy-mm-dd"
        }).datepicker( "setDate", "<?= $tanggal;?>" );
    });

    $('#tokenForm').submit(function(e){
        var notSelected = Array();
        $('#inputTabel > option').each(function() {
            if($(this).is(':selected')){return;}
            notSelected.push($(this).val());
        });
        $('#inputHidden').val(JSON.stringify(notSelected));
    });
</script>

<!-- End Content Section -->
</div>

</div>

<!-- End Main Content -->
