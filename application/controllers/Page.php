<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('IndexModel');
	}
	
	
	public function welcome()
		{
			$this->load->model('IndexModel');
	
			$data['tbl_profile'] = $this->IndexModel->profile();
			$data['cont'] = $this->IndexModel->contact();

				
			$this->load->view('welcome',$data);
	}

	public function edit_cont($id){
		$data['tbl_contact'] = $this->db->get_where('tbl_contact', ['id' => $id])->row_array();
		$data['tbl_pendidikan'] = $this->db->get_where('tbl_pendidikan', ['id' => $id])->row_array();
		$data['tbl_pengalaman'] = $this->db->get_where('tbl_pengalaman', ['id' => $id])->row_array();
		$data['tbl_profile'] = $this->db->get_where('tbl_profile', ['id' => $id])->row_array();
		$this->load->view('edit',$data);
	}
	
	public function edit_profile()
    {

        $this->db->where('id', $this->input->post('id'));
        $this->db->set('nama', $this->input->post('nama'));
        $this->db->set('jk', $this->input->post('jk'));
        $this->db->set('umur', $this->input->post('umur'));
		$this->db->set('tgl_lhr', $this->input->post('tgl_lhr'));
		$this->db->set('status', $this->input->post('status'));
		$this->db->set('hobi', $this->input->post('hobi'));
		$this->db->set('alamat', $this->input->post('alamat'));
		$this->db->set('tentang', $this->input->post('tentang'));
        $this->db->update('tbl_profile');



	  redirect('../index.php/page/edit_cont/1');
    }
	
	public function edit_pendidikan()
    {

        $this->db->where('id', $this->input->post('id'));
        $this->db->set('tk', $this->input->post('tk'));
        $this->db->set('sd', $this->input->post('sd'));
        $this->db->set('smp', $this->input->post('smp'));
		$this->db->set('sma', $this->input->post('sma'));
		$this->db->set('univ', $this->input->post('univ'));
        $this->db->update('tbl_pendidikan');


        redirect('../index.php/page/edit_cont/1');
	}
	
	public function edit_peng()
    {

        $this->db->where('id', $this->input->post('id'));
        $this->db->set('peng_1', $this->input->post('peng_1'));
        $this->db->set('peng_2', $this->input->post('peng_2'));
        $this->db->set('peng_3', $this->input->post('peng_3'));
		$this->db->set('peng_4', $this->input->post('peng_4'));
        $this->db->update('tbl_pengalaman');

        redirect('../index.php/page/edit_cont/1');
	}
	

	public function edit_contact()
    {

        $this->db->where('id', $this->input->post('id'));
        $this->db->set('nohp', $this->input->post('nohp'));
        $this->db->set('email', $this->input->post('email'));
        $this->db->set('fb', $this->input->post('fb'));
		$this->db->set('ig', $this->input->post('ig'));
		$this->db->set('yt', $this->input->post('yt'));
        $this->db->update('tbl_contact');
        
	  redirect('../index.php/page/edit_cont/1');
    }


	public function thanks(){
		$this->load->view('thanks');
	}
}
