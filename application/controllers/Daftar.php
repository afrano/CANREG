<?php

class Daftar extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    function index() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('password1', 'password1', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        if ($this->form_validation->run()) {
            if ($_POST['password'] != $_POST['password1']) {
                $this->session->set_flashdata('pesan_error', 'Password Tidak Sama');
                redirect('daftar');
            } else {
                $data_simpan = array(
                    'username' => $_POST['username'],
                    'password' => md5($_POST['password']),
                    'nama' => $_POST['nama'],
                    'hak_akses' => 2,
                    'status' => 0,
                );

                if ($this->user_model->tambah($data_simpan)) {
                    $this->session->set_flashdata('pesan_error', 'User Berhasil DIsimpan');
                    redirect('login');
                } else {
                    $this->session->set_flashdata('pesan_error', 'User Gagal Disimpan');
                    redirect('login');
                }
            }
        } else {
            $this->load->view('daftar/tambah_user');
        }
    }

}
