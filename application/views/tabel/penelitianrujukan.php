<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Penelitian DTPS yang Menjadi Rujukan Tema Tesis/Disertasi</h6></li>
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
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Tema Penelitian Sesuai Roadmap</th>	
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Nama Mahasiswa</th>
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Judul Tesis/Disertasi</th>
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Tahun</th>			
                                            </tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($penelitian as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->namaDosen ?>
												</td>
												<td>
													<?php echo $data->temaPenelitian ?>
												</td>
												<td>
													<?php echo $data->namaMahasiswa ?>
												</td>
                                                <td>
													<?php echo $data->judulThesis ?>
                                                </td>
                                                <td>
													<?php echo $data->tahun ?>
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