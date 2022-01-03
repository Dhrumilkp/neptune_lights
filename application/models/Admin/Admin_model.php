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
                // Upload image to a folder
                $create_path = "uploads/cat_img/";
                if (!file_exists($create_path)) {
                    mkdir($create_path, 0777, true);
                }
                if( $_FILES['cat_img']['name'] != "" ) {
                    $path=$_FILES['cat_img']['name'];
                    $pathto="uploads/cat_img/".$path;
                    move_uploaded_file( $_FILES['cat_img']['tmp_name'],$pathto) or die( "Could not copy file!");
                    // Save the data
                    $data = array(
                        'name' => $catname,
                        'img_path' => $pathto,
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
    public function delete_cat_id($id)
    {
        $this->db->where('id',$id);
        if($this->db->delete('nep_main_categories'))
        {
            $response = array(
                'status' => 'success'
            );
            echo json_encode($response);
        }
        else
        {
            $response = array(
                'status' => 'err',
                'message' => 'Cannot delete this cat'
            );
            echo json_encode($response);
        }
    }
    public function add_new_sub_cat_model()
    {
        $query = $this->db->get('nep_sub_categories');
        if($query->num_rows() > 10)
        {
            $response = array(
                'status' => 'err',
                'message' => 'you cannot create more sub cat reach out to info@kpitotal.com'
            );
            echo json_encode($response);
        }
        else
        {
            $this->db->where('name',$_POST['sub_cat_name']);
            $query = $this->db->get('nep_sub_categories');
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
                // Upload image to folder
                // Upload image to a folder
                $create_path = "uploads/sub_cat_img/";
                if (!file_exists($create_path)) {
                    mkdir($create_path, 0777, true);
                }
                if( $_FILES['sub_cat_img']['name'] != "" ) {
                    $path=$_FILES['sub_cat_img']['name'];
                    $pathto="uploads/sub_cat_img/".$path;
                    move_uploaded_file( $_FILES['sub_cat_img']['tmp_name'],$pathto) or die( "Could not copy file!");
                    // Push data to database

                    $data = array(
                        'name' => $_POST['sub_cat_name'],
                        'img_path' => $pathto,
                        'created_on' => date("Y/m/d"),
                        'main_cat' => $_POST['main_cat_id']
                    );
                    $this->db->insert('nep_sub_categories',$data);
                    if($this->db->affected_rows() > 0)
                    {
                        $id = $this->db->insert_id();
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
        }
    }
}
