<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        cek_login();
        cek_hakakses(array(1, 2, 3));
    }

    private function _cek_login() {
        if (!$this->session->userdata('useradmin')) {
            redirect(base_url() . 'login');
        }
    }

    public function index() {
        cek_hakakses(array(1));
        $data['data_pasien'] = $this->user_model->get_allPasien();
        $data['isi'] = 'pasien/v_pasien';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    public function addPasien() {
        $data['isi'] = 'pasien/FormPasien';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function ubah($id_user = null) {
        cek_hakakses(array(1));
        if ($data_user = $this->user_model->get_byid($id_user)) {
            $this->form_validation->set_rules('username', 'Username', 'required');
            //   $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('hak_akses', 'hak_akses', 'required');
            $this->form_validation->set_rules('status', 'status', 'required');
            if ($this->form_validation->run()) {
                $data_simpan = array(
                    'username' => $_POST['username'],
                    //         'password' => md5($_POST['password']),
                    'nama' => $_POST['nama'],
                    'hak_akses' => $_POST['hak_akses'],
                    'status' => $_POST['status'],
                );

                if ($this->user_model->ubah($id_user, $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect('pasien/v_pasien');
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect('pasien/v_pasien');
                }
            } else {
                $data['row'] = $data_user->row();
                $data['isi'] = 'pasien/v_pasien';
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function aktif($id) {
        cek_hakakses(array(1));
        if (isset($id)) { //memastikan ID user exist
            if ($data_user = $this->user_model->get_byid($id)) { //cek databse id_user ada
                $row = $data_user->row();
                if ($row->status == 0) {
                    //sesuaikan nama tabelnya dan primary key nya
                    $this->db->update('tb_user', array('status' => 1), array('id_user' => $id));
                    redirect('user');
                } else {
                    //sesuaikan nama tabelnya dan primary key nya
                    $this->db->update('tb_user', array('status' => 0), array('id_user' => $id));
                    redirect('user');
                }
            } else {
                echo 'Data Tidak Ditemukan';
            }
        } else {
            echo 'error disallowed uri';
        }
    }

    function hapus($NIK = null) {
        cek_hakakses(array(1));
        if ($this->user_model->get_byNIK($NIK)) {
            if ($this->user_model->hapusPasien($NIK)) {
                $this->session->set_flashdata('pesan_sukses', 'Data berhasil Di Hapus');
                redirect('Pasien');
            }else{
                  $this->session->set_flashdata('pesan_error', 'Data Gagal Di Hapus');
                redirect('Pasien');
            }
        } else {
            echo "Data Tidak Ditemukan";
        }
    }

}
