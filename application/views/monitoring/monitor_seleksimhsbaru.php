<script>
    
$(document).ready(function(){
    $.ajax({
        url : "<?php echo base_url().'monitoring/seleksimhs' ?>",
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
            data.addColumn('string', 'Tahun Akademik');
            data.addColumn('number', 'Jumlah Calon Mahasiswa Terdaftar (dalam puluhan)');
            data.addColumn('number', 'Jumlah Calon Mahasiswa Lulus Seleksi');
            data.addColumn('number', 'Jumlah Mahasiswa Aktif');
            var dataArray = [];
            $.each(result, function(i, obj) {
                dataArray.push([ obj.tahunAkademik, parseInt(obj.pendaftar/10),parseInt(obj.lulusSeleksi), parseInt(obj.regulerMahasiswaAktif) ]);
            });

            data.addRows(dataArray);

                       

            var Combo_options = {
               title: 'Monitoring Selesksi Mahasiswa Baru',
                seriesType :'bars',
                series : {3:{type: 'line'}},
                legend : {position : 'bottom'},
                width : 766,
                height : 350
            };
            var Combochart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                Combochart.draw(data, Combo_options);
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
                                <h6 class="judul-monitor">Monitoring Seleksi Mahasiswa</h6>
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
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-wrapper -->

            </div>
            <!-- /#wrapper -->
        </div> 
    </div>
</body>