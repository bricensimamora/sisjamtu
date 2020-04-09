<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Kerjasama Penelitian</h6></li>
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
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Lembaga Mitra</th>
                                                <th colspan='3'>Tingkat</th>
                                                <th rowspan='2'>Judul Kerja Sama</th>
                                                <th rowspan='2'>Manfaat Bagi PS yg Diakreditasi</th>
                                                <th rowspan='2'>Waktu dan Durasi</th>
                                                <th rowspan='2'>Bukti Kerja Sama</th>
                                                <th rowspan='2'>Tahun Berakhirnya Kerja Sama</th>
											</tr>
											<tr>
												<th>Internasional</th>
												<th>Nasional</th>
                                                <th>Wilayah</th>
											</tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($penelitian as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->lembagaMitra ?>
												</td>
												<td>
													<?php echo $data->tingkatInternasional ?>
												</td>
												<td>
													<?php echo $data->tingkatNasional ?>
												</td>
												<td>
													<?php echo $data->tingkatWilayah ?>
												</td>
												<td>
													<?php echo $data->judulKegiatanKerjasama ?>
												</td>
												<td>
													<?php echo $data->manfaat ?>
												</td>
												<td>
													<?php echo $data->waktuDurasi ?>
												</td>
												<td>
													<?php echo $data->buktiKerjasama ?>
                                                </td>
                                                <td>
													<?php echo $data->tahunBerakhirKerjasama ?>
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