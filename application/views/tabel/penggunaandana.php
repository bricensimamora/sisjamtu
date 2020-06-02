<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Penggunaan Dana</h6></li>
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
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Jenis Penggunaan</th>
												<th colspan='4'style="text-align:center; padding-bottom:35px">Unit Pengelola Program Studi (Rupiah)</th>
												<th colspan='4'style="text-align:center; padding-bottom:35px">Program Studi (Rupiah)</th>										
                                            </tr>
                                            <tr>
                                                <th>TS-2</th>
                                                <th>TS-1</th>
                                                <th>TS</th>
                                                <th>Rata-rata</th>
                                                <th>TS-2</th>
                                                <th>TS-1</th>
                                                <th>TS</th>
                                                <th>Rata-rata</th>
                                            </tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($penggunaandana as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->jenisPenggunaan ?>
												</td>
												<td>
													<?php echo $data->unitPengelolaPSTS2 ?>
												</td>
												<td>
													<?php echo $data->unitPengelolaPSTS1 ?>
												</td>
                                                <td>
													<?php echo $data->unitPengelolaPSTS ?>
                                                </td>
                                                <td>
													<?php echo $data->unitPengelolaPSRerata ?>
                                                </td>
                                                <td>
													<?php echo $data->progStudiTS2 ?>
                                                </td>
                                                <td>
													<?php echo $data->progStudiTS1 ?>
                                                </td>
                                                <td>
													<?php echo $data->progStudiTS ?>
                                                </td>
                                                <td>
													<?php echo $data->progStudiRerata ?>
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