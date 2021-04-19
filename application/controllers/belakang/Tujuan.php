<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tujuan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_tujuan');

        if (!$this->session->userdata('email')) {
            redirect('login/login');
        }
    }

    public function index()
    {
        $data = [
            'judul'         => 'Tujuan WebGis | Halaman Admin',
            'list_tujuan'   => $this->db->get('tujuan')->result_array(),
            'get_user'      => $this->m_user->get_user(),
            'isi'           => 'belakang/tujuan/list_tujuan'
        ];
        $this->load->view('template_belakang/wraper', $data, FALSE);
    }

    public function tbh_tujuan()
    {
        $data = [
            'judul' => 'Tambah Tujuan WebGis | Halaman Admin',
            'get_user' => $this->m_user->get_user(),
            'isi'   => 'belakang/tujuan/tbh_tujuan'
        ];
        #proses insert data
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template_belakang/wraper', $data, FALSE);
        } else {
            $this->m_tujuan->add_tujuan();
        }
    }

    public function edit_tujuan($id)
    {
        $data = [
            'judul'         => 'Edit Tujuan WebGis | Halaman Admin',
            'get_tujuan'    => $this->m_tujuan->get_tujuan($id),
            'get_user'      => $this->m_user->get_user(),
            'isi'           => 'belakang/tujuan/edit_tujuan'
        ];
        #proses insert data
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template_belakang/wraper', $data, FALSE);
        } else {
            $this->m_tujuan->edit_tujuan();
        }
    }

    public function hapus_tujuan($id)
    {
        # code...
        $this->db->delete('tujuan', ['id' => $id]);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
        redirect('belakang/tujuan');
    }
}

/* End of file Tujuan.php */