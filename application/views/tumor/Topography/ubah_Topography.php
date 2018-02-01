
<div class="row">
    <div class="col-lg-8 center-block">
        <div class="white-box">
              <a href="<?= site_url('Tumor/Topography') ?>"> <<<< Back </a>
            <center><label><h4><strong>Edit Topography</strong></h4></label></center>
            <?php
            if (validation_errors()) {
                echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
            }
            ?>
            <form class="form-group" action="<?= site_url($this->uri->uri_string()) ?>" method="POST">
                <div class="form-group">
                    <label>Kode Topography</label>
                    <input class="form-control" value="<?= $row->ID_Topography ?>" name="ID_Topography" type="text" required="true" />
                </div>
                <div class="form-group">
                    <label>Topography</label>
                    <input class="form-control" name="Topography" value="<?= $row->Topography ?>" required="true"/>
                </div>
                <div class='form-group'>
                    <button class="btn btn-skype">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>