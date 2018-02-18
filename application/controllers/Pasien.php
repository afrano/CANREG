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

    public function index() {
        $data['data_pasien'] = $this->user_model->get_allPasien();
        $data['isi'] = 'pasien/v_pasien';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    public function addPasien() {
        $data['provinsi'] = $this->user_model->get_all_provinsi();
        $data['isi'] = 'pasien/tambah_Pasien';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function tambah_pasien() {
        $Create_Date = Date("Y-m-d H:i:s", time() + 60 * 360);
        $this->form_validation->set_rules('NIK', 'NIK', 'required');
        $this->form_validation->set_rules('Kode_RS', 'Kode_RS', 'required');
        $this->form_validation->set_rules('NO_PA_LAB', 'NO_PA_LAB', 'NO_PA_LAB');
        $this->form_validation->set_rules('MRN', 'MRN', 'required');
        $this->form_validation->set_rules('First_Name', 'First_Name', 'required');
        $this->form_validation->set_rules('Middle_Name', 'Middle_Name', 'required');
        $this->form_validation->set_rules('Family_Name', 'Family_Name', 'required');
        $this->form_validation->set_rules('Place_Of_Birth', 'Place_Of_Birth', 'required');
        $this->form_validation->set_rules('Date_Of_Birth', 'Date_Of_Birth', 'required');
        $this->form_validation->set_rules('Alamat_Tetap', 'Alamat_Tetap', 'required');
        $this->form_validation->set_rules('ID_Provinsi', 'ID_Provinsi', 'required');
        $this->form_validation->set_rules('id_kabupaten', 'id_kabupaten', 'required');
        $this->form_validation->set_rules('id_kecamatan', 'id_kecamatan', 'required');
        $this->form_validation->set_rules('kode_pos', 'kode_pos', 'required');
        $this->form_validation->set_rules('Alamat_Sementara', 'Alamat_Sementara', 'required');
        $this->form_validation->set_rules('id_provinsi_1', 'id_provinsi_1', 'required');
        $this->form_validation->set_rules('id_kabupaten_1', 'id_kabupaten_1', 'required');
        $this->form_validation->set_rules('id_kecamatan_1', 'id_kecamatan_1', 'required');
        $this->form_validation->set_rules('kode_pos1', 'kode_pos1', 'required');
        $this->form_validation->set_rules('ID_Sex', 'ID_Sex', 'required');
        $this->form_validation->set_rules('ID_Race', 'ID_Race', 'required');
        $this->form_validation->set_rules('ID_Religion', 'ID_Religion', 'required');
        $this->form_validation->set_rules('id_status_hubungan', 'id_status_hubungan', 'required');
        $this->form_validation->set_rules('ID_Occupation', 'ID_Occupation', 'required');
        $this->form_validation->set_rules('No_Telpon', 'No_Telpon', 'required');
        $this->form_validation->set_rules('ID_Topography', 'ID_Topography', 'required');
        $this->form_validation->set_rules('ID_Morphology', 'ID_Morphology', 'required');
        $this->form_validation->set_rules('Diagnosis', 'Diagnosis', 'required');
        $this->form_validation->set_rules('Disease', 'Disease', 'required');
        $this->form_validation->set_rules('ID_Treatment', 'ID_Treatment', 'required');
        $this->form_validation->set_rules('Diagnosis_Klinis', 'Diagnosis_Klinis', 'required');
        $this->form_validation->set_rules('Diagnosis_Date', 'Diagnosis_Date', 'required');
        $this->form_validation->set_rules('Date_Therapy', 'Date_Therapy', 'required');
        $this->form_validation->set_rules('Behaviour', 'Behaviour', 'required');
        $this->form_validation->set_rules('ID_Treatment', 'ID_Treatment', 'required');
        $this->form_validation->set_rules('No_Of_Metastases', 'No_Of_Metastases', 'required');
        $this->form_validation->set_rules('Grade', 'Grade', 'required');
        $this->form_validation->set_rules('Stage', 'Stage', 'required');
        $this->form_validation->set_rules('Laterality', 'Laterality', 'required');
        $this->form_validation->set_rules('Biopsy', 'Biopsy', 'required');
        $this->form_validation->set_rules('ID_TumorSize', 'ID_TumorSize', 'required');
        $this->form_validation->set_rules('Immunohistokimia1', 'Immunohistokimia1', 'required');
        $this->form_validation->set_rules('Date_IHC', 'Date_IHC', 'required');
        $this->form_validation->set_rules('ID_Hybridization', 'ID_Hybridization', 'required');
        $this->form_validation->set_rules('Date_ISH', 'Date_ISH', 'required');
        $this->form_validation->set_rules('jenis_molekul', 'jenis_molekul', 'required');
        $this->form_validation->set_rules('kesimpulan', 'kesimpulan', 'required');
        $this->form_validation->set_rules('Tgl_Periksa', 'Tgl_Periksa', 'required');
        $this->form_validation->set_rules('ID_Status', 'ID_Status', 'required');
        $this->form_validation->set_rules('Date_Of_Verification', 'Date_Of_Verification', 'required');
        $this->form_validation->set_rules('Date_Of_Abstract', 'Date_Of_Abstract', 'required');
        $this->form_validation->set_rules('Date_Last_Contact', 'Date_Last_Contact', 'required');
        $this->form_validation->set_rules('Registrar', 'Registrar', 'required');
        $this->form_validation->set_rules('Admission_Date', 'Admission_Date', 'required');
        $NIK = $_POST['NIK'];

        if (isset($_POST['Tgl_Periksa']) AND isset($_POST['Kode_Rumah_Sakit'])) {
            $tgl_Periksa = $_POST['Tgl_Periksa'];
            $Kode_Rumah_Sakit = $_POST['Kode_Rumah_Sakit'];
            $nama_rumahsakit = $_POST['nama_rumahsakit'];
            $Unit_ID = $_POST['Unit_ID'];
            $Unit = $_POST['Unit'];
            $jumlahSource = count($tgl_Periksa);

            for ($sp = 0; $sp < $jumlahSource; $sp++) {
                $this->db->query("INSERT INTO sources_follow_up values('','$NIK','$tgl_Periksa[$sp]','$Kode_Rumah_Sakit[$sp]','$nama_rumahsakit[$sp]','$Unit_ID[$sp]','$Unit[$sp]','$Create_Date','')");
            }
        }

        $data = explode(" ", $_POST['ID_Treatment']);
        $hitung = count($data) - 1;

        $data1 = explode(" ", $_POST['ID_Distant_Metastases']);
        $hitung1 = count($data1) - 1;

        $hasilImmunohistokimia = null;
        if ($_POST['Immunohistokimia1'] == "NO") {
            $hasilImmunohistokimia = $_POST['keterangan'];
        } elseif ($_POST['Immunohistokimia1'] == "YES") {
            if ($_POST['post1'] == "YES") {
                if ($_POST['post2'] == "YES") {
                    if ($_POST['post3'] == "YES") {
                        $hasilImmunohistokimia = "IHC For Breast Cancer YES, ER+ and/or PR+, HER2-, Ki67<20%, LUMINAL A";
                    }if ($_POST['post3'] == "NO") {
                        $hasilImmunohistokimia = "IHC For Breast Cancer YES, ER+ and/or PR+, HER2-, Ki67>20%, LUMINAL B (HER2-)";
                    }
                }if ($_POST['post2'] == "NO") {
                    $hasilImmunohistokimia = "IHC For Breast Cancer YES, ER+ and/or PR+, HER2+, LUMINAL B (HER2+)";
                }
            }if ($_POST['post1'] == "NO") {
                if ($_POST['post4'] == "YES") {
                    $hasilImmunohistokimia = "IHC For Breast Cancer YES, ER- and/or PR-, HER2+";
                } if ($_POST['post4'] == "NO") {
                    if ($_POST['post5'] == "YES") {
                        $hasilImmunohistokimia = "IHC For Breast Cancer YES, ER- and/or PR-, HER2-, CK5- and EGFR-, FIVE NEGATIVE PHENOTYPE";
                    }if ($_POST['post5'] == "NO") {
                        $hasilImmunohistokimia = "IHC For Breast Cancer YES, ER- and/or PR-, HER2-, CK5+ and/or EGFR+, BASAL PHENOTYPE";
                    }
                }
            }
        }
        $datapasien = array(
            'NIK' => $_POST['NIK'],
            'First_Name' => $_POST['First_Name'],
            'Middle_Name' => $_POST['Middle_Name'],
            'Family_Name' => $_POST['Family_Name'],
            'Place_Of_Birth' => $_POST['Place_Of_Birth'],
            'Date_Of_Birth' => $_POST['Date_Of_Birth'],
            'Alamat_Tetap' => $_POST['Alamat_Tetap'],
            'ID_Provinsi' => $_POST['ID_Provinsi'],
            'id_kabupaten' => $_POST['id_kabupaten'],
            'id_kecamatan' => $_POST['id_kecamatan'],
            'kode_pos' => $_POST['kode_pos'],
            'Alamat_Sementara' => $_POST['Alamat_Sementara'],
            'id_provinsi_1' => $_POST['id_provinsi_1'],
            'id_kabupaten_1' => $_POST['id_kabupaten_1'],
            'id_kecamatan_1' => $_POST['id_kecamatan_1'],
            'kode_pos1' => $_POST['kode_pos1'],
            'ID_Sex' => $_POST['ID_Sex'],
            'ID_Race' => $_POST['ID_Race'],
            'ID_Religion' => $_POST['ID_Religion'],
            'id_status_hubungan' => $_POST['id_status_hubungan'],
            'ID_Occupation' => $_POST['ID_Occupation'],
            'No_Telpon' => $_POST['No_Telpon'],
            'Create_Date' => $Create_Date,
        );
        $Cek = 0;
        $Cek = $this->user_model->Cekdata('data_pasien', 'NIK', $NIK)->result_array(); // cek nik didatabase apakah sudah ada

        $datatumor = array(
            'NIK' => $NIK,
            'ID_Topography' => $_POST['ID_Topography'],
            'ID_Morphology' => $_POST['ID_Morphology'],
            'ID_Diagnosis' => $_POST['Diagnosis'],
            'ID_Disease' => $_POST['Disease'],
            'Diagnosis_Klinis' => $_POST['Diagnosis_Klinis'],
            'Diagnosis_Date' => $_POST['Diagnosis_Date'],
            'Date_Therapy' => $_POST['Date_Therapy'],
            'ID_Behaviour' => $_POST['Behaviour'],
            'No_Of_Metastases' => $_POST['No_Of_Metastases'],
            'ID_Grade' => $_POST['Grade'],
            'ID_Stage' => $_POST['Stage'],
            'ID_Laterality' => $_POST['Laterality'],
            'Immunohistokimia' => $hasilImmunohistokimia,
            'Date_IHC' => $_POST['Date_IHC'],
            'jenis_molekul' => $_POST['jenis_molekul'],
            'ID_Hybridization' => $_POST['ID_Hybridization'],
            'Date' => $_POST['Date_ISH'],
            'TumorSize' => $_POST['ID_TumorSize'],
            'ID_Biopsy' => $_POST['Biopsy'],
            'Kode_RS' => $_POST['Kode_RS'],
            'MRN' => $_POST['MRN'],
            'NO_PA_LAB' => $_POST['NO_PA_LAB'],
            'Kesimpulan' => $_POST['kesimpulan'],
            'Create_Date' => $Create_Date,
        );

        $registrar = array(
            'NIK' => $NIK,
            'Admission_Date' => $_POST['Admission_Date'],
            'Date_Last_Contact' => $_POST['Date_Last_Contact'],
            'id_status' => $_POST['ID_Status'],
            'Registrar' => $_POST['Registrar'],
            'Date_Of_Abstract' => $_POST['Date_Of_Abstract'],
            'Verifeir' => 0,
            'Date_Of_Verification' => $_POST['Date_Of_Verification'],
            'Create_Date' => $Create_Date,
        );

        for ($x = 0; $x < $hitung; $x++) {
            $this->db->query("INSERT INTO treatment_pasien values('','$data[$x]','$NIK','$Create_Date','')");
        }

        for ($x1 = 0; $x1 < $hitung1; $x1++) {
            $this->db->query("INSERT INTO distant_metastases_pasien values('','$data1[$x1]','$NIK','$Create_Date','')");
        }

        if ($Cek == NULL) {

            $this->user_model->tambahData('data_pasien', $datapasien);
            $this->user_model->tambahData('data_tumor_pasien', $datatumor);
            $this->user_model->tambahData('registrar', $registrar);
            $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil Disimpan</strong></div>");
            redirect(base_url() . 'Pasien/DetailPasien/' . $NIK . '');
        } else {

            $this->user_model->tambahData('data_tumor_pasien', $datatumor);
            $this->user_model->tambahData('registrar', $registrar);
            $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Maaf Data Pasien Sudah Ada</strong></div>");
            redirect(base_url() . 'Pasien/DetailPasien/' . $NIK . '');
        }
        $this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Gagal Menyimpan Data</strong></div>");
        redirect(base_url() . 'Pasien/tambah_pasien');
    }

    function DetailPasien($NIK = null) {
        if ($data_user = $this->user_model->get_DetilPasien($NIK)) {
            $data['row'] = $data_user->row();
            $data['isi'] = 'pasien/detailPasien';
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubah($NIK = null) {
        $isinya = 'pasien/ubah_Pasien';
        $Date = Date("Y-m-d H:i:s", time() + 60 * 360);

        if ($data_user = $this->user_model->get_DetilPasien($NIK)) {
            $this->form_validation->set_rules('NIK', 'NIK', 'required');
            $this->form_validation->set_rules('MRN', 'MRN', 'required');

            if ($this->form_validation->run()) {
                $datapasien = array(
                    'NIK' => $_POST['NIK'],
                    'MRN' => $_POST['MRN'],
                    'First_Name' => $_POST['First_Name'],
                    'Middle_Name' => $_POST['Middle_Name'],
                    'Family_Name' => $_POST['Family_Name'],
                    'Place_Of_Birth' => $_POST['Place_Of_Birth'],
                    'Date_Of_Birth' => $_POST['Date_Of_Birth'],
                    'Alamat_Tetap' => $_POST['Alamat_Tetap'],
                    'ID_Provinsi' => $_POST['ID_Provinsi'],
                    'id_kabupaten' => $_POST['id_kabupaten'],
                    'id_kecamatan' => $_POST['id_kecamatan'],
                    'kode_pos' => $_POST['kode_pos'],
                    'Alamat_Sementara' => $_POST['Alamat_Sementara'],
                    'id_provinsi_1' => $_POST['id_provinsi_1'],
                    'id_kabupaten_1' => $_POST['id_kabupaten_1'],
                    'id_kecamatan_1' => $_POST['id_kecamatan_1'],
                    'kode_pos1' => $_POST['kode_pos1'],
                    'ID_Sex' => $_POST['ID_Sex'],
                    'ID_Race' => $_POST['ID_Race'],
                    'ID_Religion' => $_POST['ID_Religion'],
                    'id_status_hubungan' => $_POST['id_status_hubungan'],
                    'ID_Occupation' => $_POST['ID_Occupation'],
                    'No_Telpon' => $_POST['No_Telpon'],
                    'Update_Date' => $Date,
                );

//                $datatumor = array(
//                    'NIK' => $NIK,
//                    'ID_Topography' => $_POST['ID_Topography'],
//                    'ID_Morphology' => $_POST['ID_Morphology'],
//                    'ID_Diagnosis' => $_POST['Diagnosis'],
//                    'ID_Disease' => $_POST['Disease'],
//                    'Diagnosis_Klinis' => $_POST['Diagnosis_Klinis'],
//                    'Diagnosis_Date' => $_POST['Diagnosis_Date'],
//                    'ID_Behaviour' => $_POST['Behaviour'],
//                    'No_Of_Metastases' => $_POST['No_Of_Metastases'],
//                    'ID_Grade' => $_POST['Grade'],
//                    'ID_Stage' => $_POST['Stage'],
//                    'ID_Laterality' => $_POST['Laterality'],
//                    'ID_Immunohistokimia' => $_POST['ID_Immunohistokimia'],
//                    'Date_IHC' => $_POST['Date_IHC'],
//                    'ID_Hybridization' => $_POST['ID_Hybridization'],
//                    'Date' => $_POST['Date'],
//                    'ID_Biopsy' => $_POST['Biopsy'],
//                    'ID_Sublocation' => $_POST['Sublocation'],
//                    'Kesimpulan' => $_POST['kesimpulan'],
//                    'Update_Date' => $Date,
//                );
//                $registrar = array(
//                    'NIK' => $NIK,
//                    'Admission_Date' => $_POST['Admission_Date'],
//                    'Date_Last_Contact' => $_POST['Date_Last_Contact'],
//                    'id_status' => $_POST['ID_Status'],
//                    'Registrar' => $_POST['Registrar'],
//                    'Date_Of_Abstract' => $_POST['Date_Of_Abstract'],
//                    'Verifeir' => $_POST['Verifeir'],
//                    'Date_Of_Verification' => $_POST['Date_Of_Verification'],
//                    'Update_Date' => $Date,
//                );



                if ($this->user_model->ubahdata('data_pasien', 'NIK', $NIK, $datapasien)) {
//      $this->user_model->ubahdata('data_tumor_pasien', 'NIK', $NIK, $datatumor);
//   $this->user_model->ubahdata('distant_metastases_pasien', 'NIK', $NIK, $datapasien);
//   $this->user_model->ubahdata('sources_follow_up', 'NIK', $NIK, $datapasien);
//   $this->user_model->ubahdata('treatment_pasien', 'NIK', $NIK, $datapasien);
//    $this->user_model->ubahdata('registrar', 'NIK', $NIK, $registrar);
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DiUpdate');
                    redirect(base_url() . 'Pasien/DetailPasien/' . $NIK . '');
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect(base_url() . 'Pasien/DetailPasien/' . $NIK . '');
                }
            } else {
                $data['row'] = $data_user->row();
                $data['isi'] = $isinya;
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function hapus($kode = null) {
        $table = 'data_pasien';
        $where = 'NIK';
        $method = 'Pasien';
        if ($this->user_model->getdata_bykode($table, $where, $kode)) {
            if ($this->user_model->Hapusdata($table, array($where => $kode))) {
                $this->user_model->Hapusdata('data_tumor_pasien', array($where => $kode));
                $this->user_model->Hapusdata('distant_metastases_pasien', array($where => $kode));
                $this->user_model->Hapusdata('sources_follow_up', array($where => $kode));
                $this->user_model->Hapusdata('treatment_pasien', array($where => $kode));
                $this->user_model->Hapusdata('registrar', array($where => $kode));
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

//--------------------------------------- autocom

    public function topography() {
// tangkap variabel keyword dari URL
        $keyword = $this->uri->segment(3);

// cari di database
        $data = $this->db->from('topography')->like('Topography', $keyword)->get();

// format keluaran di dalam array
        foreach ($data->result() as $row) {

            $arr['query'] = $keyword;
            $arr['suggestions'][] = array(
                'value' => $row->Topography,
                'ID_Topography' => $row->ID_Topography
            );
        }

        echo json_encode($arr);
    }

    public function Morphology() {
// tangkap variabel keyword dari URL
        $keyword = $this->uri->segment(3);

// cari di database
        $data = $this->db->from('morphology')->like('Morphology', $keyword)->get();

// format keluaran di dalam array
        foreach ($data->result() as $row) {
            $arr['query'] = $keyword;
            $arr['suggestions'][] = array(
                'value' => $row->Morphology,
                'ID_Morphology' => $row->ID_Morphology
            );
        }
        echo json_encode($arr);
    }

    public function add_ajax_kab($id_prov) {
        $query = $this->db->order_by('nama', 'ASC')->get_where('wilayah_kabupaten', array('provinsi_id' => $id_prov));
        $data = "<option value=''>- Select Kabupaten -</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    public function add_ajax_kec($id_kab) {
        $query = $this->db->order_by('nama', 'ASC')->get_where('wilayah_kecamatan', array('kabupaten_id' => $id_kab));
        $data = "<option value=''> - Select Kecamatan - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    public function add_ajax_des($id_kec) {
        $query = $this->db->get_where('wilayah_desa', array('kecamatan_id' => $id_kec));
        $data = "<option value=''> - Kode Pos - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

}
