<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tujuan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_tujuan');
    }


    public function index()
    {
        $data = [
            'judul'         => 'Halaman Tujuan | WebGis',
            'get_tujuan'    => $this->db->get('tujuan')->result_array(),
            'get_administrasi'    => $this->db->get('p_administrasi')->row_array(),
            'get_persebaran'    => $this->db->get('p_persebaran')->row_array(),
            'get_maskin'           => $this->db->get('maskin')->result_array(),
            'alamat'        => $this->db->get('alamat')->result_array(),
            'list_alamat'   =>   $this->db->get('alamat')->result_array(),
            'isi'           => 'depan/profil/tujuan/tujuan'
        ];

        $this->load->view('template_depan/wraper', $data, FALSE);
    }
}

/* End of file Tentang.php */