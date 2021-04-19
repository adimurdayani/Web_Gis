<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visimisi extends CI_Controller
{

    public function index()
    {
        $data = [
            'judul'     => 'Halaman Visi dan Misi | WebGis',
            'visimisi' => $this->db->get('visimisi')->row_array(),
            'get_administrasi'    => $this->db->get('p_administrasi')->row_array(),
            'get_persebaran'    => $this->db->get('p_persebaran')->row_array(),
            'get_maskin'           => $this->db->get('maskin')->result_array(),
            'alamat' => $this->db->get('alamat')->result_array(),
            'list_alamat' =>   $this->db->get('alamat')->result_array(),
            'isi'       => 'depan/profil/visimisi/visimisi'
        ];

        $this->load->view('template_depan/wraper', $data, FALSE);
    }
}

/* End of file Visimisi.php */