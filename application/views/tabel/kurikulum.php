<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Kurikulum, Capaian Pembelajaran, dan Rencana Pembelajaran</h6></li>
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
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Semester</th>
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Kode Mata Kuliah</th>
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Nama Mata Kuliah</th>
                                                <th colspan='3' style="text-align:center; padding-bottom:35px">Bobot Kredit (sks)</th>	
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Konversi Kredit ke Jam</th>	
                                                <th colspan='4' style="text-align:center; padding-bottom:35px">Capaian Pembelajaran</th>		
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Dokumen Rencana Pembelajaran</th>
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Unit Penyelenggara</th>						
                                            </tr>
                                            <tr>
                                                <th>Kuliah/Responsi/Tutorial</th>
                                                <th>Seminar</th>
                                                <th>Praktikum/Praktik/Praktik Lapangan</th>
                                                <th>Sikap</th>
                                                <th>Pengetahuan</th>
                                                <th>Keterampilan Umum</th>
                                                <th>Keterampilan Khusus</th>
                                            </tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($kurikulum as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->semester ?>
												</td>
												<td>
													<?php echo $data->kodeMatkul ?>
												</td>
												<td>
													<?php echo $data->namaMatkul ?>
												</td>
                                                <td>
													<?php echo $data->matkulKompetensi ?>
                                                </td>
                                                <td>
													<?php echo $data->bobotKreditKuliah ?>
                                                </td>
                                                <td>
													<?php echo $data->bobotKreditSeminar ?>
                                                </td>
                                                <td>
													<?php echo $data->bobotKreditPraktikum ?>
                                                </td>
                                                <td>
													<?php echo $data->konversiKreditJam ?>
                                                </td>
                                                <td>
													<?php echo $data->capaianSikap ?>
                                                </td>
                                                <td>
													<?php echo $data->capaianPengetahuan ?>
                                                </td>
                                                <td>
													<?php echo $data->capaianTerampilUmum ?>
                                                </td>
                                                <td>
													<?php echo $data->capaianTerampilKhusus ?>
                                                </td>
                                                <td>
													<?php echo $data->dokumenRenPembelajaran ?>
                                                </td>
                                                <td>
													<?php echo $data->unitPenyelenggara ?>
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