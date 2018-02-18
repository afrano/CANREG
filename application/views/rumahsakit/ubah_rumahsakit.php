<div class="row">
    <div class="col-lg-8 center-block" >
        <div class="white-box">
            <a href="<?= site_url('Rumahsakit') ?>"> <<<< Back </a>
            <center><label><h4><strong>Edit Biopsy </strong></h4></label></center>
            <?php
            if (validation_errors()) {
                echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
            }
            if ($row == null) {
                echo "<div class='alert alert-danger'> Data Kosong </div>";
            } else {
                ?>
                <form class="form-group" action="<?= site_url($this->uri->uri_string()) ?>" method="POST">
                    <div class="form-group">
                        <label>Kode :</label>
                        <input class="form-control" name="Kode_Rumah_Sakit"  value="<?= $row->Kode_Rumah_Sakit ?>" type="text" required="true" />
                    </div>
                    <div class="form-group">
                        <label>Nama </label>
                        <input class="form-control" name="Nama_Rumah_Sakit" value="<?= $row->Nama_Rumah_Sakit ?>" required="true"/>
                    </div>
                    <div class="form-group">
                        <label>Alamat </label>
                        <input class="form-control" name="Alamat" value="<?= $row->Alamat ?>" required="true"/>
                    </div>
                    <div class='form-group'>

                        <button class="btn btn-skype">Simpan</button>
                    </div>
                </form><?php } ?>
        </div>
    </div>
</div>