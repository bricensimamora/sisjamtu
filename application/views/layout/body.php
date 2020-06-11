<!--- Image Slider -->


<!--- Jumbotron -->


<!--- Welcome Section -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">SISTEM INFORMASI PENJAMINAN MUTU (SISJAMTU)</h1><hr>
        </div>
        <div class="col-8 offset-2">
            <form class="buatpemberitahuan" action="<?php echo base_url(). 'Pemberitahuan/buatpemberitahuan'; ?>" method="post">
                <h1>Buat Pemberitahuan</h1>
                <div class="item address">
                  <p>Judul Pemberitahuan:</p>
                  <div class="street">
                    <input class="street-item" type="text" name="judul" placeholder="Judul pemberitahuan . . ." />
                  </div>
                </div>
                <h4>Isi Pemberitahuan:</h4>
                <textarea rows="5" name="isi"></textarea>
                <small>Pemberitahuan yang dibuat akan ditampilkan dan dilihat oleh siapa saja yang mengakses halaman beranda.</small>
                <div class="btn-block">
                  <button type="submit">Send</button>
                </div>
              </form>
                <?php foreach ( array_reverse($pemberitahuan) as $data): ?>
                 <div class="jumbotron pemberitahuan">
                    <h3 style="color:blue;"><?php echo $data->judulArtikel ?></h3>
                    <small class="text-muted">Dibuat pada: <?php echo $data->tanggalArtikel ?></small>
                        <div class="container-fluid textpemberitahuan">
                        <p style="text-align:justify;"><?php echo $data->isiArtikel ?></p>
                        </div>
                        <div class="btn-block">
                        <form action="<?php echo base_url(). 'Pemberitahuan/hapuspemberitahuan'; ?>" method="post">
                          <input type="hidden" name="id" value="<?php echo $data->id;?>">
                            <div class="btn-block">
                              <button type="submit">HAPUS</button>
                            </div>
                        </form>
                        </div>
                 </div>
                <?php endforeach; ?>
        </div>
    </div>
</div>

<!--- Three Column Section -->


<!--- Two Column Section -->


<!--- Fixed background -->
<figure>
    <div class="fixed-wrap">
        <div id="fixed">
        </div>
    </div>
</figure>

<!--- Emoji Section -->

  
<!--- Meet the team -->


<!--- Cards -->


<!--- Two Column Section -->


<!--- Connect -->

