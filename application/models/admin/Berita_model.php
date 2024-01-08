<?php
class berita_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    // Menampilkand data berita
    public function daftar_berita()
    {
        $query = $this->db->query('SELECT beritavw_csirt.judul, beritavw_csirt.image, beritavw_csirt.isi, beritavw_csirt.id_brtvw FROM beritavw_csirt');
        return $query->result_array();
    }

    public function detail_berita($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('beritavw_csirt');
            return $query->result_array();
        }
        $query = $this->db->get_where('beritavw_csirt', array('id_brtvw' => $id));
        return $query->row_array();
    }

    // Update berita
    public function edit_berita($data)
    {
        $this->db->where('id_brtvw', $data['id_brtvw']);
        return $this->db->update('beritavw_csirt', $data);
    }

    public function delete_berita($id)
    {
        $this->db->where('id_brtvw', $id);
        return $this->db->delete('beritavw_csirt');
    }

    public function tambah($data)
    {
        return $this->db->insert('beritavw_csirt', $data);
    }
}
