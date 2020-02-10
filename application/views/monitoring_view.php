<!--- Image Slider -->


<!--- script -->
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
                dataArray.push([ obj.namaProdi, parseInt(obj.jumlahMahasiswa) ]);
            });

            data.addRows(dataArray);

            var piechart_options = {
                title : 'Pie Chart: Jumlah Mahasiswa Tiap Prodi',
                width : 400,
                height : 300
            };
            var piechart = new google.visualization.PieChart(document
                    .getElementById('piechart_div'));
            piechart.draw(data, piechart_options);

            var barchart_options = {
                title : 'Barchart: Jumlah Mahasiswa Tiap Prodi',
                width : 400,
                height : 300,
                legend : 'none'
            };
            var barchart = new google.visualization.BarChart(document
                    .getElementById('barchart_div'));
            barchart.draw(data, barchart_options);
        }

    
});

</script>


<!--- Welcome Section -->
<div class="container-fluid padding" style="margin-top: 0px padding: 0px">
    	<nav>
        <div class="col-2">
            <h6>Monitoring</h6><hr>
        </div>
        </nav>
        <div class="col-8 offset-2">
            <table class="Column">
            	<tr>
            		<td>
            			<div id="piechart_div" style="border: 1px solid #ccc"></div>
            		</td>
            		<td>
            			<div id="barchart_div" style="border: 1px solid #ccc"></div>
            		</td>
            	</tr>
            </table>
        </div>
</div>

<!--- Three Column Section -->


<!--- Two Column Section -->


<!--- Fixed background -->
<figure>
    <div class="fixed-wrap">
        <div id="fixed">
        </div>
    </div>
</figure>

<!--- Emoji Section -->

  
<!--- Meet the team -->


<!--- Cards -->


<!--- Two Column Section -->


<!--- Connect -->

