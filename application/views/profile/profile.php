<div class="row">
    <div class="col-md-6 col-xs-12 center-block">
        <div class="white-box">
            <div class="user-bg"> <img width="100%" alt="user" src="<?php echo base_url(); ?>assets/plugins/images/big/d2.jpg"> </div>
            <div class="user-btm-box">
                <?php
                if (validation_errors()) {
                    echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
                }
                if ($this->session->userdata('pesan_error')) {
                    echo "<div class='alert alert-danger'>" . $this->session->userdata('pesan_error') . "</div>";
                }
                if ($this->session->userdata('pesan_sukses')) {
                    echo "<div class='alert alert-success'>" . $this->session->userdata('pesan_sukses') . "</div>";
                }
                ?>
                <!-- .row -->
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
                    <div class="col-md-6 b-r"><strong>Tanggal Lahir</strong>
                        <p>24 Mei 1996</p>
                    </div>
                    <div class="col-md-6"><strong>Telepon</strong>
                        <p>+6282255916644</p>
                    </div>
                </div>
                <!-- /.row -->
                <hr>
                <!-- .row -->
                <div class="row text-center m-t-10">
                    <div class="col-md-12"><strong>Alamat</strong>
                        <p>Jalan Paingan 2 
                            <br/> Sleman, Yogyakarta.</p>
                    </div>
                </div>
                <hr>
                <div>
                    <a href="#" data-toggle="modal" data-target="#add-new-event"  class='btn btn-skype'>
                        <i class='ti-settings '> Ubah</i> 
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade none-border" id="add-new-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><strong><center>Ubah Data</center></strong></h4>
            </div>
            <div class="modal-body">

                <form class="form-group" action="<?= site_url($this->uri->uri_string()) ?>" method="POST">
                    <input type='hidden' class="form-control" value="<?= $row->id_user ?>" name="id_user" required="true" />
                    <div class="form-group">
                        <label>Nama User</label>
                        <input class="form-control" name="nama" value="<?= $row->nama ?>" required="true"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" value="<?= $row->username ?>" type="email" name="username" required="true" />
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input class="form-control" value="<?= $row->password ?>" type="password" name="password" />
                    </div>
                    <div class='form-group'>
                        <button class="btn btn-skype">Simpan</button>

                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>