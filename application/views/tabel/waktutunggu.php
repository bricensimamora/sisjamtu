<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Masa Studi Lulusan</h6></li>
					</ul>
				</div>
			</nav>

			<div id="wrapper">

				<div id="content-wrapper">

					<div class="container-fluid">

						<!-- DataTables -->
						<div class="card mb-3">
							<div class="card-header">Waktu Tunggu Lulusan D3
								
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
										<thead style="text-align: center;">
											<tr>
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Tahun Lulus</th>
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Jumlah Lulusan</th>	
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Jumlah Lulusan yang Terlacak</th>
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Jumlah Lulusan yang Dipesan Sebelum Lulus</th>	
                                                <th colspan='3' style="text-align:center; padding-bottom:35px">Jumlah Lulusan Terlacak dengan Waktu Tunggu Mendapatkan Pekerjaan</th>		
                                            </tr>
                                            <tr>
                                                <th>WT < 3 Bulan</th>
                                                <th>3 ≤ WT ≤ 6 bulan</th>
                                                <th>WT > 6 bulan</th>
                                            </tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($waktutunggud3 as $data): ?>
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
													<?php echo $data->lulusanDipesan ?>
                                                </td>
                                                <td>
													<?php echo $data->wt1 ?>
                                                </td>
                                                <td>
													<?php echo $data->wt2 ?>
                                                </td>
                                                <td>
													<?php echo $data->wt3 ?>
                                                </td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
                                </div>
                                
							</div>
                        </div>
                        
                        <!-- DataTables -->
						<div class="card mb-3">
							<div class="card-header">Waktu Tunggu Lulusan D4
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
										<thead style="text-align: center;">
											<tr>
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Tahun Lulus</th>
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Jumlah Lulusan</th>	
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Jumlah Lulusan yang Terlacak</th>
                                                <th colspan='3' style="text-align:center; padding-bottom:35px">Jumlah Lulusan Terlacak dengan Waktu Tunggu Mendapatkan Pekerjaan</th>		
                                            </tr>
                                            <tr>
                                                <th>WT < 3 Bulan</th>
                                                <th>3 ≤ WT ≤ 6 bulan</th>
                                                <th>WT > 6 bulan</th>
                                            </tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($waktutunggud4 as $data): ?>
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
													<?php echo $data->wt1 ?>
                                                </td>
                                                <td>
													<?php echo $data->wt2 ?>
                                                </td>
                                                <td>
													<?php echo $data->wt3 ?>
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