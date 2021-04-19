<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{

    public function index()
    {
        $data = [
            'judul'     => 'Halaman Kotank | WebGis',
            'get_kontak' => $this->db->get('kontak')->row_array(),
            'alamat' => $this->db->get('alamat')->result_array(),
            'list_alamat' =>   $this->db->get('alamat')->result_array(),
            'isi'       => 'depan/kontak/kontak'
        ];

        $this->load->view('template_depan/wraper', $data, FALSE);
    }
}

/* End of file Kontak.php */