<script>
    
$(document).ready(function(){
	$.ajax({
		url : "<?php echo base_url().'monitoring/data' ?>",
		dataType : "JSON",
		success : function(result){
			google.charts.load('current', {
				'packages' : ['corechart']
			});
			google.charts.setOnLoadCallback(function(){
				drawChart(result);
			});
		}
	});

	function drawChart(result) {

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Nama Prodi');
            data.addColumn('number', 'Jumlah Mahasiswa');
            var dataArray = [];
            $.each(result, function(i, obj) {
                dataArray.push([ obj.jenisProdi+' '+obj.namaProdi, parseInt(obj.jumlahMahasiswa) ]);
            });

            data.addRows(dataArray);

            var piechart_options = {
                title : 'Pie Chart: Jumlah Mahasiswa Tiap Prodi',
                width : 412,
                height : 350,
                legend : 'bottom'
            };
            var piechart = new google.visualization.PieChart(document
                    .getElementById('piechart_div'));
            piechart.draw(data, piechart_options);

            var barchart_options = {
                title : 'Barchart: Jumlah Mahasiswa Tiap Prodi',
                width : 412,
                height : 350,
                legend : 'none'
            };
            var barchart = new google.visualization.BarChart(document
                    .getElementById('barchart_div'));
            barchart.draw(data, barchart_options);
        };
    
});

</script>

		<div class="col-sm-9">
			<div id="wrapper">
				<div id="content-wrapper">
					<div class="container-fluid monitor-body">
						<!-- DataTables -->
						<div class="card mb-3">
							<div class="card-header bg-secondary">
								<h6 class="judul-monitor">Monitoring Program Studi</h6>
							</div>
								<div class="card-body">
								<div class="table-responsive">
							        <div class="col-8 offset-2" style="margin-left: -20px; margin-top: -20px">
							            <table class="Column" cellpadding="10">
							            	<tr>
							            		<td>
							            			<div id="piechart_div" style="border: 3px solid #ccc"></div>
							            		</td>
							            		<td>
							            			<div id="barchart_div" style="border: 3px solid #ccc"></div>
							            		</td>
							            	</tr>
							            </table>
							        </div>
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