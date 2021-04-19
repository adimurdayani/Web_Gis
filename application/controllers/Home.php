<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data = [
            'judul'         => 'Gis Kantor | Halaman Utama',
            'alamat'        => $this->db->get('alamat')->result_array(),
            'list_alamat'   =>   $this->db->get('alamat')->result_array(),
            'get_sejarah'   =>   $this->db->get('sejarah')->row_array(),
            'isi'           => 'depan/home'
        ];
        $this->load->view('template_depan/wraper', $data, FALSE);
    }
}

/* End of file Home.php */