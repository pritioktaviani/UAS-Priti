<?php

class IndexModel extends CI_Model
{
    public function profile()
    {
        $query = $this->db->get('tbl_profile');
        return $query->result_array();
    }
    
    public function pendidikan()
    {
        $query = "SELECT * FROM tbl_pendidikan";
        return $this->db->query($query)->result_array();
    }
    
    public function pengalaman()
    {
        $query = "SELECT * FROM tbl_pengalaman";
        return $this->db->query($query)->result_array();
    }
    
    public function contact()
    {
        $query = "SELECT * FROM tbl_contact";
        return $this->db->query($query)->result_array();
    }

}
