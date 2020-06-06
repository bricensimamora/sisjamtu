<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Publikasi Ilmiah Mahasiswa</h6></li>
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
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Jenis Publikasi</th>
                                                <th colspan='3' style="text-align:center; padding-bottom:35px">Jumlah Judul</th>	
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Jumlah</th>	
                                            </tr>
                                            <tr>
                                                <th>TS-2</th>			
                                                <th>TS-1</th>
                                                <th>TS</th>
                                            </tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($publikasimahasiswa as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->jenisPublikasi ?>
												</td>
												<td>
													<?php echo $data->TS2 ?>
												</td>
												<td>
													<?php echo $data->TS1 ?>
												</td>
                                                <td>
													<?php echo $data->TS ?>
                                                </td>
                                                <td>
													<?php echo $data->jumlah ?>
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