
<?php
$data_pasien = $this->db->get_where('data_tumor_pasien', array('id_registrar' => $row->id_user), '10');
$localadmin = $this->db->get_where('tb_user', array('id_user_lokal' => $this->session->userdata('id_user_lokal')));
$count = $this->db->query('select count(NIK) as jumlah from data_tumor_pasien where id_registrar = ' . $row->id_user . ' order by NIK');
if ($row->foto == NULL) {
    $gambar = 'afrano.png';
} else {
    $gambar = $row->foto;
}
?>
<div class="row">
    <div class="col-md-11 col-xs-12">
        <div class="white-box">
            <ul class="nav customtab nav-tabs" role="tablist">
                <li role="presentation" class="nav-item"><a href="#home" class="nav-link active" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="fa fa-home"></i></span><span class="hidden-xs"> Profile</span></a></li>
                <li role="presentation" class="nav-item"><a href="#profile" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Activity</span></a></li>
                <li role="presentation" class="nav-item"><a href="#settings" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Setting</span></a></li>
                <?php if ($this->session->userdata('hak_akses') != 3) { ?>
                    <li role="presentation" class="nav-item"><a href="#messages" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-envelope-o"></i></span> <span class="hidden-xs">Local Admin</span></a></li>
                <?php } ?>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <center>   <a class="image-popup-vertical-fit" href="<?php echo base_url(); ?>assets/upload/<?= $gambar ?>"><img  style="width:30%;height:30%" src="<?php echo base_url(); ?>assets/upload/<?= $gambar ?>" />  </a>                       
                    </center>
                    <div class="user-btm-box">
                        <div class="row text-center m-t-10">
                            <input type='hidden' class="form-control" value="<?= $row->id_user ?>" name="id_user" required="true" />
                            <div class="col-md-6 b-r"><strong>Name</strong>
                                <p><?= $row->nama ?></p>
                            </div>
                            <div class="col-md-6"><strong>Email</strong>
                                <p><?= $row->username ?></p>
                            </div>
                        </div>
                        <!-- /.row -->
                        <hr>
                        <!-- .row -->
                        <div class="row text-center m-t-10">
                            <div class="col-md-6"><strong>NIK</strong>
                                <p><?= $row->nik ?></p>
                            </div>
                            <div class="col-md-6 b-r"><strong>Tanggal Lahir</strong>
                                <p><?= $row->tanggal_lahir ?></p>
                            </div>

                        </div>
                        <!-- /.row -->
                        <hr>
                        <!-- .row -->
                        <div class="row text-center m-t-10">
                            <div class="col-md-6"><strong>Alamat</strong>
                                <p><?= $row->alamat ?></p>
                            </div>
                            <div class="col-md-6"><strong>Telepon</strong>
                                <p><?= $row->telepon ?></p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="profile">

                    <div class="steamline">
                        <?php
                        foreach ($data_pasien->result() as $data_pasien) {
                            ?>
                            <div class="sl-item">
                                <div class="sl-right">
                                    <div class="m-l-40"><a href='<?php echo base_url("Pasien/DetailPasien/$data_pasien->NIK") ?>' class="text-info"><?php echo $data_pasien->NIK; ?></a> <span class="sl-date"><?php echo $data_pasien->Create_Date; ?></span>
                                    </div>
                                </div>
                            </div>
                            <hr><?php } foreach ($count->result() as $count) {
                            ?><span class="sl-date">Total Upload : <?php
                            echo $count->jumlah;
                        }
                        ?></span>
                    </div>
                </div>
                <!-- ubah Profile !-->
                <div class="tab-pane" id="settings">
                    <form class="form-group" action="<?= base_url('Profile/update') ?>" method="POST" enctype="multipart/form-data">
                        <center>
                            <div class="form-group">

                                <img  id="gambarnya"  style="width:35%;height:30%" src="<?php echo base_url(); ?>assets/upload/<?= $gambar ?>" />               
                                <input name="foto"  class="form-group" value=""  type="file" id="imgInput"  onclick="document.getElementById('file').click();"  />
                            </div></center>
                        <input type='hidden' class="form-control" value="<?= $row->id_user ?>" name="id_user" required="true" />


                        <div class="row text-center m-t-10">
                            <div class="col-md-6 b-r"><strong>Nama User</strong>
                                <p><input class="form-control" name="nama"  value="<?= $row->nama ?>" type="text" /></p>
                            </div>
                            <div class="col-md-6"><strong>Email</strong>
                                <p><input class="form-control" name="username"  value="<?= $row->username ?>" type="email" name="telepon" /></p>
                            </div>
                        </div>


                        <div class="row text-center m-t-10">
                            <div class="col-md-6 b-r"><strong>Password</strong>
                                <p><input class="form-control" name="password" value="" placeholder="update password" type="password" /></p>
                            </div>
                            <div class="col-md-6"><strong>NIK</strong>
                                <p><input class="form-control" value="<?= $row->nik ?>" required="" type="number" name="nik" /></p>
                            </div>
                        </div>

                        <div class="row text-center m-t-10">
                            <div class="col-md-6 b-r"><strong>Tanggal Lahir</strong>
                                <p><input class="form-control" value="<?= $row->tanggal_lahir ?>" required="" type="date" name="tanggal_lahir" /></p>
                            </div>
                            <div class="col-md-6"><strong>Telepon</strong>
                                <p><input class="form-control" value="<?= $row->telepon ?>" required="" type="number" name="telepon" /></p>
                            </div>
                        </div>
                        <div class="row text-center m-t-10">
                            <div class="col-md-12 b-r"><strong>Alamat</strong>
                                <p><input class="form-control" value="<?= $row->alamat ?>" required="" type="text" name="alamat" /></p>
                            </div>
                        </div>



                        <script>
                            function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function (e) {
                                        $('#gambarnya').attr('src', e.target.result);
                                    };

                                    reader.readAsDataURL(input.files[0]);
                                }
                            }

                            $("#imgInput").change(function () {
                                readURL(this);
                            });
                        </script>
                        <div class="form-group">
                            <div class="col-sm-12"><br>
                                <button class="btn btn-success">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Local Admin  !-->
                <?php if ($this->session->userdata('hak_akses') != 3) { ?>
                    <div class="tab-pane" id="messages">
                        <div class="steamline">
                            <?php
                            foreach ($localadmin->result() as $rowlocal) {
                                if ($rowlocal->username != $this->session->userdata('username')) {
                                    if ($rowlocal->foto == NULL) {
                                        $foto = 'afrano.png';
                                    } else {
                                        $foto = $rowlocal->foto;
                                    }
                                    ?>
                                    <div class="sl-left"> <img src="<?php echo base_url(); ?>assets/upload/<?= $foto ?>" alt="user" class="img-circle" /> </div>
                                    <div class="sl-right">
                                        <div class="m-l-40"> <a href="#" class="text-info"><?php echo $rowlocal->nama; ?></a>
                                            <div class="m-t-20 row">
                                                <div class="col-md-2 col-xs-12">
                                                    <a class="image-popup-vertical-fit" href="<?php echo base_url(); ?>assets/upload/<?= $foto ?>"><img style="width:100%;height:100%"  alt="user"  src="<?php echo base_url(); ?>assets/upload/<?= $foto ?>" /></a>
                                                </div>
                                                <div class="col-md-9 col-xs-12">
                                                    <p>Alamat : <?php echo $rowlocal->alamat; ?></p><br><p>Telepon : <?php echo $rowlocal->telepon; ?></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>  <hr><?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Magnific popup JavaScript -->
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>