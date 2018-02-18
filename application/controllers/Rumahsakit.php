<?php

class Rumahsakit extends ci_controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        cek_login();
        cek_hakakses(array(1));
    }

    public function index() {
        $data['alldata'] = $this->user_model->get_alldata('rumah_sakit');
        $data['isi'] = 'rumahsakit/rumahsakit';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function tambah() {
        $table = 'rumah_sakit';
        $kode = 'Kode_Rumah_Sakit';
        $nama = 'Nama_Rumah_Sakit';
        $alamat = 'Alamat';
        $method = 'Rumahsakit';
        $isinya = 'rumahsakit/rumahsakit';
        $this->form_validation->set_rules($kode, $kode, 'required');
        $this->form_validation->set_rules($nama, $nama, 'required');
        $this->form_validation->set_rules($alamat, $alamat, 'required');
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $ID = $_POST[$kode];
        if ($this->form_validation->run()) {
            $data_simpan = array(
                $kode => $_POST[$kode],
                $nama => $_POST[$nama],
                $alamat => $_POST[$alamat],
                'Create_Date' => $Create_Date,
            );
            $where = $kode;
            $Cek = 0;
            $Cek = $this->user_model->Cekdata($table, $where, $ID)->result_array();
            if ($Cek == NULL) {
                if ($this->user_model->tambahData($table, $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil Disimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Sudah ada');
                redirect(base_url() . $method);
            }
        } else {
            $data['isi'] = $isinya;
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubah($ID = null) {
        $table = 'rumah_sakit';
        $Kode = 'Kode_Rumah_Sakit';
        $nama = 'Nama_Rumah_Sakit';
        $alamat = 'Alamat';
        $method = 'Rumahsakit';
        $isinya = 'rumahsakit/ubah_rumahsakit';
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        if ($datarumahsakit = $this->user_model->getdata_bykode($table, $Kode, $ID)) {
            $this->form_validation->set_rules($Kode, $Kode, 'required');
            $this->form_validation->set_rules($nama, $nama, 'required');
            $this->form_validation->set_rules($alamat, $alamat, 'required');
            if ($this->form_validation->run()) {
                $datarumahsakit = array(
                    $Kode => $_POST[$Kode],
                    $nama => $_POST[$nama],
                    $alamat => $_POST[$alamat],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $Kode, $ID, $datarumahsakit)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $datarumahsakit->row();
                $data['isi'] = $isinya;
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapus($kode = null) {
        $table = 'rumah_sakit';
        $method = 'Rumahsakit';
        $where = 'Kode_Rumah_Sakit';
        if ($this->user_model->getdata_bykode($table, $where, $kode)) {
            if ($this->user_model->Hapusdata($table, array($where => $kode))) {
                $this->session->set_flashdata('pesan_sukses', 'Data berhasil Di Hapus');
                redirect($method);
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Gagal Di Hapus');
                redirect($method);
            }
        } else {
            echo "Data Tidak Ditemukan";
        }
    }

}
