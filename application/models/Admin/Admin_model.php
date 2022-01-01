<?php 

class Admin_model extends CI_Model 
{
    public function create_new_main_cat($catname)
    {
        $query = $this->db->get('nep_main_categories');
        if($query->num_rows() > 5)
        {
            $response = array(
                'status' => 'err',
                'message' => 'you cannot create more cat reach out to info@kpitotal.com'
            );
            echo json_encode($response);
        }
        else
        {
            $this->db->where('name',$catname);
            $query = $this->db->get('nep_main_categories');
            if($query->num_rows() > 0)
            {
                $response = array(
                    'status' => 'err',
                    'message' => 'category already present'
                );
                echo json_encode($response);
            }
            else
            {
                $data = array(
                    'name' => $catname,
                    'created_on' => date("Y/m/d")
                );
                $this->db->insert('nep_main_categories',$data);
                if($this->db->affected_rows() > 0)
                {
                    $id = $this->db->insert_id();
                    $response = array(
                        'status' => 'success',
                        'message' => 'created new cat',
                        'cat_name' => $catname,
                        'id' => $id
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
    } 
    public function get_all_cat()
    {
        $this->db->limit(5);
        $query = $this->db->get('nep_main_categories');
        if($query -> num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }  
}
