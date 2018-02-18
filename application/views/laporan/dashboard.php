<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 white-box"> 
            <center><br>
                <h4><strong><text style="color: #666666">Grafik Data Pasien</text></strong></h4>
                <?php
                foreach ($laporan as $datalaporan) {
                    echo '<h3 class="box-title"><small class="pull-right m-t-10 text-success"></small> Total Seluruh Data Pasien Sebanyak ' . $datalaporan->total . ' Orang</h3>';
                }
                ?>
                <hr align="right" width="95%" color="cccccc">
            </center><br>
            <div class="row">
                <div class="col-sm-6 white-box"> 
                    <b> Berdasarkan Jenis Kelamin</b>
                    <div class="stats-row">
                        <?php
                        $wilayah = $this->db->query('select s.nama as provinsi, count(dp.ID_Provinsi) as tprovisi from data_pasien dp, wilayah_provinsi s where dp.ID_Provinsi = s.id group by dp.ID_Provinsi');
                        $race = $this->db->query('select s.race as nama_race, count(dp.ID_Race) as race from data_pasien dp, race s where dp.ID_Race = s.id_race group by dp.ID_Race');
                        $sex = $this->db->query('select s.sex as kelamin, count(dp.ID_Sex) as sex from data_pasien dp, sex s where dp.ID_Sex = s.id_sex group by dp.ID_Sex');
                        foreach ($sex->result() as $row) {
                            echo '<div class="stat-item">';
                            echo '<h5><b>' . $row->kelamin . '</b></h5> ' . $row->sex . ' Orang';
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <canvas id="kelamin"></canvas>
                    <script>
<?php ?>
                        var ctx = document.getElementById("kelamin");
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: [<?php
foreach ($sex->result() as $row) {
    echo '"' . $row->kelamin . '",';
}
?>],
                                datasets: [{
                                        label: 'hidden',
                                        data: [<?php
foreach ($sex->result() as $row) {
    echo '"' . $row->sex . '",';
}
?>],
                                       backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)',
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderWidth: 2
                                    }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                }
                            }
                        });
                    </script>
                </div>
                <div class="col-sm-6 white-box"> 
                    <b> Berdasarkan Suku</b>
                    <div class="stats-row">
                        <?php
                        foreach ($race->result() as $row) {
                            echo '<div class="stat-item">';
                            echo '<h5><b>' . $row->nama_race . '</b></h5> ' . $row->race . ' Orang';
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <canvas id="daerah"></canvas>
                    <script>
                        var ctx = document.getElementById("daerah");
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: [<?php
                        foreach ($race->result() as $row) {
                            echo '"' . $row->nama_race . '",';
                        }
                        ?>],
                                datasets: [{
                                        label: 'hidden',
                                        data: [<?php
                        foreach ($race->result() as $row) {
                            echo '"' . $row->race . '",';
                        }
                        ?>],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)',
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderWidth: 2
                                    }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 white-box"> 
            <center><br>
                <h4><strong><text style="color: #666666">Grafik Berdasarkan Wilayah</text></strong></h4>
                <?php
                foreach ($laporan as $datalaporan) {
                    echo '<h3 class="box-title"><small class="pull-right m-t-10 text-success"></small> Total Seluruh Data Pasien Sebanyak ' . $datalaporan->total . ' Orang</h3>';
                }
                ?>
                <hr align="right" width="95%" color="cccccc">
            </center><br>
            <div class="row">
                <div class="col-sm-12 white-box"> 
                    <b> Berdasarkan Provinsi</b>
                    <div class="stats-row">
                        <?php
                        foreach ($wilayah->result() as $row) {
                            echo '<div class="stat-item">';
                            echo '<h5><b>' . $row->provinsi . '</b></h5> ' . $row->tprovisi . ' Orang';
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <canvas id="provinsi"></canvas>
                    <script>
<?php ?>
                        var ctx = document.getElementById("provinsi");
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: [<?php
foreach ($wilayah->result() as $row) {
    echo '"' . $row->provinsi . '",';
}
?>],
                                datasets: [{
                                        label: 'hidden',
                                        data: [<?php
foreach ($wilayah->result() as $row) {
    echo '"' . $row->tprovisi . '",';
}
?>],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)',
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderWidth: 2
                                    }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                }
                            }
                        });
                    </script>
                </div>

            </div>
        </div>
    </div>
</div>
