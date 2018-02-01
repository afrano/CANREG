<?php

class Tumor extends ci_controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        cek_login();
        cek_hakakses(array(1));
    }

    function index() {
        $data['data_user'] = $this->user_model->get_Topography();
        $data['isi'] = 'user/v_user';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/v_dashboard', $data);
    }

    public function Topography() {
        cek_hakakses(array(1));
        $data['topography'] = $this->user_model->get_Topography();
        $data['isi'] = 'tumor/Topography/Topography';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addTopography() {
        $this->form_validation->set_rules('ID_Topography', 'ID_Topography', 'required');
        $this->form_validation->set_rules('Topography', 'Topography', 'required');
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $id_topography = $_POST['ID_Topography'];
        if ($this->form_validation->run()) {
            $data_simpan = array(
                'ID_Topography' => $_POST['ID_Topography'],
                'Topography' => $_POST['Topography'],
                'Create_Date' => $Create_Date,
            );
            $Cek = 0;
            $Cek = $this->user_model->CekTumor($id_topography)->result_array();
            if ($Cek == NULL) {
                if ($this->user_model->tambahTopography($data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect('Tumor/Topography');
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect('Tumor/Topography');
                }
            } else {
                $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Maaf Data Sudah Ada</strong></div>");
                header('location:' . base_url() . 'Tumor/Topography');
            }
        } else {
            $data['isi'] = 'tumor/Topography/Topography';
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function hapusTopography($ID = null) {
        cek_hakakses(array(1));
        if ($this->user_model->get_byKode($ID)) {
            if ($this->user_model->Hapusdata('topography', array('id_topography' => $ID))) {
                $this->session->set_flashdata('pesan_sukses', 'Data berhasil Di Hapus');
                redirect('Tumor/Topography');
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Gagal Di Hapus');
                redirect('Tumor/Topography');
            }
        } else {
            echo "Data Tidak Ditemukan";
        }
    }

    function ubahTopography($ID = null) {
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        if ($data_user = $this->user_model->get_byKode($ID)) {
            $this->form_validation->set_rules('ID_Topography', 'ID_Topography', 'required');
            $this->form_validation->set_rules('Topography', 'Topography', 'required');
            if ($this->form_validation->run()) {
                $dataTopography = array(
                    'ID_Topography' => $_POST['ID_Topography'],
                    'Topography' => $_POST['Topography'],
                    'Update_date' => $Date,
                );

                if ($this->user_model->ubahTopography($ID, $dataTopography)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect('Tumor/Topography');
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect('Tumor/Topography');
                }
            } else {
                $data['row'] = $data_user->row();
                $data['isi'] = 'tumor/Topography/ubah_Topography';
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    // -----------------------------------
    public function Morphology() {
        cek_hakakses(array(1));
        $data['Morphology'] = $this->user_model->get_Morphology();
        $data['isi'] = 'tumor/Morphology/Morphology';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addMorphology() {
        $this->form_validation->set_rules('ID_Morphology', 'ID_Morphology', 'required');
        $this->form_validation->set_rules('Morphology', 'Morphology', 'required');
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $id_morphology = $_POST['ID_Morphology'];
        if ($this->form_validation->run()) {
            $data_simpan = array(
                'ID_Morphology' => $_POST['ID_Morphology'],
                'Morphology' => $_POST['Morphology'],
                'Create_Date' => $Create_Date,
            );
            $Cek = 0;
            $Cek = $this->user_model->CekTumor($id_morphology)->result_array();
            if ($Cek == NULL) {
                if ($this->user_model->tambahMorphology($data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect('Tumor/Morphology');
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect('Tumor/Morphology');
                }
            } else {
                $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Maaf Data Sudah Ada</strong></div>");
                header('location:' . base_url() . 'Tumor/Morphology');
            }
        } else {
            $data['isi'] = 'tumor/Morphology/Morphology';
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahMorphology($ID = null) {
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        if ($data_user = $this->user_model->get_byKodeMorpology($ID)) {
            $this->form_validation->set_rules('ID_Morphology', 'ID_Morphology', 'required');
            $this->form_validation->set_rules('Morphology', 'Morphology', 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    'ID_Morphology' => $_POST['ID_Morphology'],
                    'Morphology' => $_POST['Morphology'],
                    'Update_date' => $Date,
                );

                if ($this->user_model->ubahMorphology($ID, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect('Tumor/Morphology');
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect('Tumor/Morphology');
                }
            } else {
                $data['row'] = $data_user->row();
                $data['isi'] = 'tumor/Morphology/ubah_Morphology';
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusMorpology($ID = null) {
        cek_hakakses(array(1));
        if ($this->user_model->get_byKodeMorpology($ID)) {
            if ($this->user_model->Hapusdata('morphology', array('id_morphology' => $ID))) {
                $this->session->set_flashdata('pesan_sukses', 'Data berhasil Di Hapus');
                redirect('Tumor/Morphology');
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Gagal Di Hapus');
                redirect('Tumor/Morphology');
            }
        } else {
            echo "Data Tidak Ditemukan";
        }
    }

    //------------- basic
    public function Basic_Diagnosis() {
        cek_hakakses(array(1));
        $data['Diagnosis'] = $this->user_model->get_Basic();
        $data['isi'] = 'tumor/Basic_Diagnosis/Basic_Diagnosis';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addDiagnosis() {
        $this->form_validation->set_rules('ID_Diagnosis', 'ID_Diagnosis', 'required');
        $this->form_validation->set_rules('Diagnosis', 'Diagnosis', 'required');
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $ID_Diagnosis = $_POST['ID_Diagnosis'];
        if ($this->form_validation->run()) {
            $data_simpan = array(
                'ID_Diagnosis' => $_POST['ID_Diagnosis'],
                'Diagnosis' => $_POST['Diagnosis'],
                'Create_Date' => $Create_Date,
            );
            $Cek = 0;
            $Cek = $this->user_model->CekdataTumor('diagnosis_cancer', 'ID_Diagnosis', $ID_Diagnosis)->result_array();
            if ($Cek == NULL) {
                if ($this->user_model->tambahData('diagnosis_cancer', $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect('Tumor/Basic_Diagnosis');
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect('Tumor/Basic_Diagnosis');
                }
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Sudah ada');
                redirect('Tumor/Basic_Diagnosis');
            }
        } else {
            $data['isi'] = 'tumor/Basic_Diagnosis/Basic_Diagnosis';
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahDiagnosis($ID = null) {
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        if ($data_tumor = $this->user_model->get_byBasic($ID)) {
            $this->form_validation->set_rules('ID_Diagnosis', 'ID_Diagnosis', 'required');
            $this->form_validation->set_rules('Diagnosis', 'Diagnosis', 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    'ID_Diagnosis' => $_POST['ID_Diagnosis'],
                    'Diagnosis' => $_POST['Diagnosis'],
                    'Update_date' => $Date,
                );
                $tabel = 'diagnosis_cancer';
                $where = 'ID_Diagnosis';
                if ($this->user_model->ubahdata($tabel, $where, $ID, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect('Tumor/Basic_Diagnosis');
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect('Tumor/Basic_Diagnosis');
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = 'tumor/Basic_Diagnosis/ubah_Basic';
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusDiagnosis($ID = null) {
        cek_hakakses(array(1));
        if ($this->user_model->get_byBasic($ID)) {
            if ($this->user_model->Hapusdata('diagnosis_cancer', array('ID_Diagnosis' => $ID))) {
                $this->session->set_flashdata('pesan_sukses', 'Data berhasil Di Hapus');
                redirect('Tumor/Basic_Diagnosis');
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Gagal Di Hapus');
                redirect('Tumor/Basic_Diagnosis');
            }
        } else {
            echo "Data Tidak Ditemukan";
        }
    }

    // -----------------------------------------------------------------------
    public function Diseasetreatment() {
        cek_hakakses(array(1));
        $data['alldata'] = $this->user_model->get_alldata('disease');
        $data['isi'] = 'tumor/Disease_treatment/Disease_treatment';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addDiseasetreatment() {
        $this->form_validation->set_rules('ID_Disease', 'ID_Disease', 'required');
        $this->form_validation->set_rules('Disease', 'Disease', 'required');
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $ID = $_POST['ID_Disease'];
        if ($this->form_validation->run()) {
            $data_simpan = array(
                'ID_Disease' => $_POST['ID_Disease'],
                'Disease' => $_POST['Disease'],
                'Create_Date' => $Create_Date,
            );
            $table = 'disease';
            $where = 'ID_Disease';
            $Cek = 0;
            $Cek = $this->user_model->CekdataTumor($table, $where, $ID)->result_array();
            if ($Cek == NULL) {
                if ($this->user_model->tambahData($table, $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect('Tumor/Diseasetreatment');
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect('Tumor/Diseasetreatment');
                }
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Sudah ada');
                redirect('Tumor/Diseasetreatment');
            }
        } else {
            $data['isi'] = 'tumor/Disease_treatment/Disease_treatment';
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahDiseasetreatment($kode = null) {
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $table = 'disease';
        $where = 'ID_Disease';
        if ($data_tumor = $this->user_model->getdata_bykode($table, $where, $kode)) {
            $this->form_validation->set_rules('ID_Disease', 'ID_Disease', 'required');
            $this->form_validation->set_rules('Disease', 'Disease', 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    'ID_Disease' => $_POST['ID_Disease'],
                    'Disease' => $_POST['Disease'],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $where, $kode, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect('Tumor/Diseasetreatment');
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect('Tumor/Diseasetreatment');
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = 'tumor/Disease_treatment/ubah_Disease';
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusDiseasetreatment($kode = null) {
        cek_hakakses(array(1));
        $table = 'disease';
        $where = 'ID_Disease';
        $method = 'Tumor/Diseasetreatment';
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
    public function TeatmentReporting() {
        cek_hakakses(array(1));
        $data['alldata'] = $this->user_model->get_alldata('treatment_reporting');
        $data['isi'] = 'tumor/Treatment_Reporting/Treatment_Reporting';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addTeatmentReporting() {
        $this->form_validation->set_rules('ID_Treatment', 'ID_Treatment', 'required');
        $this->form_validation->set_rules('Treatment_Reporting', 'Treatment_Reporting', 'required');
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $ID = $_POST['ID_Treatment'];
        if ($this->form_validation->run()) {
            $data_simpan = array(
                'ID_Treatment' => $_POST['ID_Treatment'],
                'Treatment_Reporting' => $_POST['Treatment_Reporting'],
                'Create_Date' => $Create_Date,
            );
            $table = 'treatment_reporting';
            $where = 'ID_Treatment';
            $method = 'Tumor/TeatmentReporting';
            $Cek = 0;
            $Cek = $this->user_model->CekdataTumor($table, $where, $ID)->result_array();
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
            $data['isi'] = 'tumor/Treatment_Reporting/Treatment_Reporting';
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahTeatmentReporting($kode = null) {
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $table = 'treatment_reporting';
        $where = 'ID_Treatment';
        $method = 'Tumor/TeatmentReporting';
        if ($data_tumor = $this->user_model->getdata_bykode($table, $where, $kode)) {
            $this->form_validation->set_rules('ID_Treatment', 'ID_Treatment', 'required');
            $this->form_validation->set_rules('Treatment_Reporting', 'Treatment_Reporting', 'required');
            if ($this->form_validation->run()) {
                $datatumor = array(
                    'ID_Treatment' => $_POST['ID_Treatment'],
                    'Treatment_Reporting' => $_POST['Treatment_Reporting'],
                    'Update_date' => $Date,
                );
                if ($this->user_model->ubahdata($table, $where, $kode, $datatumor)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = 'tumor/Treatment_Reporting/ubah_Reporting';
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusTeatmentReporting($kode = null) {
        cek_hakakses(array(1));
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
        cek_hakakses(array(1));
        $data['alldata'] = $this->user_model->get_alldata('behaviour');
        $data['isi'] = 'tumor/Behaviour/Behaviour';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function addBehaviour() {
        $table = 'behaviour';
        $kode = 'ID_Behaviour';
        $nama = 'Behaviour';
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
            $method = 'Tumor/Behaviour';
            $Cek = 0;
            $Cek = $this->user_model->CekdataTumor($table, $where, $ID)->result_array();
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
            $data['isi'] = 'tumor/Behaviour/Behaviour';
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubahBehaviour($ID = null) {
        $table = 'behaviour';
        $nama = 'Behaviour';
        $Kode = 'ID_Behaviour';
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
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect($method);
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect($method);
                }
            } else {
                $data['row'] = $data_tumor->row();
                $data['isi'] = 'tumor/Behaviour/ubah_Behaviour';
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusBehaviour($kode = null) {
        cek_hakakses(array(1));
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
        cek_hakakses(array(1));
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
            $Cek = $this->user_model->CekdataTumor($table, $where, $ID)->result_array();
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
            $data['isi'] = 'tumor/Distantmetastastases/Distantmetastastases';
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
                $data['isi'] = 'tumor/Distantmetastastases/ubah_Distantmetastastases';
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapusDistantmetastastases($kode = null) {
        cek_hakakses(array(1));
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
        cek_hakakses(array(1));
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
            $Cek = $this->user_model->CekdataTumor($table, $where, $ID)->result_array();
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
        cek_hakakses(array(1));
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
        cek_hakakses(array(1));
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
            $Cek = $this->user_model->CekdataTumor($table, $where, $ID)->result_array();
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
        cek_hakakses(array(1));
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
        cek_hakakses(array(1));
        $data['alldata'] = $this->user_model->get_alldata('laterality');
        $data['isi'] = 'tumor/laterality/laterality';
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
            $Cek = $this->user_model->CekdataTumor($table, $where, $ID)->result_array();
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
        cek_hakakses(array(1));
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
            $Cek = $this->user_model->CekdataTumor($table, $where, $ID)->result_array();
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
        cek_hakakses(array(1));
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
        cek_hakakses(array(1));
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
            $Cek = $this->user_model->CekdataTumor($table, $where, $ID)->result_array();
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
        cek_hakakses(array(1));
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
        cek_hakakses(array(1));
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
            $Cek = $this->user_model->CekdataTumor($table, $where, $ID)->result_array();
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
    
     //------------------------------------------------

    public function Sublocation() {
        cek_hakakses(array(1));
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
            $Cek = $this->user_model->CekdataTumor($table, $where, $ID)->result_array();
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
        cek_hakakses(array(1));
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
