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
        $this->db->where('id_mahasiswa', $id);
        $this->db->update('mahasiswa', $data);

        return $this->db->affected_rows() > 0;
    }

    public function delete_data($id)
    {
        $sql = "DELETE FROM mahasiswa where id_mahasiswa = $id";
        return $this->db->query($sql);
    }

    public function getAllKuesioner()
    {
        $sql = "SELECT * FROM mahasiswa LEFT JOIN prodi ON prodi.id_prodi";
        return $this->db->query($sql)->result();
    }
}
