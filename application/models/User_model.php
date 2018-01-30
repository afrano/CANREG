<?php

class User_model extends ci_model {

    public $nama_tabel = 'tb_user';
    public $data_pasien = 'data_pasien';
    public $data_tumor_pasien = 'data_tumor_pasien';
    public $Topography = 'Topography';

    function __construct() {
        parent::__construct();
    }

    function get_all() {
        $this->db->join('akses', "akses.id_akses = $this->nama_tabel.hak_akses", 'LEFT');
        $query = $this->db->get($this->nama_tabel);
        return $query;
    }

    function get_Topography() {
        $this->db->select('*');
        $this->db->from('Topography');
        $query = $this->db->get();
        return $query;
    }

//    public function insertTeat($ID, $teatment, $Create_Date) {
//        $data = $this->db->query("INSERT INTO treatment_pasien values('','$ID',$teatment[$x]','$Create_Date')");
//        return $data;
//    }

    function get_allPasien() {
        $data = $this->db->query('SELECT * from data_pasien ');
        return $data;

//        select * from data_Pasien p, data_tumor_pasien dt, treatment_pasien tp where p.NIK = "213" and dt.NIK = "213" and tp.NIK = "213"
//        $this->db->join('data_tumor_pasien', "data_tumor_pasien.NIK = $this->data_pasien.NIK", 'LEFT');
//        $query = $this->db->get($this->data_pasien);
//        return $query;
    }

    function get_DetailPasien($NIK) {
        $data = $this->db->query('select * from data_Pasien p, data_tumor_pasien dt, treatment_pasien tp where p.NIK = "' . $NIK . '" and dt.NIK = "' . $NIK . '" and tp.NIK = "' . $NIK . '"');
        return $data;
    }

    function get_joinPasienTumor() {
        $this->db->join('data_tumor_pasien', "data_tumor_pasien.NIK = $this->data_pasien.NIK", 'LEFT');
        $query = $this->db->get($this->data_pasien);
        return $query;
    }

    public function CekPasien($where) {
        $data = $this->db->query('SELECT * from data_pasien where NIK = "' . $where . '" ');
        return $data;
    }

    function get_byid($id_user) {
        $query = $this->db->get_where($this->nama_tabel, array('id_user' => $id_user));
        if ($query)
            return $query;
        return false;
    }

    function get_DetilPasien($NIK) {
//        $this->db->join('data_tumor_pasien', "data_tumor_pasien.NIK = $this->data_pasien.NIK", 'LEFT');
//        $query = $this->db->get($this->nama_tabel);
//        return $query;

        $query = $this->db->get_where($this->data_pasien, array('NIK' => $NIK));
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

    public function Simpan($table, $data) {
        return $this->db->insert($table, $data);
    }

    public function SimpanArray($table, $data) {
        return $this->db->insert($table, $data);
    }

    function tambahTopography($data_user) {
        $query = $this->db->insert('topography', $data_user);
        if ($query)
            return $query;
        return false;
    }

    public function CekTumor($where) {
        $data = $this->db->query('SELECT * from topography where id_topography = "' . $where . '" ');
        return $data;
    }

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
        $query = $this->db->delete($this->data_tumor_pasien, $this->data_pasien);
        //  $query1 = $this->db->delete($this->data_pasien);
        if ($query)
            return $query;
        return false;
    }

    function get_all_provinsi() {
        $this->db->select('*');
        $this->db->from('wilayah_provinsi');
        $query = $this->db->get();
        return $query->result();
    }

}
