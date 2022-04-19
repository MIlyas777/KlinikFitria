<?php
class Pasienmodel extends CI_Model
{
    // ^ membuat fungsi untuk mengambil data dari tabel pasien
    function get_pasien()
    {
        $query = $this->db->get('pasien');
        return $query->result();
    }

      // ^ membuat fungsi insert pasien
      public function insert_pasien($a)
      {
          $data = array(
              'idpasien' => $a['idpasien'],
              'nama' => $a['nama'],
              'alamat' => $a['alamat'],
              'tgllahir' => $a['tgllahir'],
              'notelp' => $a['notelp']
          );
          return $this->db->insert('pasien', $data);
      }

      // ^ membuat fungsi update pasien
    public function update_pasien($a)
    {
        $data = array(
            'idpasien' => $a['idpasien'],
            'nama' => $a['nama'],
            'alamat' => $a['alamat'],
            'tgllahir' => $a['tgllahir'],
            'notelp' => $a['notelp'],
        );
        $this->db->where('idpasien', $a['idpasien']);
        return $this->db->update('pasien', $data);
    }
        // ^ membuat fungsi delete pasien
    public function delete_pasien($a)
    {
        $this->db->where('idpasien', $a);
        return $this->db->delete('pasien');
    }

    public function get_pasien_by_id($a)
    {
        return $this->db->get_where('pasien',['idpasien' => $a])->row_array();
    }

    public function print_pasien($a)
    {
        $this->db->where('idpasien', $a);
        return $this->db->get('pasien')->row_array();
    }
 
}
