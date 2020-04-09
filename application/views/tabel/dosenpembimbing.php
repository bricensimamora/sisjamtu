<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Dosen Pembimbing Utama Tugas Akhir</h6></li>
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
												<th rowspan='3' style="text-align:center; padding-bottom:35px">Nama Dosen</th>
                                                <th colspan='8'>Jumlah Mahasiswa yang Dibimbing</th>
                                                <th rowspan='3'>Rata-rata Jumlah Bimbingan</th>
                                            </tr>
                                            <tr>
                                                <th colspan="4">pada PS yang Diakreditasi</th>
                                                <th colspan="4">pada PS Lain</th>
                                            </tr>
											<tr>
												<th>TS-2</th>
                                                <th>TS-1</th>
                                                <th>TS</th>
                                                <th>Rata-rata</th>
                                                <th>TS-2</th>
                                                <th>TS-1</th>
                                                <th>TS</th>
                                                <th>Rata-rata</th>
											</tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($pembimbing as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->namaDosen ?>
												</td>
												<td>
													<?php echo $data->jumlahMahasiswaTS2 ?>
												</td>
												<td>
													<?php echo $data->jumlahMahasiswaTS1 ?>
												</td>
												<td>
													<?php echo $data->jumlahMahasiswaTS ?>
												</td>
												<td>
													<?php echo $data->rerata ?>
												</td>
												<td>
													<?php echo $data->jumlahMahasiswaLainTS2 ?>
												</td>
												<td>
													<?php echo $data->jumlahMahasiswaLainTS1 ?>
												</td>
												<td>
													<?php echo $data->jumlahMahasiswaLainTS ?>
                                                </td>
                                                <td>
													<?php echo $data->rerataLain ?>
                                                </td>
                                                <td>
													<?php echo $data->rerataTotal ?>
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