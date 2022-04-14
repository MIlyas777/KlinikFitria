<?php
class Tindakan extends CI_Controller
{
    public function index()
    {

        $this->load->model('ModelTindakan');
        $keyword = $this->input->get('keyword');
        $data = $this->ModelTindakan->search($keyword);
        $data = array(
            'keyword'    => $keyword,
            'data'        => $data
        );

        $this->load->view('template/header');
        $this->load->view('tindakan', $data);
        $this->load->view('template/footer');
    }

    public function edit($a)
    { //fungsi edit
        $data['list'] = $this->modelUser->get_detail($a);
        $this->load->view('header');
        $this->load->view('users/edit', $data);
        $this->load->view('footer');
    }

    // function get_detailB($a)
    // {
    //     $this->db->where('id_buku', $a);
    //     return $this->db->get('buku')->row_array();
    // }

    // function insertB($a)
    // {
    //     $data = [
    //         'id_buku'      =>  $a['id_buku'],
    //         'kategori'      =>  $a['kategori'],
    //         'nama_buku'     =>  $a['nama_buku'],
    //         'harga'  =>  $a['harga'],
    //         'stok'    =>  $a['stok'],
    //         'penerbit'   =>  $a['penerbit']
    //     ];
    //     return $this->db->insert('buku', $data);
    // }

    // function updateB($a, $id)
    // {
    //     $data = [
    //         'id_buku'      =>  $a['id_buku'],
    //         'kategori'      =>  $a['kategori'],
    //         'nama_buku'     =>  $a['nama_buku'],
    //         'harga'  =>  $a['harga'],
    //         'stok'    =>  $a['stok'],
    //         'penerbit'   =>  $a['penerbit']
    //     ];
    //     $this->db->where('id_buku', $id);
    //     return $this->db->update('buku', $data);
    // }

    // function delete($a)
    // {
    //     $this->db->where('id_buku', $a);
    //     return $this->db->delete('buku');
    // }
}
