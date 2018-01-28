<div class="modal fade none-border" id="add-new-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><strong><center>Tambah Topography</center></strong></h4>
            </div>
            <div class="modal-body">
                <form class="form-group" action="<?= site_url('Tumor/addTopography') ?>" method="POST" >
                    <div class="form-group">
                        <label>ID Topography :</label>
                        <input class="form-control" type="text" name="ID_Topography" required="true" />
                    </div>
                    <div class="form-group">
                        <label>Nama Topography :</label>
                        <input class="form-control" type="text" name="Topography" required="true" />
                    </div>
                    <div class='form-group'>
                        <button class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <?php
            if ($this->session->userdata('pesan_error')) {
                echo "<div class='alert alert-danger'>" . $this->session->userdata('pesan_error') . "</div>";
            }
            if ($this->session->userdata('pesan_sukses')) {
                echo "<div class='alert alert-success'>" . $this->session->userdata('pesan_sukses') . "</div>";
            }
            ?>
            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                <thead>
                    <tr>
                        <th data-hide="phone, tablet">NO</th>
                        <th data-hide="phone, tablet">ID </th>
                        <th data-hide="phone, tablet">Topography</th>
                        <th data-hide="phone, tablet">Create Date</th>
                        <th data-hide="phone, tablet">Update Date</th>
                        <th data-sort-ignore="true" class="min-width">Action</th>
                    </tr>
                </thead>
                <div class="form-inline padding-bottom-15">
                    <div class="col-sm-12 text-right m-b-20">
                        <label><strong><center>Data Topography</center></strong></label>
                    </div>
                    <div class="row">

                        <div class="col-sm-12 text-right m-b-20">

                            <div class="form-group">

                                <a href="#" data-toggle="modal" data-target="#add-new-event"  class='btn btn-primary'>
                                    <i class='glyphicon glyphicon-plus'> Tambah</i> 
                                </a>
                                <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">

                            </div>

                        </div>
                    </div>
                </div>
                <tbody>
                    <?php
                    if ($topography->num_rows() > 0) {
                        foreach ($topography->result() as $row) {
                            echo "
			<tr>
				<td>$row->ID</td>
				<td>$row->ID_Topography</td>
				<td>$row->Topography</td>
				<td>$row->Create_Date</td>
				<td>$row->Update_Date</td>
				<td >
					<a class='glyphicon glyphicon-pencil' 
					href='" . site_url("Pasien/ubah/$row->ID_Topography") . "' >	</a>
					
					<a class='glyphicon glyphicon-trash' 
                                        onclick='return confirm(\"Data Akan Di Hapus\")'
					href='" . site_url("Pasien/hapus/$row->ID_Topography") . "' >	</a>
					
				</td>
			</tr>
					";
                        }
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <div class="text-right">
                                <ul class="pagination">
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<!-- Footable -->
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/footable/js/footable.all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<!--FooTable init-->
<script src="<?php echo base_url(); ?>assets/js/footable-init.js"></script>