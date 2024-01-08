<?php
class buletin_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    // Menampilkand data buletin
    public function daftar_buletin($limit, $offset)
    {
        $query = $this->db->query('SELECT berita_csirt.tanggal, berita_csirt.judul, berita_csirt.image, berita_csirt.ringkasan, berita_csirt.id_brt FROM berita_csirt ORDER BY tanggal desc LIMIT ' . $limit . ' OFFSET ' . $offset);
        return $query->result_array();
    }

    public function buletin()
    {
        $query = $this->db->query('SELECT berita_csirt.tanggal, berita_csirt.judul, berita_csirt.image, berita_csirt.ringkasan, berita_csirt.id_brt FROM berita_csirt ORDER BY tanggal desc ');
        return $query->result_array();
    }

    public function headline()
    {
        $query = $this->db->query('SELECT berita_csirt.judul, berita_csirt.image, berita_csirt.ringkasan, berita_csirt.id_brt FROM berita_csirt ORDER BY tanggal desc LIMIT 3');
        return $query->result_array();
    }

    public function detail_buletin($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('berita_csirt');
            return $query->result_array();
        }
        $query = $this->db->get_where('berita_csirt', array('id_brt' => $id));
        return $query->row_array();
    }

    // Update buletin
    public function edit_buletin($data)
    {
        $this->db->where('id_brt', $data['id_brt']);
        return $this->db->update('berita_csirt', $data);
    }

    public function delete_buletin($id)
    {
        $this->db->where('id_brt', $id);
        return $this->db->delete('berita_csirt');
    }

    public function tambah($data)
    {
        return $this->db->insert('berita_csirt', $data);
    }
    function countAll()
    {
        return $this->db->get('berita_csirt')->num_rows();
    }
}
