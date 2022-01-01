<?php 

class Admin_model extends CI_Model 
{
    public function create_new_main_cat($catname)
    {
        $data = array(
            'name' => $catname,
            'created_on' => date("Y/m/d")
        );
        $this->db->insert('nep_main_categories',$data);
        if($this->db->affected_rows() > 0)
        {
            $response = array(
                'status' => 'success',
                'message' => 'created new cat'
            );
            echo json_encode($response);
        } 
        else
        {
            $response = array(
                'status' => 'err',
                'message' => 'failed to create new cat'
            );
            echo json_encode($response);
        }
    }   
}
