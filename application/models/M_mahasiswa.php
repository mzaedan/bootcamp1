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

    public function getRow($id)
    {
        $sql = "SELECT * FROM mahasiswa WHERE id_mahasiswa = $id";

        return $this->db->query($sql)->row();
    }

    public function update_data($id, $data)
    {
        return $this->db->where('id_mahasiswa', $id)
            ->update('mahasiswa', $data);
    }

    public function delete_data($id)
    {
        $sql = "DELETE FROM mahasiswa where id_mahasiswa = $id";
        return $this->db->query($sql);
    }
}
