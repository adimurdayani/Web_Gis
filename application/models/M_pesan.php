<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pesan extends CI_Model
{

    public function tbh_pesan()
    {
        # code...
        $nama = htmlspecialchars($this->input->post('nama'), true);
        $no_hp = htmlspecialchars($this->input->post('no_hp'), true);
        $isi = htmlspecialchars($this->input->post('isi'), true);
        $alamat = htmlspecialchars($this->input->post('alamat'), true);

        $this->db->set('nama', $nama);
        $this->db->set('no_hp', $no_hp);
        $this->db->set('isi', $isi);
        $this->db->set('alamat', $alamat);
        $this->db->insert('pesan');
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di kirim!</div>');
        redirect('kontak');
    }
}

/* End of file M_pesan.php */