<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_pesan');

        if (!$this->session->userdata('email')) {
            redirect('login/login');
        }
    }


    public function index()
    {
        $data = [
            'judul'         => 'Pesan | Halaman Admin',
            'list_pesan'    => $this->db->get('pesan')->result_array(),
            'get_user'      => $this->m_user->get_user(),
            'isi'           => 'belakang/pesan/list_pesan'
        ];
        $this->load->view('template_belakang/wraper', $data, FALSE);
    }

    public function tbh_data()
    {
        # code...
        $data = [
            'judul'         => 'Pesan | Halaman Admin',
            'list_pesan'    => $this->db->get('pesan')->result_array(),
            'get_user'      => $this->m_user->get_user(),
            'isi'           => 'belakang/pesan/list_pesan'
        ];

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No Telp', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('isi', 'Pesan', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template_belakang/wraper', $data, FALSE);
        } else {
            # code...
            $this->m_pesan->tbh_pesan();
        }
    }

    public function hapus_data($id)
    {
        # code...
        $this->db->delete('pesan', ['id' => $id]);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
        redirect('belakang/pesan');
    }
}

/* End of file Pesan.php */