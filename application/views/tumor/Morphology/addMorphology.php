<span id="pesan-flash" ><?php echo $this->session->flashdata('sukses'); ?></span>
<span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span> 

<form action="<?php echo base_url(); ?>Tumor/saveTumor" method="post">
    <div class="form-body">
        <!--/row-->

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Topography : </label>
                    <input type="text" name="topography" class="form-control">
                </div>
            </div>
            <!--/span-->
            <div class="col-md-2">
                <div class="form-group">
                    <label>Kode Topography</label>
                    <input type="text" name="id_topography" class="form-control">
                </div>
            </div>
            <!--/span-->
        </div>
        <!--/row-->
        <br>
    </div>
    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
    <button type="button" class="btn btn-default">Cancel</button>

</form>