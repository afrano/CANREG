<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3><center><text style="color: #009999"><b>Tambah User</b></center></h3>
            <?php
            if (validation_errors()) {
                echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
            }
            ?>
            <form class="form-group" action="<?= site_url('user/tambah_user') ?>"  method="POST">
                <?php
                $kode = $this->db->query("SELECT max(id_user_lokal) as maxKode FROM tb_user");
                foreach ($kode->result() as $data) {
                    $noUrut = (int) substr($data->maxKode, 11, 11);
                    $noUrut++;
                    $char = "SU" . date('ydm');
                    $newKode = $char . sprintf("%04s", $noUrut);
                }
                ?>
                <div class="form-group">
                    <center><span class="sl-date">ID : <?php echo $newKode; ?></span></center>
                    <input class="form-control" hidden="" readonly="" type="text" value="<?php echo $newKode; ?>" name="id_user_lokal" required="true" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="username" required="true" />
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input class="form-control" type="password" name="password" required="true" />
                </div>
                <div class="form-group">
                    <label>Nama User</label>
                    <input class="form-control" name="nama" required="true"/>
                </div>
                <div class="form-group">
                    <label>Hak Akses</label>
                    <select name='hak_akses' class="form-control" required="true">
                        <option value="">Pilih Hak Akses</option>
                        <?php
                        $query = $this->db->get('akses');
                        foreach ($query->result() as $row) {
                            echo "<option value='$row->id_akses'>$row->nama_akses</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name='status' class="form-control" required="true">
                        <option value="">Pilih Status User</option>
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                </div>
                <div class='form-group'>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>