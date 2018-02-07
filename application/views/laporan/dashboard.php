<div class="col-md-6 col-sm-12 col-xs-12">
    <div class="white-box">
        <?php
        foreach ($laporan as $datalaporan) {
            echo '<h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i>' . $datalaporan->total . '  Row</small> Total Seluruh Data Pasien Sebanyak ' . $datalaporan->total . ' Orang</h3>';
        }
        ?>
        <div class="stats-row">
            <div class="stat-item">
                <?php
                $query = $this->db->query('SELECT count(ID_Sex) as sex FROM data_pasien where ID_Sex = 2');
                foreach ($query->result() as $row) {
                    echo '<h5><b>Laki-Laki</b></h5> ' . $row->sex . ' Orang';
                }
                ?>
            </div>
            <div class="stat-item">
                <?php
                $query = $this->db->query('SELECT count(ID_Sex) as sex FROM data_pasien where ID_Sex =  1');
                foreach ($query->result() as $row) {
                    echo '<h5><b>Perempuan</b></h5> ' . $row->sex . ' Orang';
                }
                ?>
            </div>
            <div class="stat-item">
                <?php
                $query = $this->db->query('SELECT count(ID_Sex) as sex FROM data_pasien where ID_Sex =  9');
                foreach ($query->result() as $row) {
                    echo '<h5><b>unknown</b></h5> ' . $row->sex . ' Orang';
                }
                ?>

            </div>
            <div id="sparkline8"></div>
        </div>
    </div>
</div>