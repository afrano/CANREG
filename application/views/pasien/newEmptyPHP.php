<?php

$kode = $this->db->query("SELECT max(Kode) as maxKode FROM data_pasien");
foreach ($kode->result() as $data) {
    $noUrut = (int) substr($data->maxKode, 3, 3);
    $noUrut++;
    $char = date("Ym");
    $newKodePasien = $char . sprintf("%03s", $noUrut);
    echo ' <input class="form-control" name="NIK" required="" type="text" readonly=""  value="' . $newKodePasien . '" id="example-text-input">';
}
?>
