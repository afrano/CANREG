<?php

class Wilayah extends ci_controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        cek_login();
        cek_hakakses(array(1));
    }

    function index() {
        $data['alldata'] = $this->user_model->get_alldata('wilayah_provinsi');
        $data['isi'] = 'wilayah/Provinsi/Provinsi';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function Kabupaten() {
        $data['alldata'] = $this->user_model->get_alldata('wilayah_kabupaten');
        $data['isi'] = 'wilayah/Kabupaten/Kabupaten';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }
}
