<?php

$kode = $this->db->query("SELECT max(Kode) as maxKode FROM barang");
// mencari kode tertinggi pada database 
foreach ($kode->result() as $data) {
    $noUrut = (int) substr($data->maxKode, 4, 4);
    $noUrut++;
    $char = "B";
    $newKode = $char . sprintf("%04s", $noUrut); // maka kode akan ditambah dengan B
    echo ' <input class="form-control" name="NIK" required="" type="text" readonly=""  value="' . $newKodePasien . '" id="example-text-input">';
}
?>
