<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Prestasi Non-akademik Mahasiswa</h6></li>
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
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Nama Kegiatan</th>
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Waktu Perolehan</th>	
                                                <th colspan='3' style="text-align:center; padding-bottom:35px">Tingkat</th>
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Prestasi yang Dicapai</th>		
                                            </tr>
                                            <tr>
                                                <th>Lokal/Wilayah</th>
                                                <th>Nasional</th>
                                                <th>Internasional</th>
                                            </tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($prestasi as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->namaKegiatan ?>
												</td>
												<td>
													<?php echo $data->waktuPerolehan ?>
												</td>
												<td>
													<?php echo $data->tingkatWilayah ?>
												</td>
                                                <td>
													<?php echo $data->tingkatNasional ?>
                                                </td>
                                                <td>
													<?php echo $data->tingkatInternasional ?>
                                                </td>
                                                <td>
													<?php echo $data->prestasi ?>
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