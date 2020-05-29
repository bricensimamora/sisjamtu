<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Karya Ilmiah DTPS yang Disitasi</h6></li>
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
												<th rowspan='2'style="text-align:center; padding-bottom:35px">Judul Artikel yang Disitasi</th>
												<th rowspan='2'style="text-align:center; padding-bottom:35px">Jumlah Sitasi</th>										
											</tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($karyailmiah as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->namaDosen ?>
												</td>
												<td>
													<?php echo $data->judulArtikel ?>
												</td>
												<td>
													<?php echo $data->jumlahSitasi ?>
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