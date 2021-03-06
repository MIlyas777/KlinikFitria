<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Rawat_model extends CI_Model
{
 function _construct(){
     $this->load->database();
 }

 public function get_pasien()
    {
    $query = $this->db->query("select * from pasien");
    return $query->result();
    }

 public function get_rawat()
    {
    $query = $this->db->query("select * from rawat");
    return $query->result();
    }

    public function get_single_row_rawat($idrawat)
     {
          $query = $this->db->get_where('rawat', array('idrawat' => $idrawat));
          return $query->row();
     }
     
      public function delete_rawat($idrawat)
  {
    return $this->db->delete('rawat', array('idrawat' => $idrawat));
  }

  public function update_rawat($data, $idrawat)
  {
    $this->db->where('idrawat', $idrawat);
    $this->db->update('rawat', $data);
  }

  
     //check idobat exist
     public function check_rawat_exists($idrawat)
     {
          $query = $this->db->get_where('rawat', array('idrawat' => $idrawat));
          if (empty($query->row_array())) {
               return true;
          } else {
               return false;
          }
     }


 }