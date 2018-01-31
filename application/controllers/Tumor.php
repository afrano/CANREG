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
    

}
