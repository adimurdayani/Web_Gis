<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visimisi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_visimisi');

        if (!$this->session->userdata('email')) {
            redirect('login/login');
        }
    }

    public function index()
    {
        $data = [
            'judul' => 'Visi dan Misi | Halaman Admin',
            'list_visimisi' => $this->db->get('visimisi')->result_array(),
            'get_user' => $this->m_user->get_user(),
            'isi'   => 'belakang/visimisi/list_visimisi'
        ];
        $this->load->view('template_belakang/wraper', $data, FALSE);
    }

    public function tbh_visimisi()
    {
        $data = [
            'judul' => 'Tambah Visi dan Misi | Halaman Admin',
            'get_user' => $this->m_user->get_user(),
            'isi'   => 'belakang/visimisi/tbh_visimisi'
        ];
        #proses insert data
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template_belakang/wraper', $data, FALSE);
        } else {
            $this->m_visimisi->add_visimisi();
        }
    }

    public function edit_visimisi($id)
    {
        $data = [
            'judul'         => 'Edit Visi dan Misi | Halaman Admin',
            'get_visimisi'  => $this->db->get_where('visimisi', ['id' => $id])->row_array(),
            'get_user'      => $this->m_user->get_user(),
            'isi'           => 'belakang/visimisi/edit_visimisi'
        ];
        #proses insert data
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template_belakang/wraper', $data, FALSE);
        } else {
            $this->m_visimisi->edit_visimisi($id);
        }
    }

    public function hapus_visimisi($id)
    {
        # code...
        $this->db->delete('visimisi', ['id' => $id]);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
        redirect('belakang/visimisi');
    }
}

/* End of file Visimisi.php */