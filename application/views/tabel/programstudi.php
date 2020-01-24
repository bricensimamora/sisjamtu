<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body id="page-top">

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
								<thead>
									<tr>
										<th>Jenis Prodi</th>
										<th>Nama Prodi</th>
										<th>Status</th>
										<th>Tanggal SK</th>
                                        <th>Tanggal Kadaluarsa</th>
                                        <th>Jumlah Mahasiswa</th>
									</tr>
								</thead>
								<tbody>
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
										</td>
											<a href="<?php echo site_url('admin/products/edit/'.$product->product_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->product_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
    
</body>

</html>