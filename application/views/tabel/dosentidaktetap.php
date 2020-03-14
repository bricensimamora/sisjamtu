<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Dosen Tidak Tetap</h6></li>
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
                                                <th >Nama Dosen</th>
                                                <th >NIDN/NIDK</th>
                                                <th >Pendidikan Pasca Sarjana</th>
                                                <th >Bidang Keahlian</th>
                                                <th >Jabatan Akademik</th>
                                                <th >Sertifikat Pendidik Profesional</th>
                                                <th >Sertifikat Kompetensi</th>
                                                <th >Mata Kuliah yang Diampu</th>
											</tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($dosentidaktetap as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->namaDosen ?>
												</td>
												<td>
													<?php echo $data->nidn ?>
												</td>
												<td>
													<?php echo $data->pendidikanPascaSarjana ?>
												</td>
												<td>
													<?php echo $data->bidangKeahlian ?>
												</td>
												<td>
													<?php echo $data->jabatanAkademik ?>
												</td>
												<td>
													<?php echo $data->sertifikatPendidik ?>
												</td>
												<td>
													<?php echo $data->sertifikatKompetensi ?>
												</td>
												<td>
													<?php echo $data->matkulDiampu ?>
                                                </td>
                                                <td>
													<?php echo $data->kesesuaianKeahlian ?>
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