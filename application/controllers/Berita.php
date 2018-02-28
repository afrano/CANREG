<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_app');
    }

    function tambah_berita() {
        if (isset($_POST['submit'])) {
            $data = array('judul' => $this->input->post('judul'),
                'isi_berita' => $this->input->post('isi'),
                'tanggal' => date('Y-m-d'));
            $where = array('id_berita' => $this->input->post('id'));
            $this->model_app->update('berita', $data, $where);
            $this->session->unset_userdata('id_berita');
            redirect('berita');
        } else {
            if ($this->session->id_berita == '') {
                $data = array('judul' => '',
                    'isi_berita' => '',
                    'tanggal' => date('Y-m-d'));
                $this->model_app->insert('berita', $data);
                $id = $this->db->insert_id();
                $this->session->set_userdata(array('id_berita' => $id));
            }
            $this->load->view('view_berita_tambah');
        }
    }

    function autosave_berita() {
        $data = array('judul' => $this->input->post('judul'),
            'isi_berita' => $this->input->post('isi'),
            'tanggal' => date('Y-m-d'));
        $where = array('id_berita' => $this->input->post('id'));
        $this->model_app->update('berita', $data, $where);
    }

}
