<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Seleksi Mahasiswa</h6></li>
					</ul>
				</div>
			</nav>

			<div id="wrapper">

				<div id="content-wrapper">

					<div class="container-fluid">

						<!-- DataTables -->
						<div class="card mb-3">
							<div class="card-header">
								
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
										<thead style="text-align: center;">
											<tr>
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Tahun Akademik</th>
                                                <th rowspan='2'>Daya Tampung</th>
                                                <th colspan='2'>Jumlah Calon Mahasiswa</th>
                                                <th colspan='3'>Jumlah Mahasiswa Baru</th>
                                                <th colspan='3'>Jumlah Mahasiswa Aktif</th>
											</tr>
											<tr>
												<th>Pendaftar</th>
												<th>Lulus Seleksi</th>
                                                <th>Reguler</th>
                                                <th>Transfer</th>
												<th>Reguler</th>
                                                <th>Transfer</th>
											</tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($seleksimhs as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->tahunAkademik ?>
												</td>
												<td>
													<?php echo $data->dayaTampung ?>
												</td>
												<td>
													<?php echo $data->pendaftar ?>
												</td>
												<td>
													<?php echo $data->lulusSeleksi ?>
												</td>
												<td>
													<?php echo $data->regulerMahasiswaBaru ?>
												</td>
												<td>
													<?php echo $data->transferMahasiswaBaru ?>
												</td>
												<td>
													<?php echo $data->regulerMahasiswaAktif ?>
												</td>
												<td>
													<?php echo $data->transferMahasiswaAktif ?>
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>

					</div>
					<!-- /.container-fluid -->


					<!-- Sticky Footer -->

				</div>
				<!-- /.content-wrapper -->

			</div>
			<!-- /#wrapper -->
		</div> 
	</div>
</body>