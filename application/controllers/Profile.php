<?php

class Profile extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    function index() {
        $data_user = $this->user_model->get_byusername($this->session->userdata('username'));
        $data['row'] = $data_user->row();
        $data['isi'] = 'profile/profile';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function update() {
        $config = array(
            'upload_path' => './assets/upload',
            'allowed_types' => 'gif|jpg|JPG|png',
            'max_size' => '150',
        );
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto');
        $upload_data = $this->upload->data();
        $file_name = $upload_data['file_name'];

        if ($_POST['password'] != NULL) {
            $data_simpan = array(
                'username' => $_POST['username'],
                'nama' => $_POST['nama'],
                'foto' => $file_name,
                'nik' => $_POST['nik'],
                'telepon' => $_POST['telepon'],
                'alamat' => $_POST['alamat'],
                'password' => md5($_POST['password']),
                'tanggal_lahir' => $_POST['tanggal_lahir'],
            );
        } else {
            $data_simpan = array(
                'username' => $_POST['username'],
                'nama' => $_POST['nama'],
                'foto' => $file_name,
                'nik' => $_POST['nik'],
                'telepon' => $_POST['telepon'],
                'alamat' => $_POST['alamat'],
                'tanggal_lahir' => $_POST['tanggal_lahir'],
            );
        }

        if ($this->user_model->ubah($_POST['id_user'], $data_simpan)) {
            $this->session->set_flashdata('pesan_sukses', 'Data Berhasil Disimpan');
            redirect('profile');
        } else {
            $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
            redirect('profile');
        }
    }

}
