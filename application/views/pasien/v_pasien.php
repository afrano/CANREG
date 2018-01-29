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
                        <th data-hide="phone, tablet"><center>NO</center></th>
                <th data-hide="phone, tablet"><center>NIK</center></th>
                <th data-hide="phone, tablet"><center>MRN</center></th>
                <th data-hide="phone, tablet"><center>First Name</center></th>
                <th data-hide="phone, tablet"><center>Family Name</center></th>
                <th data-sort-ignore="true" class="min-width"><center>Action</center></th>
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
                    $no = 0;
                    if ($data_pasien->num_rows() > 0) {
                        foreach ($data_pasien->result() as $row) {
                            $no++;
                            echo "
			<tr>
                                <td><center>$no</center></td>
				<td><center>$row->NIK</center></td>
				<td><center>$row->MRN</center></td>
				<td><center>$row->First_Name</center></td>
				<td><center>$row->Family_Name</center></td>
				<td ><center>
					<a class='glyphicon glyphicon-pencil' 
					href='" . site_url("Pasien/ubah/$row->NIK") . "' ></a>
					
					<a class='glyphicon glyphicon-trash' 
                                        onclick='return confirm(\"Data Akan Di Hapus\")'
					href='" . site_url("Pasien/hapus/$row->NIK") . "' ></a>
					<a class='glyphicon glyphicon-eye-open' 
					href='" . site_url("Pasien/detailPasien/$row->NIK") . "' ></a>
				</center></td>
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