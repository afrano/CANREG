<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3><center><text style="color: #009999"><b>Profile <?= $row->nama ?></b></center></h3>
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
            <form class="form-group" action="<?= site_url($this->uri->uri_string()) ?>" method="POST">
                <div class="form-group">
                    <label>Email</label>
                    <input type='hidden' class="form-control" value="<?= $row->id_user ?>" name="id_user" required="true" />
                    <input class="form-control" value="<?= $row->username ?>" name="username" required="true" />
                </div>
                <div class="form-group">
                    <label>Nama User</label>
                    <input class="form-control" name="nama" value="<?= $row->nama ?>" required="true"/>
                </div>
                <div class='form-group'>
                    <button class="btn btn-danger"> << Kembali </button>
                    <button class="btn btn-skype">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>