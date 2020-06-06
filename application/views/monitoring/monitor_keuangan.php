<script>
    
$(document).ready(function(){
	$.ajax({
		url : "<?php echo base_url().'monitoring/jmlkeuangan' ?>",
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
            data.addColumn('string', 'Jenis Penggunaan');
            data.addColumn('number', 'Unit Pengelola Program Studi TS-2 (Rupiah)');
            data.addColumn('number', 'Unit Pengelola Program Studi TS-1 (Rupiah)');
            data.addColumn('number', 'Unit Pengelola Program Studi TS (Rupiah)');
            data.addColumn('number', 'Unit Pengelola Program Studi Rata-Rata (Rupiah)');
            
            var dataArray = [];
            $.each(result, function(i, obj) {
                dataArray.push([ obj.jenisPenggunaan, parseFloat(obj.unitPengelolaPSTS2), parseFloat(obj.unitPengelolaPSTS1), parseFloat(obj.unitPengelolaPSTS), parseFloat(obj.unitPengelolaPSRerata) ]);
            });


            data.addRows(dataArray);

                       
            var Combo_options = {
               title: 'Monitoring Jumlah Judul Publikasi Ilmiah Berdasarkan Sumber',
                seriesType :'bars',
                series : {3:{type: 'line'}},
                legend : {position : 'bottom'},
                hAxis : {title: 'Jenis Pengeluaran'},
                width : 766,
                height : 350
            };
            var Combochart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                Combochart.draw(data, Combo_options);

            var data2 = new google.visualization.DataTable();
            data2.addColumn('string', 'Jenis Penggunaan');
            data2.addColumn('number', 'Program Studi TS-2 (Rupiah)');
            data2.addColumn('number', 'Program Studi TS-1 (Rupiah)');
            data2.addColumn('number', 'Program Studi TS (Rupiah)');
            data2.addColumn('number', 'Program Studi Rata-Rata (Rupiah)');
            var dataArray2 = [];
            $.each(result, function(i, obj) {
                dataArray2.push([ obj.jenisPenggunaan, parseFloat(obj.progStudiTS2), parseFloat(obj.progStudiTS1), parseFloat(obj.progStudiTS), parseFloat(obj.progStudiRerata) ]);
            });

            data2.addRows(dataArray2);

            var Combo_options2 = {
               title: 'Monitoring Jumlah Judul Publikasi Ilmiah Berdasarkan Sumber',
                seriesType :'bars',
                series : {3:{type: 'line'}},
                legend : {position : 'bottom'},
                hAxis : {title: 'Jenis Pengeluaran'},
                width : 766,
                height : 350
            };
            var Combochart2 = new google.visualization.ComboChart(document.getElementById('chart_div2'));
                Combochart2.draw(data2, Combo_options2);
            }
    
});


</script>
<div class="col-sm-9">
			<div id="wrapper">
				<div id="content-wrapper">
					<div class="container-fluid monitor-body">
						<!-- DataTables -->
						<div class="card mb-3">
							<div class="card-header bg-secondary">
								<h6 class="judul-monitor">Monitoring Publikasi Ilmiah DTPS</h6>
							</div>
								<div class="card-body">
								<div class="table-responsive">
							        <div class="col-8 offset-2" style="margin-left: 20px; margin-top: -20px">
							            <table class="column" cellpadding="10">
							            	<tr>
							            		<td>
							            			<div id="chart_div" style="border: 3px solid #ccc"></div>
							            		</td>
							            	</tr>
							            	<tr>
							            		<td>
							            			<div id="chart_div2" style="border: 3px solid #ccc"></div>
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