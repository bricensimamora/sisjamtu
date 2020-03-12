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
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Program Studi</th>
                                                <th colspan='3'>Jumlah Mahasiswa Aktif</th>
                                                <th colspan='3'>Jumlah Mahasiswa Asing Penuh Waktu (full-time)</th>
                                                <th colspan='3'>Jumlah Mahasiswa Asing Paruh Waktu (Part-time)</th>
											</tr>
											<tr>
												<th>TS-2</th>
												<th>TS-1</th>
                                                <th>TS</th>
                                                <th>TS-2</th>
												<th>TS-1</th>
                                                <th>TS</th>
                                                <th>TS-2</th>
												<th>TS-1</th>
												<th>TS</th>
											</tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($mahasiswaasing as $mahasiswa): ?>
											<tr>
												<td width="150">
													<?php echo $mahasiswa->programStudi ?>
												</td>
												<td>
													<?php echo $mahasiswa->mahasiswaAktifTS2 ?>
												</td>
												<td>
													<?php echo $mahasiswa->mahasiswaAktifTS1 ?>
												</td>
												<td>
													<?php echo $mahasiswa->mahasiswaAktifTS ?>
												</td>
												<td>
													<?php echo $mahasiswa->mahasiswaAsingFullTS2 ?>
												</td>
												<td>
													<?php echo $mahasiswa->mahasiswaAsingFullTS1 ?>
												</td>
												<td>
													<?php echo $mahasiswa->mahasiswaAsingFullTS ?>
												</td>
												<td>
													<?php echo $mahasiswa->mahasiswaAsingPartTimeTS2 ?>
												</td>
												<td>
													<?php echo $mahasiswa->mahasiswaAsingPartTimeTS1 ?>
												</td>
												<td>
													<?php echo $mahasiswa->mahasiswaAsingPartTimeTS ?>
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