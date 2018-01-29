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
        $data['isi'] = 'pasien/addPasien';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function tambah_pasien() {
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $NIK = $_POST['NIK'];
        $ID_Distant_Metastases = 1;
        $ID_Treatment = $_POST['ID_Treatment'];
        $jumlah_dipilih = count($ID_Treatment);

        $datapasien = array(
            'NIK' => $_POST['NIK'],
            'MRN' => $_POST['MRN'],
            'First_Name' => $_POST['First_Name'],
            'Middle_Name' => $_POST['Middle_Name'],
            'Family_Name' => $_POST['Family_Name'],
            'Place_Of_Birth' => $_POST['Place_Of_Birth'],
            'Date_Of_Birth' => $_POST['Date_Of_Birth'],
            'ID_Alamat_Tetap' => $_POST['ID_Alamat_Tetap'],
            'ID_Alamat_Sementara' => $_POST['ID_Alamat_Sementara'],
            'ID_Sex' => $_POST['ID_Sex'],
            'ID_Race' => $_POST['ID_Race'],
            'ID_Religion' => $_POST['ID_Religion'],
            'ID_Status_Pernikahan' => $_POST['ID_Status_Pernikahan'],
            'ID_Occupation' => $_POST['ID_Occupation'],
            'No_Telpon' => $_POST['No_Telpon'],
            'Create_Date' => $Create_Date,
        );
        $Cek = 0;
        $Cek = $this->user_model->CekPasien($NIK)->result_array();

        $datatumor = array(
            'NIK' => $NIK,
            'ID_Topography' => $_POST['ID_Topography'],
            'ID_Morphology' => $_POST['ID_Morphology'],
            'ID_Diagnosis' => $_POST['ID_Diagnosis'],
            'ID_Disease' => $_POST['ID_Disease'],
            'ID_Treatment' => $ID_Treatment[$x],
            'Diagnosis_Klinis' => $_POST['Diagnosis_Klinis'],
            'Diagnosis_Date' => $_POST['Diagnosis_Date'],
            'ID_Behaviour' => $_POST['ID_Behaviour'],
            'ID_Distant_Metastases' => $ID_Distant_Metastases,
            'No_Of_Metastases' => $_POST['No_Of_Metastases'],
            'ID_Grade' => $_POST['ID_Grade'],
            'ID_Stage' => $_POST['ID_Stage'],
            'ID_Laterality' => $_POST['ID_Laterality'],
            'ID_Immunohistokimia' => $_POST['ID_Immunohistokimia'],
            'Date_IHC' => $_POST['Date_IHC'],
            'ID_Hybridization' => $_POST['ID_Hybridization'],
            'Date' => $_POST['Date'],
            'ID_Biopsy' => $_POST['ID_Biopsy'],
            'ID_Sublocation' => $_POST['ID_Sublocation'],
            'Create_Date' => $Create_Date,
        );
        if ($Cek == NULL) {
            $this->user_model->Simpan('data_pasien', $datapasien);
            $this->user_model->Simpan('data_tumor_pasien', $datatumor);
            $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil Disimpan</strong></div>");
            redirect('Pasien');
        } else {
            $this->user_model->Simpan('data_tumor_pasien', $datatumor);
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Maaf Data Sudah Ada</strong></div>");
            redirect('Pasien');
        }
        
        for ($x = 0; $x < $jumlah_dipilih; $x++) {
            $this->db->query("INSERT INTO treatment_pasien values('','$ID_Treatment[$x]','$NIK','$Create_Date','')");
        }
        redirect('Pasien');
    }

    public function DataTumorPasien() {
        $NIK = 1;
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $ID_Distant_Metastases = 1;
        foreach ($_POST['ID_Treatment[]'] as $selected) {
            $datatumor = array(
                'NIK' => $NIK,
                'ID_Topography' => $_POST['ID_Topography'],
                'ID_Morphology' => $_POST['ID_Morphology'],
                'ID_Diagnosis' => $_POST['ID_Diagnosis'],
                'ID_Disease' => $_POST['ID_Disease'],
                'ID_Treatment' => $selected,
                'Diagnosis_Klinis' => $_POST['Diagnosis_Klinis'],
                'Diagnosis_Date' => $_POST['Diagnosis_Date'],
                'ID_Behaviour' => $_POST['ID_Behaviour'],
                'ID_Distant_Metastases' => $ID_Distant_Metastases,
                'No_Of_Metastases' => $_POST['No_Of_Metastases'],
                'ID_Grade' => $_POST['ID_Grade'],
                'ID_Stage' => $_POST['ID_Stage'],
                'ID_Laterality' => $_POST['ID_Laterality'],
                'ID_Immunohistokimia' => $_POST['ID_Immunohistokimia'],
                'Date_IHC' => $_POST['Date_IHC'],
                'ID_Hybridization' => $_POST['ID_Hybridization'],
                'Date' => $_POST['Date'],
                'ID_Biopsy' => $_POST['ID_Biopsy'],
                'ID_Sublocation' => $_POST['ID_Sublocation'],
                'Create_Date' => $Create_Date,
            );
        }

        $this->User_model->Simpan('data_tumor_pasien', $datatumor);
        $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil Disimpan</strong></div>");
        header('location:' . base_url() . 'Pasien');
//        } else {
//            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Maaf Data Sudah Ada</strong></div>");
//            header('location:' . base_url() . 'Tumor/Topography');
//        }
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
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Gagal Di Hapus');
                redirect('Pasien');
            }
        } else {
            echo "Data Tidak Ditemukan";
        }
    }

}
