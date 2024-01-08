<?php
class Kontak_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    // Menampilkand data kontak
    public function daftar_kontak()
    {
        $query = $this->db->query('SELECT kontak_csirt.id_kontak, kontak_csirt.icon, kontak_csirt.nama, kontak_csirt.status, kontak_csirt.jabatan FROM kontak_csirt');
        return $query->result_array();
    }

    public function detail_kontak($id = FALSE)
    {
        if ($id == FALSE) {
            $query = $this->db->get('kontak_csirt');
            return $query->result_array();
        }
        $query = $this->db->get_where('kontak_csirt', array('id_kontak' => $id));
        return $query->row_array();
    }

    // Update kontak
    public function edit_kontak($data)
    {
        $this->db->where('id_kontak', $data['id_kontak']);
        return $this->db->update('kontak_csirt', $data);
    }

    // Hapus kontak
    public function delete_kontak($id)
    {
        $this->db->where('id_kontak', $id);
        return $this->db->delete('kontak_csirt');
    }
    public function tambah($data)
    {
        return $this->db->insert('kontak_csirt', $data);
    }
}
