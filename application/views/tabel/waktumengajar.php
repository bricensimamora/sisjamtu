<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi</h6></li>
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
												<th rowspan='3' style="text-align:center; padding-bottom:105px">Nama Dosen (DT)</th>
                                                <th rowspan='3' style="text-align:center; padding-bottom:128px">DTPS</th>
                                                <th colspan='6'>Ekuivalen Waktu Mengajar Penuh (EWMP)</th>
                                                <th rowspan='3' style="text-align:center; padding-bottom:105px">Jumlah (sks)</th>
                                                <th rowspan='3' style="text-align:center; padding-bottom:95px">Rata-rata per Semester (sks)</th>
                                            </tr>
                                            <tr>
                                                <th colspan="3">Pendidikan: Pembelajaran dan Pembimbingan</th>
                                                <th rowspan="2" style="text-align:center; padding-bottom:128px">Penelitian</th>
                                                <th rowspan="2" style="text-align:center; padding-bottom:128px">PkM</th>
                                                <th rowspan="2" style="text-align:center; padding-bottom:85px">Tugas Tambahan dan/atau Penunjang</th>
                                            </tr>
											<tr>
												<th>PS yang Diakrediatasi</th>
                                                <th>PS Lain di dalam PT</th>
                                                <th>PS Lain di luar PT</th>
											</tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($waktumengajar as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->namaDosen ?>
												</td>
												<td>
													<?php echo $data->dtps ?>
												</td>
												<td>
													<?php echo $data->psAkreditasi ?>
												</td>
												<td>
													<?php echo $data->psLain ?>
												</td>
												<td>
													<?php echo $data->psLainLuar ?>
												</td>
												<td>
													<?php echo $data->penelitian ?>
												</td>
												<td>
													<?php echo $data->pkm ?>
												</td>
												<td>
													<?php echo $data->tugasTambahan ?>
                                                </td>
                                                <td>
													<?php echo $data->jumlah ?>
                                                </td>
                                                <td>
													<?php echo $data->rerata ?>
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