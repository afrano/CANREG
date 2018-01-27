<?php

class Profile extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    function index() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
//        $this->form_validation->set_rules('hak_akses', 'hak_akses', 'required');
//        $this->form_validation->set_rules('status', 'status', 'required');
        if ($this->form_validation->run()) {
            $data_simpan = array(
                'username' => $_POST['username'],
                'nama' => $_POST['nama']
            );

            if ($this->user_model->ubah($_POST['id_user'], $data_simpan)) {
                $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                redirect('profile');
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                redirect('profile');
            }
        } else {
            $data_user = $this->user_model->get_byusername($this->session->userdata('username'));
            $data['row'] = $data_user->row();
            $data['isi'] = 'profile/ubah_user';
            $data['title'] = 'Data User';
            $this->load->view('dashboard/v_dashboard', $data);
        }
    }

}
