<?php

class M_mahasiswa extends CI_Model
{

    public function get_data()
    {
        $query = $this->db->get('mahasiswa'); // Ganti 'nama_tabel' dengan nama tabel Anda
        return $query->result();
    }

    public function input_data()
    {
    }
}
