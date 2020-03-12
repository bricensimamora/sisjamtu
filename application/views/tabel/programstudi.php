
<div class="as123">
	<div class="row container-fluid">
		<div class="col-sm-3 bg-secondary">
		<li class="ml-2">Tabel 1</li>
		<li class="ml-2">Tabel 2</li>
		<li class="ml-2">Tabel 3</li>
		<li class="ml-2">Tabel 4</li>
		</div>
		<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Daftar Program Studi di Unit Pengelola Program Studi (UPPS)</h6></li>
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
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Jenis Prodi</th>
												<th rowspan='2'style="text-align:center; padding-bottom:35px">Nama Prodi</th>
												<th colspan='3'>Akreditasi</th>
												<th rowspan='2'style="text-align:center; padding-bottom:35px">Jumlah Mahasiswa</th>										
											</tr>
											<tr>
												<th>Status</th>
												<th>Tanggal SK</th>
												<th>Tanggal Kadaluarsa</th>
											</tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($program_studi as $prodi): ?>
											<tr>
												<td width="150">
													<?php echo $prodi->jenisProdi ?>
												</td>
												<td>
													<?php echo $prodi->namaProdi ?>
												</td>
												<td>
													<?php echo $prodi->status ?>
												</td>
												<td>
													<?php echo $prodi->tanggalSk ?>
												</td>
												<td>
													<?php echo $prodi->tanggalKadaluarsa ?>
												</td>
												<td>
													<?php echo $prodi->jumlahMahasiswa ?>
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
</div>
</body>
	