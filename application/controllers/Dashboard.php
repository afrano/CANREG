<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        cek_login();
        cek_hakakses(array(1, 2, 3,4));
    }

    function index() {
        $data['laporan'] = $this->user_model->totalpasien();
        $data['isi'] = 'laporan/dashboard';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

}
