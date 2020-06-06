<script>
    
$(document).ready(function(){
	$.ajax({
		url : "<?php echo base_url().'monitoring/jmldosenpembimbing' ?>",
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
            data.addColumn('string', 'Nama Dosen');
            data.addColumn('number', 'Jumlah Mahasiswa dibimbing TS-2');
            data.addColumn('number', 'Jumlah Mahasiswa dibimbing TS-1');
            data.addColumn('number', 'Jumlah Mahasiswa dibimbing TS');
            data.addColumn('number', 'Jumlah Mahasiswa dibimbing Rata-rata');
            var dataArray = [];
            $.each(result, function(i, obj) {
                dataArray.push([ obj.namaDosen, parseFloat(obj.jumlahMahasiswaTS2), parseFloat(obj.jumlahMahasiswaTS1), parseFloat(obj.jumlahMahasiswaTS), parseFloat(obj.rerata) ]);
            });


            data.addRows(dataArray);

            var Combo_options = {
               title: 'Monitoring Dosen Pembimbing Pada Program Studi yang Diakreditasi',
                seriesType :'bars',
                series : {3:{type: 'line'}},
                legend : {position : 'bottom'},
                width : 766,
                height : 350
            };
            var Combochart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                Combochart.draw(data, Combo_options);

            var data2 = new google.visualization.DataTable();
            data2.addColumn('string', 'Nama Dosen');
            data2.addColumn('number', 'Jumlah Mahasiswa dibimbing TS-2');
            data2.addColumn('number', 'Jumlah Mahasiswa dibimbing TS-1');
            data2.addColumn('number', 'Jumlah Mahasiswa dibimbing TS');
            data2.addColumn('number', 'Jumlah Mahasiswa dibimbing Rata-rata');
            var dataArray2 = [];
            $.each(result, function(i, obj) {
                dataArray2.push([ obj.namaDosen, parseFloat(obj.jumlahMahasiswaLainTS2), parseFloat(obj.jumlahMahasiswaLainTS1), parseFloat(obj.jumlahMahasiswaLainTS), parseFloat(obj.rerataLain) ]);
            });


            data2.addRows(dataArray2);

            var Combo_options2 = {
               title: 'Monitoring Dosen Pembimbing Pada Program Studi Lain',
                seriesType :'bars',
                series : {3:{type: 'line'}},
                legend : {position : 'bottom'},
                width : 766,
                height : 350
            };
            var Combochart2 = new google.visualization.ComboChart(document.getElementById('barchart_div'));
                Combochart2.draw(data2, Combo_options2);
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
								<h6 class="judul-monitor">Monitoring Dosen Pembimbing</h6>
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