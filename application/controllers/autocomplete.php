<?php //

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Autocomplete extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

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
        $data = $this->db->from('Morphology')->like('Morphology', $keyword)->get();

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

    function add_ajax_kab($id_prov) {
        $query = $this->db->get_where('wilayah_kabupaten', array('provinsi_id' => $id_prov));
        $data = "<option value=''>- Select Kabupaten -</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function add_ajax_kec($id_kab) {
        $query = $this->db->get_where('wilayah_kecamatan', array('kabupaten_id' => $id_kab));
        $data = "<option value=''> - Select Kecamatan - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function add_ajax_des($id_kec) {
        $query = $this->db->get_where('wilayah_desa', array('kecamatan_id' => $id_kec));
        $data = "<option value=''> - Kode Pos - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

}

?>