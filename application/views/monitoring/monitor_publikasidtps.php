<script>
    
$(document).ready(function(){
	$.ajax({
		url : "<?php echo base_url().'monitoring/jmlpublikasidtps' ?>",
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
            data.addColumn('string', 'Jenis Publikasi');
            data.addColumn('number', 'Jumlah Judul Publikasi Ilmiah TS-2');
            data.addColumn('number', 'Jumlah Judul Publikasi Ilmiah TS-1');
            data.addColumn('number', 'Jumlah Judul Publikasi Ilmiah TS');
            var dataArray = [];
            $.each(result, function(i, obj) {
                dataArray.push([ obj.jenisPublikasi, parseInt(obj.jumlahJudulTS2), parseInt(obj.jumlahJudulTS1), parseInt(obj.jumlahJudulTS) ]);
            });


            data.addRows(dataArray);

                       
            var Combo_options = {
               title: 'Monitoring Jumlah Judul Publikasi Ilmiah Berdasarkan Sumber',
                seriesType :'bars',
                series : {4:{type: 'line'}},
                legend : {position : 'bottom'},
                width : 766,
                height : 350
            };
            var Combochart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                Combochart.draw(data, Combo_options);

            var data2 = new google.visualization.DataTable();
            data2.addColumn('string', 'Jenis Publikasi');
            data2.addColumn('number', 'Jumlah Judul Publikasi Ilmiah');
            var dataArray2 = [];
            $.each(result, function(i, obj) {
                dataArray2.push([ obj.jenisPublikasi, parseInt(obj.jumlah) ]);
            });

            data2.addRows(dataArray2);

            var piechart_options = {
                title : 'Distribusi Judul Publikasi Ilmiah Berdasarkan Sumber',
                width : 766,
                height : 350,
                is3D : true,
                legend : 'bottom'
            };
            var piechart = new google.visualization.PieChart(document
                    .getElementById('piechart_div'));
            piechart.draw(data2, piechart_options);
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
							            			<div id="piechart_div" style="border: 3px solid #ccc"></div>
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