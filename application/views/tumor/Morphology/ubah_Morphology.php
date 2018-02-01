
<div class="row">
    <div class="col-lg-8 center-block">
        <div class="white-box">
               <a href="<?= site_url('Tumor/Morphology') ?>"> <<<< Back </a>
            <center><label><h4><strong>Edit Morphology</strong></h4></label></center>
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
                        <label>Kode Topography</label>
                        <input class="form-control" value="<?= $row->ID_Morphology ?>" name="ID_Morphology" type="text" required="true" />
                    </div>
                    <div class="form-group">
                        <label>Topography</label>
                        <input class="form-control" name="Morphology" value="<?= $row->Morphology ?>" required="true"/>
                    </div>
                    <div class='form-group'>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form><?php } ?>
        </div>
    </div>
</div>