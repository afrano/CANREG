<div class="row">
    <div class="col-lg-12">
        <div class="white-box">

            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>ID User</th>
                        <th data-hide="phone, tablet">Email</th>
                        <th data-hide="phone, tablet">Nama</th>
                        <th data-hide="phone, tablet">Hal Akses</th>
                        <th data-sort-ignore="true" class="min-width">Action</th>
                    </tr>
                </thead>
                <div class="form-inline padding-bottom-15">
                    <div class="row">

                        <div class="col-sm-12 text-right m-b-20">

                            <div class="form-group">

                                <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">

                            </div>

                        </div>
                    </div>
                </div>
                <tbody>
                    <?php
                    $no = 0;
                    if ($data_user->num_rows() > 0) {
                        foreach ($data_user->result() as $row) {
                            $no++;
                            if ($row->status == 0) {
                                $link = "<a class='glyphicon glyphicon-cog' style='color:red'	href='" . site_url("user/aktif/$row->id_user") . "' ></a>";
                            } else {
                                $link = "<a class='glyphicon glyphicon-wrench ' style='color:blue' href='" . site_url("user/aktif/$row->id_user") . "' ></a>";
                            }
                            echo "
			<tr>
				<td>$no</td>
                                <td>$row->id_user_lokal</td>
				<td>$row->username</td>
				<td>$row->nama</td>
				<td>$row->nama_akses</td>
				<td >
					<a class='glyphicon glyphicon-pencil' 
					href='" . site_url("user/ubah/$row->id_user") . "' >	</a>
					
					<a class='glyphicon glyphicon-trash' 
                                        onclick='return confirm(\"Data Akan Di Hapus\")'
					href='" . site_url("user/hapus/$row->id_user") . "' >	</a>
					
					$link
				
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