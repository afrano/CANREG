<?php

Class Laporan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('user_model');
        cek_login();
        cek_hakakses(array(1, 2, 3));
    }

    function index() {
        
    }

    function cetak($NIK = null) {
        $pasien = $this->user_model->get_DetilPasien($NIK)->result();
        foreach ($pasien as $row) {
            $pdf = new FPDF('l', 'mm', 'A4');
            $pdf->AddPage('portrait');
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Image('assets/Logokemses.png', 12, 8, 12, 12, 'png', '');
            $pdf->Cell(190, 7, 'KEMENTRIAN KESEHATAN REPUBLIK INDONESIA', 0, 1, 'C');
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(190, 6, 'DATA PASIEN', 1, 0, 'C');
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->SetFont('Arial', '', 10);

            $query = $this->db->get('sex');
            foreach ($query->result() as $row2) {
                if ($row2->id_sex == $row->ID_Sex) {
                    $pdf->Cell(31, 6, 'NIK', 0, 'C');
                    $pdf->Cell(70, 6, $row->NIK, 1, 0, 'L');
                    $pdf->Cell(25, 6, ' Sex', 0, 'C');
                    $pdf->Cell(10, 6, $row->ID_Sex, 1, 0, 'C');
                    $pdf->Cell(54, 6, $row2->sex, 1, 0, 'L');
                    $pdf->Cell(10, 7, '', 0, 1);
                    $pdf->Cell(31, 6, 'MRN', 0, 'C');
                    $pdf->Cell(70, 6, $row->MRN, 1, 0, 'L');
                    $pdf->Cell(10, 7, '', 0, 1);
                    $pdf->Cell(31, 6, '', 0, 'C');
                    $pdf->Cell(40, 6, 'tuhuh digit kode RS', 1, 0, 'C');
                    $pdf->Cell(30, 6, 'No MR', 1, 0, 'C');
                    $pdf->Cell(25, 6, ' Race', 0, 'C');
                }
            }
            $query = $this->db->get('race');
            foreach ($query->result() as $row2) {
                if ($row2->id_race == $row->ID_Race) {
                    $pdf->Cell(10, 6, $row->ID_Race, 1, 0, 'C');
                    $pdf->Cell(54, 6, $row2->race, 1, 0, 'L');
                }
            }

            $query = $this->db->get('religion');
            foreach ($query->result() as $row2) {
                if ($row2->id_religion == $row->ID_Religion) {
                    $pdf->Cell(10, 7, '', 0, 1);

                    $pdf->Cell(31, 6, 'First name ', 0, 'C');
                    $pdf->Cell(70, 6, $row->First_Name, 1, 0, 'L');
                    $pdf->Cell(25, 6, ' Religion', 0, 'C');
                    $pdf->Cell(10, 6, $row->ID_Religion, 1, 0, 'C');
                    $pdf->Cell(54, 6, $row2->religion, 1, 0, 'L');
                }
            }

            $query = $this->db->get('status_hubungan');
            foreach ($query->result() as $row2) {
                if ($row2->id_hubungan == $row->id_status_hubungan) {
                    $pdf->Cell(10, 7, '', 0, 1);

                    $pdf->Cell(31, 6, 'Middle Name ', 0, 'C');
                    $pdf->Cell(70, 6, $row->Middle_Name, 1, 0, 'L');
                    $pdf->Cell(25, 6, ' Status ', 0, 'C');
                    $pdf->Cell(10, 6, $row->id_status_hubungan, 1, 0, 'C');
                    $pdf->Cell(54, 6, $row2->status_hubungan, 1, 0, 'L');
                }
            }

            $query = $this->db->get('occupation');
            foreach ($query->result() as $row2) {
                if ($row2->id_occupation == $row->ID_Occupation) {
                    $pdf->Cell(10, 7, '', 0, 1);

                    $pdf->Cell(31, 6, 'Family Name ', 0, 'C');
                    $pdf->Cell(70, 6, $row->Family_Name, 1, 0, 'L');
                    $pdf->Cell(25, 6, ' Occupation ', 0, 'C');
                    $pdf->Cell(10, 6, $row->ID_Occupation, 1, 0, 'C');
                    $pdf->Cell(54, 6, $row2->Occupation, 1, 0, 'L');
                }
            }
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(31, 6, 'Place of birth ', 0, 'C');
            $pdf->Cell(70, 6, $row->Place_Of_Birth, 1, 0, 'L');

            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(31, 6, 'Date Of birth  ', 0, 'C');
            $pdf->Cell(70, 6, $row->Date_Of_Birth, 1, 0, 'L');
            $pdf->Cell(25, 6, ' No.Telp/HP ', 0, 'C');
            $pdf->Cell(64, 6, $row->No_Telpon, 1, 0, 'L');
            $pdf->Cell(10, 10, '', 0, 1);


            $pdf->Cell(31, 6, 'Alamat tetap  ', 0, 'C');
            $pdf->Cell(159, 6, $row->Alamat_Tetap, 1, 0, 'L');
            $pdf->Cell(10, 7, '', 0, 1);


            $pdf->Cell(31, 6, 'Pov/Kab/Kota  ', 0, 'C');

            $query = $this->db->get('wilayah_provinsi');
            foreach ($query->result() as $row1) {
                if ($row1->id == $row->ID_Provinsi) {
                    $pdf->Cell(40, 6, $row1->nama, 1, 0, 'L');
                } else {
                    echo '';
                }
            }

            $query = $this->db->get('wilayah_kabupaten');
            foreach ($query->result() as $row1) {
                if ($row1->id == $row->id_kabupaten) {
                    $pdf->Cell(40, 6, $row1->nama, 1, 0, 'L');
                } else {
                    echo '';
                }
            }
            $query = $this->db->get('wilayah_kecamatan');
            foreach ($query->result() as $row1) {
                if ($row1->id == $row->id_kecamatan) {
                    $pdf->Cell(40, 6, $row1->nama, 1, 0, 'L');
                } else {
                    echo '';
                }
            }

            $pdf->Cell(19, 6, 'Kode pos  ', 1, 0, 'C');
            $pdf->Cell(20, 6, $row->kode_pos, 1, 0, 'L');



            $pdf->Cell(10, 10, '', 0, 1);
            $pdf->Cell(31, 6, 'Alamat Sementara  ', 0, 'C');
            $pdf->Cell(159, 6, $row->Alamat_Sementara, 1, 0, 'L');

            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(31, 6, 'Pov/Kab/Kota  ', 0, 'C');

            $query = $this->db->get('wilayah_provinsi');
            foreach ($query->result() as $row1) {
                if ($row1->id == $row->id_provinsi_1) {
                    $pdf->Cell(40, 6, $row1->nama, 1, 0, 'L');
                } else {
                    echo '';
                }
            }


            $query = $this->db->get('wilayah_kabupaten');
            foreach ($query->result() as $row1) {
                if ($row1->id == $row->id_kabupaten_1) {
                    $pdf->Cell(40, 6, $row1->nama, 1, 0, 'L');
                } else {
                    echo '';
                }
            }
            $query = $this->db->get('wilayah_kecamatan');
            foreach ($query->result() as $row1) {
                if ($row1->id == $row->id_kecamatan_1) {
                    $pdf->Cell(40, 6, $row1->nama, 1, 0, 'L');
                } else {
                    echo '';
                }
            }

            $pdf->Cell(19, 6, 'Kode pos  ', 1, 0, 'C');
            $pdf->Cell(20, 6, $row->kode_pos1, 1, 0, 'L');


            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(190, 6, 'DATA TUMOR', 1, 0, 'C');

            $query = $this->db->get('data_tumor_pasien');
            foreach ($query->result() as $row2) {
                if ($row2->NIK == $row->NIK) {
                    $pdf->SetFont('Arial', '', 10);
                    $pdf->Cell(10, 7, '', 0, 1);
                    $pdf->Cell(70, 6, 'Topography  ', 0, 'C');
                    $pdf->Cell(35, 6, $row2->ID_Topography, 1, 0, 'C');
                    $pdf->Cell(10, 6, '', 0, 'C');
                    $pdf->Cell(40, 6, 'Behaviour', 0, 'C');
                    $pdf->Cell(35, 6, $row2->ID_Behaviour, 1, 0, 'C');

                    $pdf->Cell(10, 7, '', 0, 1);
                    $pdf->Cell(70, 6, 'Morphology  ', 0, 'C');
                    $pdf->Cell(35, 6, $row2->ID_Morphology, 1, 0, 'C');

                    $pdf->Cell(10, 7, '', 0, 1);
                    $pdf->Cell(70, 6, 'Most valid Basic of diagnosis cancer    ', 0, 'C');
                    $pdf->Cell(35, 6, $row2->ID_Diagnosis, 1, 0, 'C');
                    $pdf->Cell(10, 6, '', 0, 'C');
                    $pdf->Cell(40, 6, 'Grade', 0, 'C');
                    $pdf->Cell(35, 6, $row2->ID_Grade, 1, 0, 'C');

                    $pdf->Cell(10, 7, '', 0, 1);
                    $pdf->Cell(70, 6, 'Clinical ext. of disease before treatment', 0, 'C');
                    $pdf->Cell(35, 6, $row2->ID_Disease, 1, 0, 'C');
                    $pdf->Cell(10, 6, '', 0, 'C');
                    $pdf->Cell(40, 6, 'Stage', 0, 'C');
                    $pdf->Cell(35, 6, $row2->ID_Stage, 1, 0, 'C');



                    $pdf->Cell(10, 7, '', 0, 1);
                    $pdf->Cell(70, 6, 'In Situ Hybridization', 0, 'C');
                    $pdf->Cell(35, 6, $row2->ID_Hybridization, 1, 0, 'C');

                    $pdf->Cell(10, 6, '', 0, 'C');
                    $pdf->Cell(40, 6, 'Date', 0, 'C');
                    $pdf->Cell(35, 6, $row2->Date, 1, 0, 'C');

                    $pdf->Cell(10, 7, '', 0, 1);
                    $pdf->Cell(70, 6, 'Diagnosis Klinis', 0, 'C');
                    $pdf->Cell(35, 6, $row2->Diagnosis_Klinis, 1, 0, 'C');
                    $pdf->Cell(10, 6, '', 0, 'C');
                    $pdf->Cell(40, 6, 'Jenis Biopsy', 0, 'C');
                    $pdf->Cell(35, 6, $row2->ID_Biopsy, 1, 0, 'C');

                    $pdf->Cell(10, 7, '', 0, 1);
                    $pdf->Cell(70, 6, 'Diagnosis Date', 0, 'C');
                    $pdf->Cell(35, 6, $row2->Diagnosis_Date, 1, 0, 'C');
                    $pdf->Cell(10, 6, '', 0, 'C');
                    $pdf->Cell(40, 6, 'Laterality', 0, 'C');
                    $pdf->Cell(35, 6, $row2->ID_Laterality, 1, 0, 'C');


                    $pdf->Cell(10, 7, '', 0, 1);
                    $pdf->Cell(70, 6, 'Immunohistokimia/immunohistochemistry', 0, 'C');
                    $pdf->Cell(35, 6, $row2->ID_Immunohistokimia, 1, 0, 'C');

                    $pdf->Cell(10, 7, '', 0, 1);
                    $pdf->Cell(70, 6, 'Sublocation of Breast tumor', 0, 'C');
                    $pdf->Cell(35, 6, $row2->ID_Sublocation, 1, 0, 'C');

                    $pdf->Cell(10, 6, '', 0, 'C');

                    $pdf->Cell(40, 6, 'No.of metastases', 0, 'C');
                    $pdf->Cell(35, 6, $row2->No_Of_Metastases, 1, 0, 'C');
                }
            }

            $query = $this->db->get('treatment_pasien');
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(70, 6, 'Treatment at reporting institution', 0, 'C');
            foreach ($query->result() as $row2) {
                if ($row2->NIK == $row->NIK) {
                    $pdf->Cell(5, 6, $row2->ID_Treatment, 1, 0, 'C');
                }
            }
            $pdf->Cell(10, 7, '', 0, 1);

            $query = $this->db->get('treatment_pasien');
            $pdf->Cell(70, 6, 'Distant metastases', 0, 'C');
            foreach ($query->result() as $row2) {
                if ($row2->NIK == $row->NIK) {
                    $pdf->Cell(5, 6, $row2->ID_Treatment, 1, 0, 'C');
                }
            }
            $pdf->Cell(10, 10, '', 0, 1);
            $pdf->SetFont('Arial', '', 10);
            $pdf->Cell(190, 6, 'Sources/Follow up', 1, 0, 'C');
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(35, 6, 'Tgl.Periksa', 1, 0, 'C');
            $pdf->Cell(45, 6, 'Kode Rumah Sakit', 1, 0, 'C');
            $pdf->Cell(50, 6, 'Nama Rumah Sakit', 1, 0, 'C');
            $pdf->Cell(35, 6, 'Unit ID', 1, 0, 'C');
            $pdf->Cell(25, 6, 'Unit', 1, 0, 'C');
            $query = $this->db->get('sources_follow_up');
            foreach ($query->result() as $row2) {
                if ($row2->NIK == $row->NIK) {
                    $pdf->Cell(10, 6, '', 0, 1);
                    $pdf->Cell(35, 6, $row2->Tgl_Periksa, 1, 0, 'C');
                    $pdf->Cell(45, 6, $row2->Kode_Rumah_Sakit, 1, 0, 'C');
                    $pdf->Cell(50, 6, $row2->nama_rumahsakit, 1, 0, 'C');
                    $pdf->Cell(35, 6, $row2->Unit_ID, 1, 0, 'C');
                    $pdf->Cell(25, 6, $row2->Unit, 1, 0, 'C');
                }
            }
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(10, 7, 'Kesimpulan', 0, 1);
            $query = $this->db->get('data_tumor_pasien');
            foreach ($query->result() as $row2) {
                $pdf->Cell(190, 12, $row2->Kesimpulan, 1);
                $pdf->Cell(10, 8, '', 0, 1);
            }

            $pdf->Cell(10, 4, '', 0, 1);

            $pdf->SetFont('Arial', '', 10);
            $pdf->Cell(10, 7, '', 0, 1);

            $query = $this->db->get('registrar');
            foreach ($query->result() as $row2) {
                if ($row2->NIK == $row->NIK) {
                    $pdf->Cell(30, 6, 'Admission date  ', 0, 'C');
                    $pdf->Cell(30, 6, $row2->Admission_Date, 1, 0, 'C');
                    $pdf->Cell(5, 6, '', 0, 'C');
                    $pdf->Cell(30, 6, 'Registrar', 0, 'C');
                    $pdf->Cell(28, 6, $row2->Registrar, 1, 0, 'C');
                    $pdf->Cell(5, 6, '', 0, 'C');
                    $pdf->Cell(32, 6, 'Verifier', 0, 'C');
                    $pdf->Cell(30, 6, $row2->Verifeir, 1, 0, 'C');
                    $pdf->Cell(10, 6, '', 0, 1);
                    $pdf->Cell(30, 6, 'Date last contact  ', 0, 'C');
                    $pdf->Cell(30, 6, $row2->Date_Last_Contact, 1, 0, 'C');
                    $pdf->Cell(5, 6, '', 0, 'C');
                    $pdf->Cell(30, 6, 'Date of abstract', 0, 'C');
                    $pdf->Cell(28, 6, $row2->Date_Of_Abstract, 1, 0, 'C');
                    $pdf->Cell(5, 6, '', 0, 'C');
                    $pdf->Cell(32, 6, 'Date of Verification', 0, 'C');
                    $pdf->Cell(30, 6, $row2->Date_Of_Verification, 1, 0, 'C');
                    $pdf->Cell(10, 6, '', 0, 1);



                    $query = $this->db->get('status');
                    foreach ($query->result() as $row3) {
                        if ($row3->ID_Status == $row2->id_status) {
                            $pdf->Cell(30, 7, 'Status', 0, 'C');
                            $pdf->Cell(8, 6, $row3->ID_Status, 1, 0, 'C');
                            $pdf->Cell(22, 6, $row3->Status, 1, 0, 'C');
                        }
                    }
                }
            }
        }
        $pdf->Output('', 'Data Pasien ' . $NIK . ' ');
    }

}
