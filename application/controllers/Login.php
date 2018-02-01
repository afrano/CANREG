<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        if ($this->session->userdata('berhasil_login')) {
            redirect(base_url() .'dashboard');
        } else {
            $this->load->view('login/login');
        }
    }

    function cek_login() {
        $this->form_validation->set_rules('email', 'Input Username', 'valid_email|required|min_length[5]');
        $this->form_validation->set_rules('password', 'Input Password', 'required|min_length[3]');
        if ($this->form_validation->run()) {
//            Proses Login
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            // sesuaikan dengan tabel database
            $query = $this->db->get_where('tb_user', array('username' => $email,
                'password' => md5($password), 'status' => 1)
            );
            if ($query->num_rows() == 1) {
                $row = $query->row();
                $data_sesi = array(
                    'username' => $email, 'nama' => $row->nama, 'hak_akses' => $row->hak_akses,
                    'berhasil_login' => true
                );
                $this->session->set_userdata($data_sesi);
                redirect(base_url() . 'dashboard');
            } else {
                $this->session->set_flashdata('pesan_error', 'Gagal Login Username/Password salah !!!');
                redirect('login');
            }
        } else {
//            Jika Validasi Gagal Tampilkan Halaman Login Dan Error
            $this->load->view('login/login');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}
