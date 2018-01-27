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
                        <th data-hide="phone, tablet">NIK</th>
                        <th data-hide="phone, tablet">MRN</th>
                        <th data-hide="phone, tablet">First Name</th>
                        <th data-hide="phone, tablet">Family Name</th>
                        <th data-sort-ignore="true" class="min-width">Action</th>
                    </tr>
                </thead>
                <div class="form-inline padding-bottom-15">
                    <div class="row">

                        <div class="col-sm-12 text-right m-b-20">

                            <div class="form-group">
                                <a href='<?= site_url('user/tambah_user') ?>' class='btn btn-primary'>
                                    <i class='glyphicon glyphicon-plus'> Tambah</i> 
                                </a>
                                <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">

                            </div>

                        </div>
                    </div>
                </div>
                <tbody>
                    <?php
                    if ($data_pasien->num_rows() > 0) {
                        foreach ($data_pasien->result() as $row) {
                            echo "
			<tr>
				<td>$row->NIK</td>
				<td>$row->MRN</td>
				<td>$row->First_Name</td>
				<td>$row->Family_Name</td>
				<td >
					<a class='glyphicon glyphicon-pencil' 
					href='" . site_url("Pasien/ubah/$row->NIK") . "' >	</a>
					
					<a class='glyphicon glyphicon-trash' 
                                        onclick='return confirm(\"Data Akan Di Hapus\")'
					href='" . site_url("Pasien/hapus/$row->NIK") . "' >	</a>
					
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