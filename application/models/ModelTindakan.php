<?php
class ModelTindakan extends CI_Model
{
    function getData()
    {
        return $this->db->get('tindakan')->result();
    }

    function search($keyword = null)
    {
        $this->db->select('*');
        $this->db->from('tindakan');
        if (!empty($keyword)) {
            $this->db->like('namatindakan', $keyword);
        }
        return $this->db->get()->result_array();
    }

    function add()
    {
        # code...
    }
}
