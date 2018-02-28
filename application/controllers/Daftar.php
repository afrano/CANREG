<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

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
        $this->form_validation->set_rules('id_user_lokal', 'id_user_lokal', 'required');
        if ($this->form_validation->run()) {
            if ($_POST['password'] != $_POST['password1']) {
                $this->session->set_flashdata('pesan_error', 'Password Tidak Sama');
                redirect(base_url() + 'daftar');
            } else {
                $Cek = 0;
                $Cek = $this->user_model->Cekdata('tb_user', 'id_user_lokal', $_POST['id_user_lokal'])->result_array();
                if ($Cek != NULL) {
                    $data_simpan = array(
                        'username' => $_POST['username'],
                        'password' => md5($_POST['password']),
                        'nama' => $_POST['nama'],
                        'id_user_lokal' => $_POST['id_user_lokal'],
                        'hak_akses' => 3,
                        'status' => 0,
                    );

                    if ($this->user_model->tambah($data_simpan)) {
                        $this->session->set_flashdata('pesan_error', 'User Berhasil Disimpan');
                        redirect(base_url() + 'login');
                    } else {
                        $this->session->set_flashdata('pesan_error', 'User Gagal Disimpan');
                        redirect(base_url() + 'login');
                    }
                } else {
                    $this->session->set_flashdata('pesan_error', 'ID user tidak sama');
                     $this->load->view('daftar/tambah_user');
                }
            }
        } else {
            $this->load->view('daftar/tambah_user');
        }
    }

}
