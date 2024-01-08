<?php
class indok_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    // Menampilkand data indok
    public function daftar_indok()
    {
        $query = $this->db->query('SELECT indok_csirt.no, indok_csirt.judul, indok_csirt.isi, indok_csirt.id_indok FROM indok_csirt');
        return $query->result_array();
    }

    public function detail_indok($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('indok_csirt');
            return $query->result_array();
        }
        $query = $this->db->get_where('indok_csirt', array('id_indok' => $id));
        return $query->row_array();
    }

    // Update indok
    public function edit_indok($data)
    {
        $this->db->where('id_indok', $data['id_indok']);
        return $this->db->update('indok_csirt', $data);
    }

    public function delete_indok($id)
    {
        $this->db->where('id_indok', $id);
        return $this->db->delete('indok_csirt');
    }

    public function tambah($data)
    {
        return $this->db->insert('indok_csirt', $data);
    }
}
