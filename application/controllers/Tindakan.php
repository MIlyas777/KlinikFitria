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
}
