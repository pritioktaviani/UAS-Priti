<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IndexController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('IndexModel');
    }
    public function index()
    {
        $this->load->model('IndexModel');

        $data['prof'] = $this->IndexModel->profile();
        $data['pend'] = $this->IndexModel->pendidikan();
        $data['peng'] = $this->IndexModel->pengalaman();
        $data['cont'] = $this->IndexModel->contact();
        
        $this->load->view('index', $data);

    }

    public function login()
    {
    
        $this->load->view('login', $data);
    }

    public function edit($id_pelanggan)
    {
        $data['title'] = "Edit Pelanggan";
        $data['tbl_pelanggan'] = $this->db->get_where('tbl_pelanggan', ['id_pelanggan' => $id_pelanggan])->row_array();
       
        $this->load->view('templates/header', $data);
        $this->load->view('pelanggan/edit', $data);
        $this->load->view('templates/footer');

    }

    public function edit_action()
    {

        $this->db->where('id_pelanggan', $this->input->post('id_pelanggan'));
        $this->db->set('nama_pelanggan', $this->input->post('nama_pelanggan'));
        $this->db->set('usia', $this->input->post('usia'));
        $this->db->set('no_tlp', $this->input->post('no_tlp'));
        $this->db->update('tbl_pelanggan');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data pelanggan sudah di edit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('pelanggan');
    }

}