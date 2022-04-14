<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model
{
 function _construct(){
     $this->load->database();
 }

 public function get_pasien()
    {
    $query = $this->db->query("select * from pasien");
    return $query->result();
    }

    public function get_single_row_pasien($idpasien)
     {
          $query = $this->db->get_where('pasien', array('idpasien' => $idpasien));
          return $query->row();
     }
     
      public function delete_pasien($idpasien)
  {
    return $this->db->delete('pasien', array('idpasien' => $idpasien));
  }

  public function update_pasien($data, $idpasien)
  {
    $this->db->where('idpasien', $idpasien);
    $this->db->update('pasien', $data);
  }

  
     //check idpasien exist
     public function check_pasien_exists($idpasien)
     {
          $query = $this->db->get_where('pasien', array('idpasien' => $idpasien));
          if (empty($query->row_array())) {
               return true;
          } else {
               return false;
          }
     }


 }