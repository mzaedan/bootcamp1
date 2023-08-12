<?php

class M_mahasiswa extends CI_Model
{

    public function get_data()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }

    public function input_data($data)
    {
        return $this->db->insert('Mahasiswa', $data);
    }
}
