<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Tempat Kerja Lulusan</h6></li>
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
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Tahun Lulus</th>
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Jumlah Lulusan</th>	
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Jumlah Lulusan Terlacak</th>
                                                <th colspan='3' style="text-align:center; padding-bottom:35px">Jumlah Lulusan Terlacak yang Bekerja Berdasarkan Tingkat/Ukuran Tempat kerja/Berwirausaha</th>			
                                            </tr>
                                            <tr>
                                                <th>Lokal/ Wilayah/ Berwirausaha tidak Berbadan Hukum</th>			
                                                <th>Nasional/ Berwirausaha Berbadan Hukum</th>
                                                <th>Multinasiona/ Internasional</th>
                                            </tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($tempatkerja as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->tahunLulus ?>
												</td>
												<td>
													<?php echo $data->jumlahLulusan ?>
												</td>
												<td>
													<?php echo $data->lulusanTerlacak ?>
												</td>
                                                <td>
													<?php echo $data->wilayah ?>
                                                </td>
                                                <td>
													<?php echo $data->nasional ?>
                                                </td>
                                                <td>
													<?php echo $data->internasional ?>
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