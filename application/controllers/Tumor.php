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

}
