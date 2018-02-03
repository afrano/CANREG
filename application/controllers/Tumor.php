<?php

class Tumor extends ci_controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        cek_login();
        cek_hakakses(array(1));
    }

    public function Topography() {
        $data['alldata'] = $this->user_model->get_alldata('topography');
        $data['isi'] = 'tumor/Topography/Topography';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addTopography() {
        $table = 'topography';
        $kode = 'ID_Topography';
        $nama = 'Topography';
        $method = 'Tumor/Topography';
        $isinya = 'tumor/Topography/Topography';
        $this->form_validation->set_rules($kode, $kode, 'required');
        $this->form_validation->set_rules($nama, $nama, 'required');
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $ID = $_POST[$kode];

        if ($this->form_validation->run()) {
            $data_simpan = array(
                $kode => $_POST[$kode],
                $nama => $_POST[$nama],
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
                redirect(base_url() .$method);
            }
        } else {
            $data['isi'] = $isinya;
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahTopography($ID = null) {
        $table = 'topography';
        $nama = 'Topography';
        $Kode = 'ID_Topography';
        $isinya = 'tumor/Topography/ubah_Topography';
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $method = 'Tumor/Topography';
        if ($data_tumor = $this->user_model->getdata_bykode($table, $Kode, $ID)) {
            $this->form_validation->set_rules($Kode, $Kode, 'required');
            $this->form_validation->set_rules($nama, $nama, 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    $Kode => $_POST[$Kode],
                    $nama => $_POST[$nama],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $Kode, $ID, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = $isinya;
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusTopography($kode = null) {
        cek_hakakses(array(1));
        $table = 'topography';
        $where = 'ID_Topography';
        $method = 'Tumor/Topography';
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

    //------------------------------------------------

    public function Morphology() {
        $data['alldata'] = $this->user_model->get_alldata('morphology');
        $data['isi'] = 'tumor/Morphology/Morphology';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addMorphology() {
        $table = 'morphology';
        $kode = 'ID_Morphology';
        $nama = 'Morphology';
        $method = 'Tumor/Morphology';
        $isinya = 'tumor/Morphology/Morphology';
        $ID = $_POST[$kode];
        $this->form_validation->set_rules($kode, $kode, 'required');
        $this->form_validation->set_rules($nama, $nama, 'required');
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        if ($this->form_validation->run()) {
            $data_simpan = array(
                $kode => $_POST[$kode],
                $nama => $_POST[$nama],
                'Create_Date' => $Date,
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
                redirect($method);
            }
        } else {
            $data['isi'] = $isinya;
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahMorphology($ID = null) {
        $table = 'morphology';
        $nama = 'Morphology';
        $Kode = 'ID_Morphology';
        $isinya = 'tumor/Morphology/ubah_Morphology';
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $method = 'Tumor/Morphology';
        if ($data_tumor = $this->user_model->getdata_bykode($table, $Kode, $ID)) {
            $this->form_validation->set_rules($Kode, $Kode, 'required');
            $this->form_validation->set_rules($nama, $nama, 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    $Kode => $_POST[$Kode],
                    $nama => $_POST[$nama],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $Kode, $ID, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil Disimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = $isinya;
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusMorphology($kode = null) {
        $table = 'morphology';
        $where = 'ID_Morphology';
        $method = 'Tumor/Morphology';
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

    public function BasicDiagnosis() {
        $data['alldata'] = $this->user_model->get_alldata('diagnosis_cancer');
        $data['isi'] = 'tumor/Basic_Diagnosis/BasicDiagnosis';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addDiagnosis() {
        $table = 'diagnosis_cancer';
        $kode = 'ID_Diagnosis';
        $nama = 'Diagnosis';
        $method = 'Tumor/BasicDiagnosis';
        $isinya = 'tumor/Basic_Diagnosis/BasicDiagnosis';
        $ID = $_POST[$kode];
        $this->form_validation->set_rules($kode, $kode, 'required');
        $this->form_validation->set_rules($nama, $nama, 'required');
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        if ($this->form_validation->run()) {
            $data_simpan = array(
                $kode => $_POST[$kode],
                $nama => $_POST[$nama],
                'Create_Date' => $Date,
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
                redirect($method);
            }
        } else {
            $data['isi'] = $isinya;
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahDiagnosis($ID = null) {
        $table = 'diagnosis_cancer';
        $nama = 'Diagnosis';
        $Kode = 'ID_Diagnosis';
        $isinya = 'tumor/Basic_Diagnosis/ubah_Basic';
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $method = 'Tumor/BasicDiagnosis';
        if ($data_tumor = $this->user_model->getdata_bykode($table, $Kode, $ID)) {
            $this->form_validation->set_rules($Kode, $Kode, 'required');
            $this->form_validation->set_rules($nama, $nama, 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    $Kode => $_POST[$Kode],
                    $nama => $_POST[$nama],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $Kode, $ID, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil Disimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = $isinya;
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusDiagnosis($kode = null) {
        $table = 'diagnosis_cancer';
        $where = 'ID_Diagnosis';
        $method = 'Tumor/BasicDiagnosis';
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

    // -----------------------------------------------------------------------
    public function Diseasetreatment() {
        $data['alldata'] = $this->user_model->get_alldata('disease');
        $data['isi'] = 'tumor/DiseaseTreatment/DiseaseTreatment';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addDiseasetreatment() {
        $table = 'disease';
        $kode = 'ID_Disease';
        $nama = 'Disease';
        $method = 'Tumor/Diseasetreatment';
        $isinya = 'tumor/Diseasetreatment/Diseasetreatment';
        $this->form_validation->set_rules($kode, $kode, 'required');
        $this->form_validation->set_rules($nama, $nama, 'required');
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $ID = $_POST[$kode];

        if ($this->form_validation->run()) {
            $data_simpan = array(
                $kode => $_POST[$kode],
                $nama => $_POST[$nama],
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
                redirect($method);
            }
        } else {
            $data['isi'] = $isinya;
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahDiseasetreatment($ID = null) {
        $table = 'disease';
        $nama = 'Disease';
        $Kode = 'ID_Disease';
        $isinya = 'tumor/DiseaseTreatment/ubah_DiseaseTreatment';
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $method = 'Tumor/DiseaseTreatment';
        if ($data_tumor = $this->user_model->getdata_bykode($table, $Kode, $ID)) {
            $this->form_validation->set_rules($Kode, $Kode, 'required');
            $this->form_validation->set_rules($nama, $nama, 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    $Kode => $_POST[$Kode],
                    $nama => $_POST[$nama],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $Kode, $ID, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = $isinya;
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusDiseasetreatment($kode = null) {
        $table = 'disease';
        $where = 'ID_Disease';
        $method = 'Tumor/DiseaseTreatment';
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

    // ------------------------


    public function TeatmentReporting() {
        $data['alldata'] = $this->user_model->get_alldata('treatment_reporting');
        $data['isi'] = 'tumor/Treatment_Reporting/Treatment_Reporting';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addTeatmentReporting() {
        $table = 'treatment_reporting';
        $kode = 'ID_Treatment';
        $nama = 'Treatment_Reporting';
        $method = 'Tumor/TeatmentReporting';
        $isinya = 'tumor/Treatment_Reporting/Treatment_Reporting';
        $ID = $_POST[$kode];
        $this->form_validation->set_rules($kode, $kode, 'required');
        $this->form_validation->set_rules($nama, $nama, 'required');
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        if ($this->form_validation->run()) {
            $data_simpan = array(
                $kode => $_POST[$kode],
                $nama => $_POST[$nama],
                'Create_Date' => $Date,
            );
            $where = $kode;
            $Cek = 0;
            $Cek = $this->user_model->Cekdata($table, $where, $ID)->result_array();
            if ($Cek == NULL) {
                if ($this->user_model->tambahData($table, $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Sudah ada');
                redirect($method);
            }
        } else {
            $data['isi'] = $isinya;
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahTeatmentReporting($ID = null) {
        $table = 'treatment_reporting';
        $nama = 'Treatment_Reporting';
        $Kode = 'ID_Treatment';
        $isinya = 'tumor/Treatment_Reporting/ubah_TeatmentReporting';
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $method = 'Tumor/TeatmentReporting';
        if ($data_tumor = $this->user_model->getdata_bykode($table, $Kode, $ID)) {
            $this->form_validation->set_rules($Kode, $Kode, 'required');
            $this->form_validation->set_rules($nama, $nama, 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    $Kode => $_POST[$Kode],
                    $nama => $_POST[$nama],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $Kode, $ID, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil Disimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = $isinya;
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusTeatmentReporting($kode = null) {
        $table = 'treatment_reporting';
        $where = 'ID_Treatment';
        $method = 'Tumor/TeatmentReporting';
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

// -----------------------------
    public function Behaviour() {
        $data['alldata'] = $this->user_model->get_alldata('behaviour');
        $data['isi'] = 'tumor/Behaviour/Behaviour';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addBehaviour() {
        $table = 'behaviour';
        $kode = 'ID_Behaviour';
        $nama = 'Behaviour';
        $isinya = 'tumor/Behaviour/Behaviour';
        $ID = $_POST[$kode];
        $method = 'Tumor/Behaviour';
        $this->form_validation->set_rules($kode, $kode, 'required');
        $this->form_validation->set_rules($nama, $nama, 'required');
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        if ($this->form_validation->run()) {
            $data_simpan = array(
                $kode => $_POST[$kode],
                $nama => $_POST[$nama],
                'Create_Date' => $Date,
            );
            $where = $kode;
            $Cek = 0;
            $Cek = $this->user_model->Cekdata($table, $where, $ID)->result_array();
            if ($Cek == NULL) {
                if ($this->user_model->tambahData($table, $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Sudah ada');
                redirect($method);
            }
        } else {
            $data['isi'] = $isinya;
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahBehaviour($ID = null) {
        $table = 'behaviour';
        $nama = 'Behaviour';
        $Kode = 'ID_Behaviour';
        $isinya = 'tumor/Behaviour/ubah_Behaviour';
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $method = 'Tumor/Behaviour';
        if ($data_tumor = $this->user_model->getdata_bykode($table, $Kode, $ID)) {
            $this->form_validation->set_rules($Kode, $Kode, 'required');
            $this->form_validation->set_rules($nama, $nama, 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    $Kode => $_POST[$Kode],
                    $nama => $_POST[$nama],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $Kode, $ID, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil Disimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = $isinya;
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusBehaviour($kode = null) {
        $table = 'behaviour';
        $where = 'ID_Behaviour';
        $method = 'Tumor/Behaviour';
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
    

    //-----------------------------------------------------
    public function Distantmetastastases() {
        $data['alldata'] = $this->user_model->get_alldata('distant_metastases');
        $data['isi'] = 'tumor/Distantmetastastases/Distantmetastastases';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addDistantmetastastases() {
        $table = 'distant_metastases';
        $kode = 'ID_Distant_Metastases';
        $nama = 'Distant_Metastases';
        $method = 'Tumor/Distantmetastastases';
        $isinya = 'tumor/Distantmetastastases/Distantmetastastases';
        $this->form_validation->set_rules($kode, $kode, 'required');
        $this->form_validation->set_rules($nama, $nama, 'required');
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $ID = $_POST[$kode];
        if ($this->form_validation->run()) {
            $data_simpan = array(
                $kode => $_POST[$kode],
                $nama => $_POST[$nama],
                'Create_Date' => $Create_Date,
            );
            $where = $kode;
            $Cek = 0;
            $Cek = $this->user_model->Cekdata($table, $where, $ID)->result_array();
            if ($Cek == NULL) {
                if ($this->user_model->tambahData($table, $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Sudah ada');
                redirect($method);
            }
        } else {
            $data['isi'] = $isinya;
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahDistantmetastastases($ID = null) {
        $table = 'distant_metastases';
        $nama = 'Distant_Metastases';
        $Kode = 'ID_Distant_Metastases';
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $method = 'Tumor/Distantmetastastases';
        $isinya = 'tumor/Distantmetastastases/ubah_Distantmetastastases';
        if ($data_tumor = $this->user_model->getdata_bykode($table, $Kode, $ID)) {
            $this->form_validation->set_rules($Kode, $Kode, 'required');
            $this->form_validation->set_rules($nama, $nama, 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    $Kode => $_POST[$Kode],
                    $nama => $_POST[$nama],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $Kode, $ID, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = $isinya;
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusDistantmetastastases($kode = null) {
        $table = 'distant_metastases';
        $where = 'ID_Distant_Metastases';
        $method = 'Tumor/Distantmetastastases';
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

    //-----------------------------------------------------

    public function Grade() {
        $data['alldata'] = $this->user_model->get_alldata('grade');
        $data['isi'] = 'tumor/Grade/Grade';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addGrade() {
        $table = 'grade';
        $kode = 'ID_Grade';
        $nama = 'Grade';
        $method = 'Tumor/Grade';
        $isinya = 'tumor/Grade/Grade';
        $this->form_validation->set_rules($kode, $kode, 'required');
        $this->form_validation->set_rules($nama, $nama, 'required');
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $ID = $_POST[$kode];
        if ($this->form_validation->run()) {
            $data_simpan = array(
                $kode => $_POST[$kode],
                $nama => $_POST[$nama],
                'Create_Date' => $Create_Date,
            );
            $where = $kode;
            $Cek = 0;
            $Cek = $this->user_model->Cekdata($table, $where, $ID)->result_array();
            if ($Cek == NULL) {
                if ($this->user_model->tambahData($table, $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Sudah ada');
                redirect($method);
            }
        } else {
            $data['isi'] = $isinya;
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahGrade($ID = null) {
        $table = 'grade';
        $nama = 'Grade';
        $Kode = 'ID_Grade';
        $isinya = 'tumor/Grade/ubah_Grade';
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $method = 'Tumor/Grade';
        if ($data_tumor = $this->user_model->getdata_bykode($table, $Kode, $ID)) {
            $this->form_validation->set_rules($Kode, $Kode, 'required');
            $this->form_validation->set_rules($nama, $nama, 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    $Kode => $_POST[$Kode],
                    $nama => $_POST[$nama],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $Kode, $ID, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = $isinya;
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusGrade($kode = null) {
        $table = 'grade';
        $where = 'ID_Grade';
        $method = 'Tumor/Grade';
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

// ------
    public function Stage() {
        $data['alldata'] = $this->user_model->get_alldata('stage');
        $data['isi'] = 'tumor/Stage/Stage';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addStage() {
        $table = 'stage';
        $kode = 'ID_Stage';
        $nama = 'Stage';
        $method = 'Tumor/Stage';
        $isinya = 'tumor/Stage/Stage';
        $this->form_validation->set_rules($kode, $kode, 'required');
        $this->form_validation->set_rules($nama, $nama, 'required');
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $ID = $_POST[$kode];

        if ($this->form_validation->run()) {
            $data_simpan = array(
                $kode => $_POST[$kode],
                $nama => $_POST[$nama],
                'Create_Date' => $Create_Date,
            );
            $where = $kode;
            $Cek = 0;
            $Cek = $this->user_model->Cekdata($table, $where, $ID)->result_array();
            if ($Cek == NULL) {
                if ($this->user_model->tambahData($table, $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Sudah ada');
                redirect($method);
            }
        } else {
            $data['isi'] = $isinya;
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahStage($ID = null) {
        $table = 'stage';
        $nama = 'Stage';
        $Kode = 'ID_Stage';
        $isinya = 'tumor/Stage/ubah_Stage';
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $method = 'Tumor/Stage';
        if ($data_tumor = $this->user_model->getdata_bykode($table, $Kode, $ID)) {
            $this->form_validation->set_rules($Kode, $Kode, 'required');
            $this->form_validation->set_rules($nama, $nama, 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    $Kode => $_POST[$Kode],
                    $nama => $_POST[$nama],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $Kode, $ID, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = $isinya;
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusStage($kode = null) {
        $table = 'stage';
        $where = 'ID_Stage';
        $method = 'Tumor/Stage';
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

    // ------
    public function Laterality() {
        $data['alldata'] = $this->user_model->get_alldata('laterality');
        $data['isi'] = 'tumor/Laterality/Laterality';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addLaterality() {
        $table = 'laterality';
        $kode = 'ID_Laterality';
        $nama = 'Laterality';
        $method = 'Tumor/Laterality';
        $isinya = 'tumor/Laterality/Laterality';
        $this->form_validation->set_rules($kode, $kode, 'required');
        $this->form_validation->set_rules($nama, $nama, 'required');
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $ID = $_POST[$kode];

        if ($this->form_validation->run()) {
            $data_simpan = array(
                $kode => $_POST[$kode],
                $nama => $_POST[$nama],
                'Create_Date' => $Create_Date,
            );
            $where = $kode;
            $Cek = 0;
            $Cek = $this->user_model->Cekdata($table, $where, $ID)->result_array();
            if ($Cek == NULL) {
                if ($this->user_model->tambahData($table, $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Sudah ada');
                redirect($method);
            }
        } else {
            $data['isi'] = $isinya;
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahLaterality($ID = null) {
        $table = 'laterality';
        $nama = 'Laterality';
        $Kode = 'ID_Laterality';
        $isinya = 'tumor/Laterality/ubah_Laterality';
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $method = 'Tumor/Laterality';
        if ($data_tumor = $this->user_model->getdata_bykode($table, $Kode, $ID)) {
            $this->form_validation->set_rules($Kode, $Kode, 'required');
            $this->form_validation->set_rules($nama, $nama, 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    $Kode => $_POST[$Kode],
                    $nama => $_POST[$nama],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $Kode, $ID, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = $isinya;
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusLaterality($kode = null) {
        cek_hakakses(array(1));
        $table = 'laterality';
        $where = 'ID_Laterality';
        $method = 'Tumor/Laterality';
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

    //------------------------------------------------

    public function Immunohistokimia() {
        $data['alldata'] = $this->user_model->get_alldata('immunohistokimia');
        $data['isi'] = 'tumor/Immunohistokimia/Immunohistokimia';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addImmunohistokimia() {
        $table = 'immunohistokimia';
        $kode = 'ID_Immunohistokimia';
        $nama = 'Immunohistokimia';
        $method = 'Tumor/Immunohistokimia';
        $isinya = 'tumor/Immunohistokimia/Immunohistokimia';
        $this->form_validation->set_rules($kode, $kode, 'required');
        $this->form_validation->set_rules($nama, $nama, 'required');
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $ID = $_POST[$kode];

        if ($this->form_validation->run()) {
            $data_simpan = array(
                $kode => $_POST[$kode],
                $nama => $_POST[$nama],
                'Create_Date' => $Create_Date,
            );
            $where = $kode;
            $Cek = 0;
            $Cek = $this->user_model->Cekdata($table, $where, $ID)->result_array();
            if ($Cek == NULL) {
                if ($this->user_model->tambahData($table, $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Sudah ada');
                redirect($method);
            }
        } else {
            $data['isi'] = $isinya;
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahImmunohistokimia($ID = null) {
        $table = 'immunohistokimia';
        $nama = 'Immunohistokimia';
        $Kode = 'ID_Immunohistokimia';
        $isinya = 'tumor/Immunohistokimia/ubah_Immunohistokimia';
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $method = 'Tumor/Immunohistokimia';
        if ($data_tumor = $this->user_model->getdata_bykode($table, $Kode, $ID)) {
            $this->form_validation->set_rules($Kode, $Kode, 'required');
            $this->form_validation->set_rules($nama, $nama, 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    $Kode => $_POST[$Kode],
                    $nama => $_POST[$nama],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $Kode, $ID, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = $isinya;
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusImmunohistokimia($kode = null) {
        $table = 'immunohistokimia';
        $where = 'ID_Immunohistokimia';
        $method = 'Tumor/Immunohistokimia';
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

    //------------------------------------------------

    public function Hybridization() {
        $data['alldata'] = $this->user_model->get_alldata('hybridization');
        $data['isi'] = 'tumor/Hybridization/Hybridization';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addHybridization() {
        $table = 'hybridization';
        $kode = 'ID_Hybridization';
        $nama = 'Hybridization';
        $method = 'Tumor/Hybridization';
        $isinya = 'tumor/Hybridization/Hybridization';
        $this->form_validation->set_rules($kode, $kode, 'required');
        $this->form_validation->set_rules($nama, $nama, 'required');
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $ID = $_POST[$kode];

        if ($this->form_validation->run()) {
            $data_simpan = array(
                $kode => $_POST[$kode],
                $nama => $_POST[$nama],
                'Create_Date' => $Create_Date,
            );
            $where = $kode;
            $Cek = 0;
            $Cek = $this->user_model->Cekdata($table, $where, $ID)->result_array();
            if ($Cek == NULL) {
                if ($this->user_model->tambahData($table, $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Sudah ada');
                redirect($method);
            }
        } else {
            $data['isi'] = $isinya;
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahHybridization($ID = null) {
        $table = 'hybridization';
        $nama = 'Hybridization';
        $Kode = 'ID_Hybridization';
        $isinya = 'tumor/Hybridization/ubah_Hybridization';
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $method = 'Tumor/Hybridization';
        if ($data_tumor = $this->user_model->getdata_bykode($table, $Kode, $ID)) {
            $this->form_validation->set_rules($Kode, $Kode, 'required');
            $this->form_validation->set_rules($nama, $nama, 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    $Kode => $_POST[$Kode],
                    $nama => $_POST[$nama],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $Kode, $ID, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = $isinya;
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusHybridization($kode = null) {
        $table = 'hybridization';
        $where = 'ID_Hybridization';
        $method = 'Tumor/Hybridization';
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

    //------------------------------------------------

    public function Biopsy() {
        $data['alldata'] = $this->user_model->get_alldata('biopsy');
        $data['isi'] = 'tumor/Biopsy/Biopsy';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addBiopsy() {
        $table = 'biopsy';
        $kode = 'ID_Biopsy';
        $nama = 'Biopsy';
        $method = 'Tumor/Biopsy';
        $isinya = 'tumor/Biopsy/Biopsy';
        $this->form_validation->set_rules($kode, $kode, 'required');
        $this->form_validation->set_rules($nama, $nama, 'required');
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $ID = $_POST[$kode];

        if ($this->form_validation->run()) {
            $data_simpan = array(
                $kode => $_POST[$kode],
                $nama => $_POST[$nama],
                'Create_Date' => $Create_Date,
            );
            $where = $kode;
            $Cek = 0;
            $Cek = $this->user_model->Cekdata($table, $where, $ID)->result_array();
            if ($Cek == NULL) {
                if ($this->user_model->tambahData($table, $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Sudah ada');
                redirect($method);
            }
        } else {
            $data['isi'] = $isinya;
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahBiopsy($ID = null) {
        $table = 'biopsy';
        $nama = 'Biopsy';
        $Kode = 'ID_Biopsy';
        $isinya = 'tumor/Biopsy/ubah_Biopsy';
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $method = 'Tumor/Biopsy';
        if ($data_tumor = $this->user_model->getdata_bykode($table, $Kode, $ID)) {
            $this->form_validation->set_rules($Kode, $Kode, 'required');
            $this->form_validation->set_rules($nama, $nama, 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    $Kode => $_POST[$Kode],
                    $nama => $_POST[$nama],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $Kode, $ID, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = $isinya;
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusBiopsy($kode = null) {
        cek_hakakses(array(1));
        $table = 'biopsy';
        $where = 'ID_Biopsy';
        $method = 'Tumor/Biopsy';
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

    public function Sublocation() {
        $data['alldata'] = $this->user_model->get_alldata('sublocation');
        $data['isi'] = 'tumor/Sublocation/Sublocation';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addSublocation() {
        $table = 'sublocation';
        $kode = 'ID_Sublocation';
        $nama = 'Sublocation';
        $method = 'Tumor/Sublocation';
        $isinya = 'tumor/Sublocation/Sublocation';
        $this->form_validation->set_rules($kode, $kode, 'required');
        $this->form_validation->set_rules($nama, $nama, 'required');
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $ID = $_POST[$kode];

        if ($this->form_validation->run()) {
            $data_simpan = array(
                $kode => $_POST[$kode],
                $nama => $_POST[$nama],
                'Create_Date' => $Create_Date,
            );
            $where = $kode;
            $Cek = 0;
            $Cek = $this->user_model->Cekdata($table, $where, $ID)->result_array();
            if ($Cek == NULL) {
                if ($this->user_model->tambahData($table, $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Sudah ada');
                redirect($method);
            }
        } else {
            $data['isi'] = $isinya;
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahSublocation($ID = null) {
        $table = 'sublocation';
        $nama = 'Sublocation';
        $Kode = 'ID_Sublocation';
        $isinya = 'tumor/Sublocation/ubah_Sublocation';
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $method = 'Tumor/Sublocation';
        if ($data_tumor = $this->user_model->getdata_bykode($table, $Kode, $ID)) {
            $this->form_validation->set_rules($Kode, $Kode, 'required');
            $this->form_validation->set_rules($nama, $nama, 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    $Kode => $_POST[$Kode],
                    $nama => $_POST[$nama],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $Kode, $ID, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = $isinya;
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusSublocation($kode = null) {
        $table = 'sublocation';
        $where = 'ID_Sublocation';
        $method = 'Tumor/Sublocation';
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
