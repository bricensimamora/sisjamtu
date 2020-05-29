<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Luaran Penelitian/PkM Lainnya oleh DTPS  (Bagian-2 HKI)</h6></li>
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
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Luaran Penelitian dan PkM</th>
												<th rowspan='2'style="text-align:center; padding-bottom:35px">Tahun</th>
												<th rowspan='2'style="text-align:center; padding-bottom:35px">Keterangan</th>										
											</tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($luaranpenelitian2 as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->luaranPenelitian ?>
												</td>
												<td>
													<?php echo $data->tahun ?>
												</td>
												<td>
													<?php echo $data->keterangan ?>
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