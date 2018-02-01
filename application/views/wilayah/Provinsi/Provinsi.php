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
            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="10">
                <thead>
                    <tr>
                        <th data-hide="phone, tablet"><center>NO</center></th>
                        <th data-hide="phone, tablet"><center>Nama Provinsi</center></th>
                    </tr>
                </thead>
                <div class="form-inline padding-bottom-15">
                    <div class="col-sm-12 text-right m-b-20">
                        <h4><strong><center>Data Provinsi</center></strong></h4>
                    </div>
                    <div class="row">

                        <div class="col-sm-12 text-right m-b-20">


                        </div>
                    </div>
                </div>
                <tbody>
                    <?php
                    $no = 0;

                    if ($alldata->num_rows() > 0) {
                        foreach ($alldata->result() as $row) {
                            $no++;
                            echo "
			<tr>
				<td><center>$no</center></td>
				<td><center>$row->nama</center></td>
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