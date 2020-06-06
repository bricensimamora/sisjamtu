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
							<div class="card-header">Masa Studi Lulusan D3
								
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
										<thead style="text-align: center;">
											<tr>
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Tahun Masuk</th>
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Jumlah Mahasiswa Diterima</th>	
                                                <th colspan='5' style="text-align:center; padding-bottom:35px">Jumlah Mahasiswa yang Lulus pada</th>
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Jumlah Lulusan s.d. akhir TS</th>	
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Rata-rata Masa Studi</th>		
                                            </tr>
                                            <tr>
                                                <th>Akhir TS-4</th>
                                                <th>Akhir TS-3</th>
                                                <th>Akhir TS-2</th>
                                                <th>Akhir TS-1</th>
                                                <th>Akhir TS</th>
                                            </tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($masastudid3 as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->tahunMasuk ?>
												</td>
												<td>
													<?php echo $data->mahasiswaDiterima ?>
												</td>
												<td>
													<?php echo $data->akhirTS4 ?>
												</td>
                                                <td>
													<?php echo $data->akhirTS3 ?>
                                                </td>
                                                <td>
													<?php echo $data->akhirTS2 ?>
                                                </td>
                                                <td>
													<?php echo $data->akhirTS ?>
                                                </td>
                                                <td>
													<?php echo $data->jumlahLulusan ?>
                                                </td>
                                                <td>
													<?php echo $data->rerataMasaStudi ?>
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
							<div class="card-header">Masa Studi Lulusan D4
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
										<thead style="text-align: center;">
											<tr>
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Tahun Masuk</th>
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Jumlah Mahasiswa Diterima</th>	
                                                <th colspan='5' style="text-align:center; padding-bottom:35px">Jumlah Mahasiswa yang Lulus pada</th>
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Jumlah Lulusan s.d. akhir TS</th>	
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Rata-rata Masa Studi</th>		
                                            </tr>
                                            <tr>
                                                <th>Akhir TS-4</th>
                                                <th>Akhir TS-3</th>
                                                <th>Akhir TS-2</th>
                                                <th>Akhir TS-1</th>
                                                <th>Akhir TS</th>
                                            </tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($masastudid4 as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->tahunMasuk ?>
												</td>
												<td>
													<?php echo $data->mahasiswaDiterima ?>
												</td>
												<td>
													<?php echo $data->akhirTS4 ?>
												</td>
                                                <td>
													<?php echo $data->akhirTS3 ?>
                                                </td>
                                                <td>
													<?php echo $data->akhirTS2 ?>
                                                </td>
                                                <td>
													<?php echo $data->akhirTS ?>
                                                </td>
                                                <td>
													<?php echo $data->jumlahLulusan ?>
                                                </td>
                                                <td>
													<?php echo $data->rerataMasaStudi ?>
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