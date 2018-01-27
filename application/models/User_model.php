<?php

class User_model extends ci_model {

    public $nama_tabel = 'tb_user';
    public $data_pasien = 'data_pasien';
    public $data_tumor_pasien = 'data_tumor_pasien';
                function __construct() {
        parent::__construct();
    }

    function get_all() {
        $this->db->join('akses', "akses.id_akses = $this->nama_tabel.hak_akses", 'LEFT');
        $query = $this->db->get($this->nama_tabel);
        return $query;
    }

    function get_allPasien() {
        $this->db->join('data_tumor_pasien', "data_tumor_pasien.NIK = $this->data_pasien.NIK", 'LEFT');
        $query = $this->db->get($this->data_pasien);
        return $query;
    }

    function get_byid($id_user) {
        $query = $this->db->get_where($this->nama_tabel, array('id_user' => $id_user));
        if ($query)
            return $query;
        return false;
    }
     function get_byNIK($NIK) {
        $query = $this->db->get_where($this->data_tumor_pasien, array('NIK' => $NIK));
        if ($query)
            return $query;
        return false;
    }

    function get_byusername($id_user) {
        $query = $this->db->get_where($this->nama_tabel, array('username' => $id_user));
        if ($query)
            return $query;
        return false;
    }

    function tambah($data_user) {
        $query = $this->db->insert($this->nama_tabel, $data_user);
        if ($query)
            return $query;
        return false;
    }

    /*
     *
     * Sesuaikan variable id_ser dengan primarykey tabel  
     */

    function ubah($id_user, $data_user) {
        $this->db->where('id_user', $id_user);
        $query = $this->db->update($this->nama_tabel, $data_user, array('id_user' => $id_user));
        if ($query)
            return $query;
        return false;
    }

    function hapus($id_user) {
        $this->db->where('id_user', $id_user);
        $query = $this->db->delete($this->nama_tabel);
        if ($query)
            return $query;
        return false;
    }
    function hapusPasien($NIK) {
        $this->db->where('NIK', $NIK);
        $query = $this->db->delete($this->data_tumor_pasien,  $this->data_pasien);
      //  $query1 = $this->db->delete($this->data_pasien);
        if ($query)
            return $query;
        return false;
    }

}
