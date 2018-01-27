<?php

class Tumor extends ci_controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        cek_login();
        cek_hakakses(array(1));
    }

    function index() {
        $data['data_user'] = $this->user_model->get_all();
        $data['isi'] = 'user/v_user';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/v_dashboard', $data);
    }
     public function Topography() {
        cek_hakakses(array(1));
        $data['data_pasien'] = $this->user_model->get_allPasien();
        $data['isi'] = 'tumor/Topography/Topography';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }


    function tambah_user() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('hak_akses', 'hak_akses', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        if ($this->form_validation->run()) {
            $data_simpan = array(
                'username' => $_POST['username'],
                'password' => md5($_POST['password']),
                'nama' => $_POST['nama'],
                'hak_akses' => $_POST['hak_akses'],
                'status' => $_POST['status'],
            );

            if ($this->user_model->tambah($data_simpan)) {
                $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                redirect('user');
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                redirect('user');
            }
        } else {
            $data['isi'] = 'user/tambah_user';
            $data['title'] = 'Data User';
            $this->load->view('dashboard/v_dashboard', $data);
        }
    }

}
