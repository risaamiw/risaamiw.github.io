<?php
class dokpen_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    // Menampilkand data dokpen
    public function daftar_dokpen()
    {
        $query = $this->db->query('SELECT dokpen_csirt.judul, dokpen_csirt.isi, dokpen_csirt.id_dokpen FROM dokpen_csirt');
        return $query->result_array();
    }

    public function detail_dokpen($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('dokpen_csirt');
            return $query->result_array();
        }
        $query = $this->db->get_where('dokpen_csirt', array('id_dokpen' => $id));
        return $query->row_array();
    }

    // Update dokpen
    public function edit_dokpen($data)
    {
        $this->db->where('id_dokpen', $data['id_dokpen']);
        return $this->db->update('dokpen_csirt', $data);
    }

    public function delete_dokpen($id)
    {
        $this->db->where('id_dokpen', $id);
        return $this->db->delete('dokpen_csirt');
    }

    public function tambah($data)
    {
        return $this->db->insert('dokpen_csirt', $data);
    }
}
