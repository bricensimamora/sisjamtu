<script>
    
$(document).ready(function(){
    $.ajax({
        url : "<?php echo base_url().'monitoring/tabel' ?>",
        dataType : "JSON",
        success : function(result){
            google.charts.load('current', {
                'packages' : ['table']
            });
            google.charts.setOnLoadCallback(function(){
                drawChart(result);
            });
        }
    });


    function drawChart(result) {


            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Nama Tabel');
            data.addColumn('boolean', 'Status Pengisian');             
            var dataArray = [];
            $.each(result, function(i, obj) {
                dataArray.push([ obj.nama_tabel, obj.status ]);
            });

            data.addRows(dataArray);

            var table = new google.visualization.Table(document.getElementById('table_div'));

        		table.draw(data, {showRowNumber: true, width: '766', height: '350'});
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
								<h6 class="judul-monitor">Monitoring Progress Pengisian Tabel</h6>
							</div>
								<div class="card-body">
								<div class="table-responsive">
							        <div class="col-8 offset-2" style="margin-left: 20px; margin-top: -20px">
							            <table class="column" cellpadding="10">
							            	<tr>
							            		<td>
							            			<div id="table_div" style="border: 3px solid #ccc"></div>
							            		</td>							            	
							            	</tr>
							            	<tr>
							            		<td>
												<button><a href="/sisjamtu/email/send"> kirim email</a></button>
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