<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Dosen Tetap Perguruan Tinggi</h6></li>
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
                                                <th colspan='2'>Pendidikan Pasca Sarjana</th>
                                                <th rowspan='2'>Bidang Keahlian</th>
                                                <th rowspan='2'>Kesesuaian Kompetensi Inti</th>
                                                <th rowspan='2'>Jabatan Akademik</th>
                                                <th rowspan='2'>Sertifikat Pendidik Profesional</th>
                                                <th rowspan='2'>Sertifikat Kompetensi</th>
                                                <th rowspan='2'>Matakuliah yang Diampu</th>
                                                <th rowspan='2'>Kesesuaian Bidang Keahlian</th>
                                                <th rowspan='2'>Matakuliah yang Diampu pada PS Lain</th>
											</tr>
											<tr>
												<th>Magister</th>
												<th>Doktor</th>
											</tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($dosen as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->namaDosen ?>
												</td>
												<td>
													<?php echo $data->nidnNidk ?>
												</td>
												<td>
													<?php echo $data->magister ?>
												</td>
												<td>
													<?php echo $data->doktor ?>
												</td>
												<td>
													<?php echo $data->bidangKeahlian ?>
												</td>
												<td>
													<?php echo $data->kesesuaianKompetensi ?>
												</td>
												<td>
													<?php echo $data->jabatanAkademik ?>
												</td>
												<td>
													<?php echo $data->sertifikatPendidikan ?>
                                                </td>
                                                <td>
													<?php echo $data->sertifikatKompetensi ?>
                                                </td>
                                                <td>
													<?php echo $data->matkulDiampu ?>
                                                </td>
                                                <td>
													<?php echo $data->kesesuaianKeahlianMatkul ?>
                                                </td>
                                                <td>
													<?php echo $data->matkulDiampuLain ?>
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