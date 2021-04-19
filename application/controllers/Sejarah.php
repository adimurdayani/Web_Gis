<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sejarah extends CI_Controller
{

    public function index()
    {
        $data = [
            'judul'         => 'Halaman Sejarah | WebGis',
            'get_sejarah'   => $this->db->get('sejarah')->row_array(),
            'alamat' => $this->db->get('alamat')->result_array(),
            'list_alamat' =>   $this->db->get('alamat')->result_array(),
            'isi'           => 'depan/profil/sejarah/sejarah'
        ];

        $this->load->view('template_depan/wraper', $data, FALSE);
    }
}

/* End of file Sejarah.php */