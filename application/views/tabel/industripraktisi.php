<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Dosen Industri Praktisi</h6></li>
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
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Nama Dosen</th>
                                                <th rowspan='3'>NIDN/NIDK</th>
                                                <th colspan='2'>Perusahaan/Industri</th>
                                                <th colspan='2'>Pendidikan Tertinggi</th>
                                                <th rowspan='2'>Bidang Keahlian</th>
                                                <th rowspan='2'>Sertifikat Profesi/Kompetensi</th>
                                                <th rowspan='2'>Matakuliah yang Diampu</th>
                                                <th rowspan='2'>Bobot Kredit (sks)</th>
											</tr>
											<tr>
												<th>Magister</th>
												<th>Doktor</th>
											</tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($industripraktisi as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->namaDosen ?>
												</td>
												<td>
													<?php echo $data->nidk ?>
												</td>
												<td>
													<?php echo $data->perusahaan ?>
												</td>
												<td>
													<?php echo $data->pendidikanTertinggi ?>
												</td>
												<td>
													<?php echo $data->bidangKeahlian ?>
												</td>
												<td>
													<?php echo $data->sertifikatProfesi ?>
												</td>
												<td>
													<?php echo $data->matkulDiampu ?>
												</td>
												<td>
													<?php echo $data->bobotKredit ?>
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