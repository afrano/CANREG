<div class="row">
    <div class="col-lg-8 center-block" >
        <div class="white-box">
            <a href="<?= site_url('Tumor/TeatmentReporting') ?>"> <<<< Back </a>
            <center><label><h4><strong>Edit Treatment at reporting institution</strong></h4></label></center>
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
                        <input class="form-control" name="ID_Treatment"  value="<?= $row->ID_Treatment ?>" type="text" required="true" />
                    </div>
                    <div class="form-group">
                        <label>Nama </label>
                        <input class="form-control" name="Treatment_Reporting" value="<?= $row->Treatment_Reporting ?>" required="true"/>
                    </div>
                    <div class='form-group'>

                        <button class="btn btn-skype">Simpan</button>
                    </div>
                </form><?php } ?>
        </div>
    </div>
</div>