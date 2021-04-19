<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_struktur extends CI_Model
{

    public function add_struktur()
    {
        # code...
        $judul = htmlspecialchars($this->input->post('judul', true));
        $penulis = htmlspecialchars($this->input->post('penulis', true));
        $gambar = $_FILES['gambar']['name'];

        if ($gambar) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '1024';
            $config['upload_path']   = './assets/img/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        #proses update data
        $this->db->set('judul', $judul);
        $this->db->set('penulis', $penulis);
        $this->db->insert('struktur');
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di tambahkan!</div>');
        redirect('belakang/struktur');
    }

    public function edit_struktur()
    {
        # code...
        $id = htmlspecialchars($this->input->post('id', true));
        $judul = htmlspecialchars($this->input->post('judul', true));
        $penulis = htmlspecialchars($this->input->post('penulis', true));
        $gambar = $_FILES['gambar']['name'];

        if ($gambar) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        #proses update data
        $this->db->set('judul', $judul);
        $this->db->set('penulis', $penulis);
        $this->db->where('id', $id);
        $this->db->update('struktur');
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di edit!</div>');
        redirect('belakang/struktur');
    }
    public function get_struktur($id)
    {
        # code...
        return $this->db->get_where('struktur', ['id' => $id])->row_array();
    }
}

/* End of file M_struktur.php */