<script>
    
$(document).ready(function(){
	$.ajax({
		url : "<?php echo base_url().'monitoring/jmlhmhsasing' ?>",
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
            data.addColumn('number', 'Jumlah Mahasiswa Asing Full Time TS-2');
            data.addColumn('number', 'Jumlah Mahasiswa Asing Full Time TS-1');
            data.addColumn('number', 'Jumlah Mahasiswa Asing Full Time TS');
            data.addColumn('number', 'Jumlah Mahasiswa Asing Part Time TS-2');
            data.addColumn('number', 'Jumlah Mahasiswa Asing Part Time TS-1');
            data.addColumn('number', 'Jumlah Mahasiswa Asing Part Time TS');
            var dataArray = [];
            $.each(result, function(i, obj) {
                dataArray.push([ obj.programStudi, parseInt(obj.mahasiswaAsingFullTS2), parseInt(obj.mahasiswaAsingFullTS1), parseInt(obj.mahasiswaAsingFullTS), parseInt(obj.mahasiswaAsingPartTimeTS2), parseInt(obj.mahasiswaAsingPartTimeTS1), parseInt(obj.mahasiswaAsingPartTimeTS) ]);
            });

            data.addRows(dataArray);

            var Column_options = {
               title: 'Monitoring Mahasiswa Asing',
             	seriesType :'bars',
                series : {6:{type: 'line'}},
                legend : {position : 'right'},
                width : 850,
                height : 350
            };
            var Combochart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
                Combochart.draw(data, Column_options);
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
								<h6 class="judul-monitor">Monitoring Mahasiswa Asing</h6>
							</div>
								<div class="card-body">
								<div class="table-responsive">
							        <div class="col-8 offset-2" style="margin-left: -20px; margin-top: -20px">
							            <table class="Column" cellpadding="10">
							            	<tr>
							            		<td>
							            			<div id="chart_div" style="border: 3px solid #ccc"></div>
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